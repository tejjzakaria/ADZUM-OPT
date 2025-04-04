import requests
from db.database import get_db_connection
from config.config import ACCESS_TOKEN, AD_ACCOUNT_ID

def fetch_campaigns():
    base_url = "https://graph.facebook.com/v19.0"
    access_token = ACCESS_TOKEN
    fields = "id,name,status,objective,created_time,start_time,end_time,daily_budget,budget_remaining"

    campaigns_url = f"{base_url}/act_{AD_ACCOUNT_ID}/campaigns?fields={fields}&access_token={access_token}"

    all_campaigns = []
    print("🔄 Fetching Campaign Metadata")

    while campaigns_url:
        response = requests.get(campaigns_url)
        if response.status_code != 200:
            print("❌ Error fetching campaigns:", response.text)
            break

        data = response.json()
        batch = data.get("data", [])
        print(f"📦 Fetched {len(batch)} campaigns")

        all_campaigns.extend(batch)

        # Get the next page URL (if available)
        campaigns_url = data.get("paging", {}).get("next")

    if not all_campaigns:
        print("❌ No campaigns found.")
        return

    db = get_db_connection()
    cursor = db.cursor()

    for campaign in all_campaigns:
        campaign_id = campaign["id"]

        # Fetch insights
        insights_url = f"{base_url}/{campaign_id}/insights"
        insights_fields = "impressions,clicks,spend,cpc,ctr"
        insights_params = {
            "fields": insights_fields,
            "date_preset": "last_7d",
            "access_token": access_token
        }

        insights_response = requests.get(insights_url, params=insights_params)
        insights_data = insights_response.json().get("data", [])
        insights = insights_data[0] if insights_data else {}

        cursor.execute("""
            INSERT INTO campaigns (
                id, name, status, objective, created_time, start_time, end_time, daily_budget, budget_remaining,
                impressions, clicks, spend, cpc, ctr
            ) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
            ON DUPLICATE KEY UPDATE
                name=%s, status=%s, objective=%s, created_time=%s, start_time=%s, end_time=%s, daily_budget=%s, budget_remaining=%s,
                impressions=%s, clicks=%s, spend=%s, cpc=%s, ctr=%s
        """, (
            campaign_id,
            campaign.get("name"),
            campaign.get("status"),
            campaign.get("objective"),
            campaign.get("created_time"),
            campaign.get("start_time"),
            campaign.get("end_time"),
            campaign.get("daily_budget", 0),
            campaign.get("budget_remaining", 0),
            insights.get("impressions", 0),
            insights.get("clicks", 0),
            insights.get("spend", 0),
            insights.get("cpc", 0),
            insights.get("ctr", 0),
            # ON DUPLICATE UPDATE
            campaign.get("name"),
            campaign.get("status"),
            campaign.get("objective"),
            campaign.get("created_time"),
            campaign.get("start_time"),
            campaign.get("end_time"),
            campaign.get("daily_budget", 0),
            campaign.get("budget_remaining", 0),
            insights.get("impressions", 0),
            insights.get("clicks", 0),
            insights.get("spend", 0),
            insights.get("cpc", 0),
            insights.get("ctr", 0),
        ))

    db.commit()
    cursor.close()
    db.close()
    print(f"✅ Synced {len(all_campaigns)} campaigns successfully!")

if __name__ == "__main__":
    fetch_campaigns()
