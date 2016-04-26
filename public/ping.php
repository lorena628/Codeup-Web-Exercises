<?php
function pageController()
{
    $count = !isset($_GET['count']) ? 0 : $_GET['count'];
    return['count' => $count];
}
extract(pageController());
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ping</title>
</head>
<body>
<h1>Ping</h1>
<p><?= $count ?></p>

<a href="pong.php?count=<?= $count + 1 ?>">Hit</a>
<a href="pong.php?count=0">Miss</a>

</body>
</html>