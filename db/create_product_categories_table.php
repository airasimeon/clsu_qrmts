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

// Create the "product_categories" table
$sql = "CREATE TABLE product_categories (
    id INT(255) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES products(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
$pdo->exec($sql);

echo "The product_categories table has been created successfully.";