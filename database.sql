CREATE DATABASE IF NOT EXISTS gls_fdp;
USE gls_fdp;

DROP TABLE IF EXISTS registrations;

CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    registration_number VARCHAR(50) DEFAULT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    first_name VARCHAR(100) NOT NULL,
    middle_name VARCHAR(100) DEFAULT NULL,
    last_name VARCHAR(100) NOT NULL,
    designation VARCHAR(100) NOT NULL,
    gender VARCHAR(20) NOT NULL,
    institute VARCHAR(255) NOT NULL,
    university VARCHAR(255) NOT NULL,
    experience VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
