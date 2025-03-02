<?php
// db-setup.php - Run this once to set up your database

// Create/connect to the database
$db = new SQLite3('database.db');

// Create users table with secure storage for passwords
$db->exec("
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL UNIQUE,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL, /* Will store password hash */
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    last_login DATETIME
)");

echo "Database setup complete!";
?>