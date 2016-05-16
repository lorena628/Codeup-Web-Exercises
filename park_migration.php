<?php
require 'db_credentials.php';

// define('DB_HOST', '127.0.0.1');
// define('DB_NAME', 'parks_db');
// define('DB_USER', 'parks_user');
// define('DB_PASS', 'Pennyworth91');

require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS national_parks');
// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(55) NOT NULL,
    date_established YEAR(4) NOT NULL,
    area_in_acres DOUBLE(10, 2) NOT NULL,
    description VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
)';
$dbc->exec($query);
