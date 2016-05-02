<?php
//this is starting the session
session_start();

//this links to get functions in that php file  
require_once 'functions.php';

//checking FIRST if the user is logged in and if so will redirect to the authorization page
if ( isset($_SESSION['logged_in_user'])) {
    header('Location: authorized.php');
    exit();
  }


//if we take off the isset its checking to see if there is nothing in the form and since theres not on the initial login we put isset to "set" the form as being empty
if ( inputHas('username') && inputGet("username") != 'guest' ||  inputHas('userpassword') && inputGet("userpassword") != 'password' ) {
    echo "Incorrect username or password";

}elseif ( inputHas('username') && inputGet("username") == 'guest' &&  inputHas('userpassword') && inputGet("userpassword") == 'password'){

    //once the login is correct will direct user to authorized
    $_SESSION['logged_in_user']=$_POST["username"];
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
        <input type="password" name="userpassword" placeholder="Password"><br>
        <input type="submit" value="Login">
    </form>

</body>
</html>