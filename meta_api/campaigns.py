import requests
from db.database import get_db_connection
from config.config import ACCESS_TOKEN, AD_ACCOUNT_ID, GRAPH_API_VERSION

BASE_URL = f"https://graph.facebook.com/{GRAPH_API_VERSION}/act_{AD_ACCOUNT_ID}"

def fetch_campaigns():
    url = f"{BASE_URL}/campaigns?fields=id,name,status,objective&access_token={ACCESS_TOKEN}"
    response = requests.get(url)
    
    # Print the raw response to debug
    print(f"Response Status Code: {response.status_code}")
    print(f"Response Body: {response.text}")
    
    return response.json().get("data", [])


def insert_campaigns(campaigns):
    db = get_db_connection()
    cursor = db.cursor()

    sql = """
        INSERT INTO campaigns (id, name, status, objective)
        VALUES (%s, %s, %s, %s)
        ON DUPLICATE KEY UPDATE name=VALUES(name), status=VALUES(status), objective=VALUES(objective)
    """

    for campaign in campaigns:
        cursor.execute(sql, (campaign["id"], campaign["name"], campaign["status"], campaign["objective"]))

    db.commit()
    cursor.close()
    db.close()


def fetch_ad_sets():
    url = f"{BASE_URL}/adsets?fields=id,name,status,daily_budget,optimization_goal,targeting&access_token={ACCESS_TOKEN}"
    response = requests.get(url)
    return response.json().get("data", [])

def insert_ad_sets(ad_sets):
    db = get_db_connection()
    cursor = db.cursor()

    sql = """
        INSERT INTO ad_sets (id, name, status, daily_budget, optimization_goal, targeting)
        VALUES (%s, %s, %s, %s, %s, %s)
        ON DUPLICATE KEY UPDATE name=VALUES(name), status=VALUES(status),
        daily_budget=VALUES(daily_budget), optimization_goal=VALUES(optimization_goal),
        targeting=VALUES(targeting)
    """

    for ad_set in ad_sets:
        cursor.execute(sql, (ad_set["id"], ad_set["name"], ad_set["status"],
                             ad_set.get("daily_budget", 0), ad_set.get("optimization_goal", ""),
                             str(ad_set.get("targeting", {}))))
    
    db.commit()
    cursor.close()
    db.close()


def fetch_ads():
    url = f"{BASE_URL}/ads?fields=id,name,status,adset_id,creative,insights&access_token={ACCESS_TOKEN}"
    response = requests.get(url)
    return response.json().get("data", [])

def insert_ads(ads):
    db = get_db_connection()
    cursor = db.cursor()

    sql = """
        INSERT INTO ads (id, name, status, adset_id, creative, insights)
        VALUES (%s, %s, %s, %s, %s, %s)
        ON DUPLICATE KEY UPDATE name=VALUES(name), status=VALUES(status),
        adset_id=VALUES(adset_id), creative=VALUES(creative), insights=VALUES(insights)
    """

    for ad in ads:
        cursor.execute(sql, (ad["id"], ad["name"], ad["status"],
                             ad.get("adset_id", ""), str(ad.get("creative", {})),
                             str(ad.get("insights", {}))))
    
    db.commit()
    cursor.close()
    db.close()

