def get_ads_prompt(ads_data):
    return f"""
You are reviewing individual ads from a Meta Ads account.

Provide a detailed report with:
1. CTR, CPC, and spend trends across ads
2. Which creatives (ads) are winning and why?
3. Are certain formats (video, image, carousel) outperforming others?
4. Which ads are wasting budget and how to fix them?
5. Recommendations to improve creative performance

Here is the data:
{json.dumps(ads_data, indent=2)}
"""
