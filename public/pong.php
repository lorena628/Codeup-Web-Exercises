<?php
//connecting to that file to call functions in THIS file
require_once '../Input.php';

function pageController()
{
    //originally this included an isset but replaced with calling functions in functions.php     
    $count = !Input::has('count') ? 0 : Input::get('count');
    return['count' => $count];
}
extract(pageController());
$message= " YOU MISSED ";

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>pong</title>
    <link rel="stylesheet" href="/css/pong.css">
</head>
<body>
    <h1>pong</h1>
    <p><?= $count ?></p>

    <a href="ping.php?count=<?= $count + 1 ?>">Hit</a>
    <a href="ping.php?count=0<?= $message ?>">Miss</a>

<div>
<img src="/img/pingpong.png">  
</div>

</body>
</html>