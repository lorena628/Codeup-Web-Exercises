<?php

//this checks if key is set 
function inputHas($key) {
    return isset($_REQUEST[$key]);
}

//checks that key exists in key array  and if not we return null 
function inputGet($key) {
    return inputHas($key) ? $_REQUEST[$key] : null;
}


function escape($input) {
    return htmlspecialchars(strip_tags($input));
}


//this is an example
// if (inputHas('username')){
// echo inputGet['username'];
// }
?>
