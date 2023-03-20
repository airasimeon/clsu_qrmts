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

// Create the "product_sales" table
$sql = "CREATE TABLE product_sales (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    product_id INT(11) UNSIGNED NOT NULL,
    supplier_id INT(11) UNSIGNED NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    instock INT(11) UNSIGNED NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id) ON DELETE CASCADE ON UPDATE CASCADE
)";
$pdo->exec($sql);

echo "The product_sales table has been created successfully.";