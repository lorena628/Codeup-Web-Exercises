<?php
session_start();
//session start has to be on every page
require_once '../Auth.php';

//when doing the clear session function we include the Auth::logout() method because it is the method that does the logout and clearing of cookies....its a more generic function that can apply to ANY function
function clearSession()
{
    Auth::logout();

    //redirects to login
    header('Location: login.php');
}

//calling the function
clearSession();

?>

