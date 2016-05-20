<?php
require_once '../db_credentials.php';
require_once '../db_connect.php';
require_once '../Input.php';

function pageController($dbc)
{
    $errors=[];
    //this is the try catch exception errors and will display erroers yet will keep runnung and display a message while trying to run
    try {
        $name = Input::getString('name');
    }   catch (Exception $e) {
        $errors[]= $e->getMessage();
    }
      try {
        $location = Input::getString('location');
    }   catch (Exception $e) {
        $errors[]=$e->getMessage();
    }
      try {
        $dateEstablished = Input::getNumber('date_established');
    }   catch (Exception $e) {
        $errors[]=$e->getMessage();
    }
      try {
        $area = Input::getNumber('area_in_acres');
    }   catch (Exception $e) {
        $errors[]=$e->getMessage();
    }
      try {
        $description = Input::getString('description');
    }   catch (Exception $e) {
        $errors[]=$e->getMessage();
    }

    if(Input::get('name') != "" && Input::get('location') && Input::get('date_established') && Input::get('area_in_acres') && Input::get('description') && empty($errors)) {
            $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

                $stmt->bindValue(':name', Input::get('name'), PDO::PARAM_STR);
                $stmt->bindValue(':location', Input::get('location'),  PDO::PARAM_STR);
                $stmt->bindValue(':date_established', Input::get('date_established'), PDO::PARAM_INT);
                $stmt->bindValue(':area_in_acres', Input::get('area_in_acres'), PDO::PARAM_INT);
                $stmt->bindValue(':description', Input::get('description'), PDO::PARAM_STR);

            $stmt->execute();
            header("location: national_parks.php");
            die();
    }
    return ['errors'=>$errors];
}

$errors = [];
if(!empty($_POST)) {
extract(pageController($dbc));
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
            /*color: white;*/
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
            color: black;
            margin-bottom: 1%;
        }
        #message{
            color: white;
        }
    </style>
<body>
<h1>Enter Park Information</h1>
<div id="message">

    <?php foreach($errors as $error) : ?>
        <p><?= $error ?></p>
    <?php endforeach; ?></div>

    <form method="POST" >
        <input class="forms" type="text" name="name" placeholder="Name" value="<?php if(!empty($error)){echo Input::get('name');} ?>"><br>
        <input class="forms" type="text" name="location" placeholder="Location" value="<?php if(!empty($error)){echo Input::get('location');} ?>"><br>
        <input class="forms" type="text" name="date_established" placeholder="Established (YYYY)" value="<?php if(!empty($error)){echo Input::get('date_established');} ?>"><br>
        <input class="forms" type="text" name="area_in_acres" placeholder="Area in Acres" value="<?php if(!empty($error)){echo Input::get('area_in_acres');} ?>"><br>
        <input class="forms" type="text" name="description" maxlength="100" placeholder="Brief Description" value="<?php if(!empty($error)){echo Input::get('description');} ?>"><br>
        <input class="forms" id="btn_sub"  type="submit" value="Submit">
    </form>
    <p><input type="button" id="add_bttn" onclick="location.href='national_parks.php';" value="Return to Database"></p>
</body>
</html>