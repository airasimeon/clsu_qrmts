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

// Create the "user_details" table and add foreign key to "users" table
$sql = "CREATE TABLE user_details (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    unit_name VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL,
    municipal VARCHAR(255) NOT NULL,
    province VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    CONSTRAINT fk_user_details_id FOREIGN KEY (id) REFERENCES users(id)
)";
$pdo->exec($sql);

echo "The user_details table has been created successfully.";