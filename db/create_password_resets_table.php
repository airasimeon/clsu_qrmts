<?php

// Create a PDO connection to the Homestead database
$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=homestead';
$username = 'root';
$password = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $username, $password, $options);

// Create the "password_resets" table and add foreign key to "users" table
$sql = "CREATE TABLE password_resets (
    email VARCHAR(255) NOT NULL,
    token VARCHAR(255) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (email),
    CONSTRAINT fk_password_resets_email FOREIGN KEY (email) REFERENCES users(email)
)";
$pdo->exec($sql);

echo "The password_resets table has been created successfully.";