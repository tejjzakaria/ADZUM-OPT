import requests
from db.database import get_db_connection
from config.config import ACCESS_TOKEN, AD_ACCOUNT_ID

BASE_URL = "https://graph.facebook.com/v19.0"
ACCESS_TOKEN = ACCESS_TOKEN

def fetch_adsets():
    print("🔄 Fetching Ad Sets")
    adsets_url = f"{BASE_URL}/act_{AD_ACCOUNT_ID}/adsets"
    fields = "id,name,status,campaign_id,daily_budget,start_time,end_time"
    params = {
        "fields": fields,
        "limit": 100,
        "access_token": ACCESS_TOKEN
    }

    db = get_db_connection()
    cursor = db.cursor()

    while adsets_url:
        response = requests.get(adsets_url, params=params).json()
        adsets = response.get("data", [])

        for adset in adsets:
            adset_id = adset["id"]

            # Fetch insights
            insights_url = f"{BASE_URL}/{adset_id}/insights"
            insights_params = {
                "fields": "impressions,clicks,spend,cpc,ctr",
                "date_preset": "last_7d",
                "access_token": ACCESS_TOKEN
            }

            insights_response = requests.get(insights_url, params=insights_params).json()
            insights_data = insights_response.get("data", [])
            insights = insights_data[0] if insights_data else {}
            if not insights:
                print(f"⚠️ No insights for ad set {adset_id}")

            # Insert or update
            cursor.execute("""
                INSERT INTO ad_sets (
                    id, name, status, campaign_id, daily_budget, start_time, end_time,
                    impressions, clicks, spend, cpc, ctr
                ) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
                ON DUPLICATE KEY UPDATE
                    name=%s, status=%s, campaign_id=%s, daily_budget=%s, start_time=%s, end_time=%s,
                    impressions=%s, clicks=%s, spend=%s, cpc=%s, ctr=%s
            """, (
                adset_id,
                adset.get("name"),
                adset.get("status"),
                adset.get("campaign_id"),
                adset.get("daily_budget", 0),
                adset.get("start_time"),
                adset.get("end_time"),
                insights.get("impressions", 0),
                insights.get("clicks", 0),
                insights.get("spend", 0),
                insights.get("cpc", 0),
                insights.get("ctr", 0),
                # For ON DUPLICATE
                adset.get("name"),
                adset.get("status"),
                adset.get("campaign_id"),
                adset.get("daily_budget", 0),
                adset.get("start_time"),
                adset.get("end_time"),
                insights.get("impressions", 0),
                insights.get("clicks", 0),
                insights.get("spend", 0),
                insights.get("cpc", 0),
                insights.get("ctr", 0),
            ))

        # Handle pagination
        adsets_url = response.get("paging", {}).get("next")

    db.commit()
    cursor.close()
    db.close()
    print("✅ Ad Sets synced successfully!")

def fetch_ads():
    print("🔄 Fetching Ads")
    ads_url = f"{BASE_URL}/act_{AD_ACCOUNT_ID}/ads"
    fields = "id,name,status,adset_id,campaign_id,creative"
    params = {
        "fields": fields,
        "limit": 100,
        "access_token": ACCESS_TOKEN
    }

    db = get_db_connection()
    cursor = db.cursor()

    while ads_url:
        response = requests.get(ads_url, params=params).json()
        ads = response.get("data", [])

        for ad in ads:
            ad_id = ad["id"]

            # Fetch insights
            insights_url = f"{BASE_URL}/{ad_id}/insights"
            insights_params = {
                "fields": "impressions,clicks,spend,cpc,ctr",
                "date_preset": "last_7d",
                "access_token": ACCESS_TOKEN
            }

            insights_response = requests.get(insights_url, params=insights_params).json()
            insights_data = insights_response.get("data", [])
            insights = insights_data[0] if insights_data else {}
            if not insights:
                print(f"⚠️ No insights for ad {ad_id}")

            # Insert or update
            cursor.execute("""
                INSERT INTO ads (
                    id, name, status, adset_id, campaign_id, creative_id,
                    impressions, clicks, spend, cpc, ctr
                ) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
                ON DUPLICATE KEY UPDATE
                    name=%s, status=%s, adset_id=%s, campaign_id=%s, creative_id=%s,
                    impressions=%s, clicks=%s, spend=%s, cpc=%s, ctr=%s
            """, (
                ad_id,
                ad.get("name"),
                ad.get("status"),
                ad.get("adset_id"),
                ad.get("campaign_id"),
                ad.get("creative", {}).get("id"),
                insights.get("impressions", 0),
                insights.get("clicks", 0),
                insights.get("spend", 0),
                insights.get("cpc", 0),
                insights.get("ctr", 0),
                # For ON DUPLICATE
                ad.get("name"),
                ad.get("status"),
                ad.get("adset_id"),
                ad.get("campaign_id"),
                ad.get("creative", {}).get("id"),
                insights.get("impressions", 0),
                insights.get("clicks", 0),
                insights.get("spend", 0),
                insights.get("cpc", 0),
                insights.get("ctr", 0),
            ))

        # Handle pagination
        ads_url = response.get("paging", {}).get("next")

    db.commit()
    cursor.close()
    db.close()
    print("✅ Ads synced successfully!")

if __name__ == "__main__":
    fetch_adsets()
    fetch_ads()
