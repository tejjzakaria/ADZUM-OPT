import requests
from db.database import get_db_connection
from config.config import ACCESS_TOKEN, AD_ACCOUNT_ID

def fetch_campaigns():
    url = f"https://graph.facebook.com/v19.0/{AD_ACCOUNT_ID}/campaigns?fields=id,name,status&access_token={ACCESS_TOKEN}"
    response = requests.get(url)
    data = response.json().get("data", [])

    db = get_db_connection()
    cursor = db.cursor()
    for campaign in data:
        cursor.execute("INSERT INTO campaigns (id, name, status) VALUES (%s, %s, %s) ON DUPLICATE KEY UPDATE name=%s, status=%s",
                       (campaign["id"], campaign["name"], campaign["status"], campaign["name"], campaign["status"]))
    db.commit()
    cursor.close()
    db.close()

if __name__ == "__main__":
    fetch_campaigns()
