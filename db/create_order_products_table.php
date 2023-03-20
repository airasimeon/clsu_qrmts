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

// Create the "order_products" table
$sql = "CREATE TABLE order_products (
    order_id INT(11) UNSIGNED NOT NULL,
    product_id INT(255) UNSIGNED NOT NULL,
    quantity INT(11) UNSIGNED NOT NULL,
    PRIMARY KEY (product_id),
    FOREIGN KEY (product_id) REFERENCES product_sales(product_id) ON DELETE CASCADE ON UPDATE CASCADE
)";
$pdo->exec($sql);

echo "The order_products table has been created successfully.";