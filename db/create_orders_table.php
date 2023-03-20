<?php

// Create a PDO connection to the Homestead database
$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=homestead';
$username = 'root';
$password = 'secret';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $username, $password, $options);

// Create the "orders" table
$sql = "CREATE TABLE orders (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    customer_id INT(11) UNSIGNED NOT NULL,
    status VARCHAR(255) NOT NULL,
    notes TEXT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES products(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
$pdo->exec($sql);

echo "The orders table has been created successfully.";