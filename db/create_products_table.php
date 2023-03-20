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

// Create the "products" table
$sql = "CREATE TABLE products (
    id INT(255) UNSIGNED NOT NULL AUTO_INCREMENT,
    qr VARCHAR(191) NOT NULL,
    product_name VARCHAR(191) NOT NULL,
    description TEXT NOT NULL,
    product_category VARCHAR(255) NOT NULL,
    storage VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)";
$pdo->exec($sql);

echo "The products table has been created successfully.";