<?php
function pageController()
{
    //the isset deals with the null issue where null is going to be set to zero if zero add to the count 
    $count = !isset($_GET['count']) ? 0 : $_GET['count'];
    return['count' => $count];
}
extract(pageController());
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>pong</title>
</head>
<body>
<h1>pong</h1>
<p><?= $count ?></p>

<a href="ping.php?count=<?= $count + 1 ?>">Hit</a>
<a href="ping.php?count=0">Miss</a>

</body>
</html>