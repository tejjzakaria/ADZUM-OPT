# db/database.py

from config.config import DB_CONFIG  # Ensure this line is correct

import mysql.connector

def get_db_connection():
    return mysql.connector.connect(**DB_CONFIG)
