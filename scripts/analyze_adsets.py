
def get_adsets_prompt(adsets_data):
    return f"""
You are analyzing ad sets within Meta Ads campaigns.

Please provide:
1. An overview of average CTR, CPC, and spend per ad set
2. Top performing ad sets and what they have in common
3. Weak ad sets and possible reasons
4. Suggestions on audience targeting, placement, or scheduling
5. Insights on how to rebalance budget across ad sets

Data:
{json.dumps(adsets_data, indent=2)}
"""
