<?php
require_once '../db_credentials.php';
require_once '../db_connect.php';
require_once '../Input.php';


if(Input::get('name') != "" && Input::get('location') && Input::get('date_established') && Input::get('area_in_acres') && Input::get('description')) {

    $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

        $stmt->bindValue(':name', Input::get('name'), PDO::PARAM_STR);
        $stmt->bindValue(':location', Input::get('location'),  PDO::PARAM_STR);
        $stmt->bindValue(':date_established', Input::get('date_established'), PDO::PARAM_INT);
        $stmt->bindValue(':area_in_acres', Input::get('area_in_acres'), PDO::PARAM_INT);
        $stmt->bindValue(':description', Input::get('description'), PDO::PARAM_STR);

    $stmt->execute();
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Add a Park</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
       <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
       <link rel="stylesheet" href="/css/national_parks.css">
</head>
    <style>
        body {
            text-align: center;
            background-color: rgb(60,64,77);
        }
        h1 {
            font-size: 3em;
            color: white;
        }
        #btn_sub, #add_bttn {
            background-color: transparent;
            border: hidden;
            outline:none;
            color: white;
            text-align: center;
        }
        .forms {
            margin-bottom: 1%;
        }
    </style>
<body>
<h1>Enter Park Information</h1>
    <form method="POST">
        <input class="forms" type="text" name="name" placeholder="Name"><br>
        <input class="forms" type="text" name="location" placeholder="Location"><br>
        <input class="forms" type="text" name="date_established" placeholder="Year Established"><br>
        <input class="forms" type="text" name="area_in_acres" placeholder="Area in Acres"><br>
        <input class="forms" type="text" name="description" placeholder="Description (100 characters or less)"><br>
        <input class="forms" id="btn_sub" onclick="location.href='national_parks.php';" type="submit" value="add">
    </form>
    <p><input type="button" id="add_bttn" onclick="location.href='national_parks.php';" value="Return"></p>
<!--     <p><input class="forms" id="btn_sub" type="button" onclick=" location.href='national_parks.php';" value="Return to National Parks"></input></p>
 -->
</body>
</html>
