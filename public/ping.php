<?php
//connecting to that file to call functions in THIS file
require_once '/Input.php';

function pageController()
{
    $count = !Input::has('count')  ? 0 : Input::get('count');
    return['count' => $count];
}
extract(pageController());
$message= " YOU MISSED ";

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ping</title>
    <link rel="stylesheet" href="/css/ping.css">
</head>
<body>
<h1>Ping</h1>
<p><?= $count ?></p>

<a href="pong.php?count=<?= $count + 1 ?>">Hit</a>
<a href="pong.php?count=0<?= $message ?>">Miss</a>

<div>
<img src="/img/pingpong.png">  
</div>

</body>
</html>