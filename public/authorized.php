<?php
session_start();

require_once '../Auth.php';
require_once '../Input.php';
require_once 'functions.php';


//this will reirect you to login.php if you are not logged in
if ( !Auth::check()) {
    header('Location: login.php');
    exit();
  }
$user= Auth::user();


?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Authorization</title>
    <link rel="stylesheet">
</head>
<body>
    <style>
        body {
              background-color: black;      
              text-align: center; 
              color:white;
        }
    </style>
    <h1>Authorized</h1>
    <p>Welcome, <?= escape($user); ?></p>
    

    <a href="logout.php">Logout</a>


</body>
</html>