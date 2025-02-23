-- Create the database
CREATE DATABASE omnitranslate;

-- Use the created database
USE omnitranslate;

-- Create the contacts table
CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  phone VARCHAR(15),
  email VARCHAR(100) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Show all tables in the database
SHOW TABLES;

-- Select all columns from the contacts table
SELECT * FROM contacts;
