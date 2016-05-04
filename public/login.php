<?php
//this is starting the session
session_start();

//this links to following files  
require_once '../Auth.php';
require_once '../Input.php';

//checking FIRST if the user is logged in and if so will redirect to the authorization page
if ( isset($_SESSION['logged_in_user'])) {
    header('Location: authorized.php');
    exit();
  }


//this is the conditional of whether or not the user puts in the correct credentials and we have included the methods of Auth class because they are generic and can be applicable to this login page
if (!Auth::attempt(Input::get('username'), Input::get('password') )) {
    if($_POST){
    echo "Incorrect username or password";
    }
}else{
    //once the login is correct will direct user to authorized
    header('Location: authorized.php');
    exit();
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>form login</title>
</head>
<body>
    <style>
        body {
              background-color: black;
              color:white;
        }
    </style>
<h1>Enter your login info</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" value="Login">
    </form>

</body>
</html>