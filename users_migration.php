<?php
require 'ad_lister_credentials.php';
require 'db_connect.php';


$dbc->exec('DROP TABLE IF EXISTS users');
// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
)';
$dbc->exec($query);