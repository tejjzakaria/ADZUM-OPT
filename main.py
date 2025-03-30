from meta_api.campaigns import fetch_campaigns, insert_campaigns

def main():
    campaigns = fetch_campaigns()
    insert_campaigns(campaigns)

if __name__ == "__main__":
    main()
