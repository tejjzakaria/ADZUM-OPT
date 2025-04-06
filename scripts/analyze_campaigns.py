def get_campaigns_prompt(campaign_data):
    return f"""
You are an expert Meta Ads analyst. Analyze this list of campaigns and write a report covering:

1. General performance (total impressions, clicks, spend, average CTR, CPC)
2. Top 3 campaigns and what makes them great
3. Bottom 3 campaigns and why they may be underperforming
4. Are budgets being used efficiently?
5. Recommendations to improve campaign performance

Here’s the data:
{json.dumps(campaign_data, indent=2)}
"""
