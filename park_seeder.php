<?php
require 'db_credentials.php';

// define('DB_HOST', '127.0.0.1');
// define('DB_NAME', 'parks_db');
// define('DB_USER', 'parks_user');
// define('DB_PASS', 'Pennyworth91');

require 'db_connect.php';
 

$dbc->exec('TRUNCATE national_parks');

// $dbc->exec('DROP TABLE IF EXISTS national_parks');

$listOfParks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919', 'area_in_acres' => '47389.67', 'description' => 'description of acadia'],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988', 'area_in_acres' => '9000.00', 'description' => 'description of the american samoa'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929', 'area_in_acres' => '76518.98', 'description' => 'description of Arches'],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978', 'area_in_acres' => '242755.94', 'description' => 'desc. of the badlands'],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944', 'area_in_acres' => '801163.21', 'description' => 'desc of big bend'],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980', 'area_in_acres' => '172924.07', 'description' => 'desc of biscayne'],
    ['name' => 'Black Canyon of Gunnison', 'location' => 'Colorado', 'date_established' => '1999', 'area_in_acres' => '32950.03', 'description' => 'desc.of black canyon of gunnison'],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928', 'area_in_acres' => '35835.08', 'description' => 'des of bryce canyon'],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1912', 'area_in_acres'  => '337597.83', 'description' => 'des of canyonlands'],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1918', 'area_in_acres'  => '241904.26', 'description' => 'desc of capitol reef'],    
];


$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');


foreach ($listOfParks as $parks) {
    $stmt->bindValue(':name', $parks['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location',  $parks['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $parks['date_established'], PDO::PARAM_INT);
    $stmt->bindValue(':area_in_acres', $parks['area_in_acres'], PDO::PARAM_INT);
    $stmt->bindValue(':description', $parks['description'], PDO::PARAM_STR);

    // $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)";
$stmt->execute();
}