# db/database.py
import mysql.connector
from config.config import MYSQL_CONFIG

def get_db_connection():
    return mysql.connector.connect(**MYSQL_CONFIG)
