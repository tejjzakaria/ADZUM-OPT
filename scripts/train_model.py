import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestRegressor
from sklearn.metrics import mean_absolute_error
import joblib
from db.database import get_db_connection

def load_data():
    db = get_db_connection()
    query = "SELECT impressions, clicks, spend, conversions, ctr, cpc, engagement, roas FROM ad_performance"
    df = pd.read_sql(query, db)
    db.close()
    return df

def train_model():
    df = load_data()
    X = df.drop(columns=["roas"])
    y = df["roas"]

    X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

    model = RandomForestRegressor(n_estimators=100, random_state=42)
    model.fit(X_train, y_train)

    y_pred = model.predict(X_test)
    error = mean_absolute_error(y_test, y_pred)
    print(f"Model Error (MAE): {error}")

    joblib.dump(model, "models/adzum_roas_model.pkl")

if __name__ == "__main__":
    train_model()
