<?php
session_start();
//session start has to be on every page


function clearSession()
{
    // clear $_SESSION array for guest
    session_unset();  

    // delete session data on the server
    session_destroy();

    //redirects to login
    header('Location: login.php');
}

//calling the function
clearSession();

?>

