from meta_api.campaigns import fetch_campaigns, insert_campaigns

if __name__ == "__main__":
    print("🔄 Fetching campaigns from Meta Ads API...")
    campaigns = fetch_campaigns()

    if campaigns:
        insert_campaigns(campaigns)
        print(f"✅ {len(campaigns)} campaigns inserted into MySQL!")
    else:
        print("❌ No campaigns found.")
