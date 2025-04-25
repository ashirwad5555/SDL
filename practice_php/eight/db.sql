-- Create the database
CREATE DATABASE complaint_db;

-- Use the database
USE complaint_db;

-- Create the complaints table
CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    complaint TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
