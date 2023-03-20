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

// Create the "migrations" table
$sql = "CREATE TABLE migrations (
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    migration VARCHAR(255) NOT NULL,
    batch INT(11) NOT NULL,
    PRIMARY KEY (id)
)";
$pdo->exec($sql);

echo "The migrations table has been created successfully.";