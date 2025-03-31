import joblib
import numpy as np
from db.database import get_db_connection
import requests
from config.config import ACCESS_TOKEN

MODEL_PATH = "models/adzum_roas_model.pkl"

def fetch_latest_ads():
    db = get_db_connection()
    cursor = db.cursor(dictionary=True)
    cursor.execute("SELECT * FROM ad_performance")
    ads = cursor.fetchall()
    cursor.close()
    db.close()
    return ads

def optimize_ads():
    model = joblib.load(MODEL_PATH)
    ads = fetch_latest_ads()

    for ad in ads:
        X = np.array([[ad["impressions"], ad["clicks"], ad["spend"], ad["conversions"], ad["ctr"], ad["cpc"], ad["engagement"]]])
        predicted_roas = model.predict(X)[0]

        if predicted_roas < 1.0:
            print(f"❌ Pausing Ad {ad['ad_id']} (Predicted ROAS too low)")
            update_ad_status(ad['ad_id'], "PAUSED")

        elif predicted_roas > 3.0:
            print(f"✅ Increasing budget for Ad {ad['ad_id']} (Predicted ROAS: {predicted_roas})")
            update_ad_budget(ad['ad_id'], increase=True)

def update_ad_status(ad_id, status):
    url = f"https://graph.facebook.com/v19.0/{ad_id}"
    payload = {"status": status, "access_token": ACCESS_TOKEN}
    requests.post(url, data=payload)

def update_ad_budget(ad_id, increase=False):
    url = f"https://graph.facebook.com/v19.0/{ad_id}"
    payload = {"daily_budget": "5000" if increase else "1000", "access_token": ACCESS_TOKEN}
    requests.post(url, data=payload)

if __name__ == "__main__":
    optimize_ads()
