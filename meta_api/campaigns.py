import requests
from db.database import get_db_connection
from config.config import ACCESS_TOKEN, AD_ACCOUNT_ID, GRAPH_API_VERSION

BASE_URL = f"https://graph.facebook.com/{GRAPH_API_VERSION}/act_{AD_ACCOUNT_ID}"

def fetch_campaigns():
    url = f"{BASE_URL}/campaigns?fields=id,name,status,objective&access_token={ACCESS_TOKEN}"
    response = requests.get(url)
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
