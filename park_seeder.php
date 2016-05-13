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
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919', 'area_in_acres' => '47389.67'],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988', 'area_in_acres' => '9000.00'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929', 'area_in_acres' => '76518.98'],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978', 'area_in_acres' => '242755.94'],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944', 'area_in_acres' => '801163.21'],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980', 'area_in_acres' => '172924.07'],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1999', 'area_in_acres' => '32950.03'],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928', 'area_in_acres' => '35835.08'],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1912', 'area_in_acres'  => '337597.83'],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1918', 'area_in_acres'  => '241904.26'],  
];
foreach ($listOfParks as $parks) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$parks['name']}','{$parks['location']}','{$parks['date_established']}','{$parks['area_in_acres']}')";
$dbc->exec($query);
}