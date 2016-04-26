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
    <title>counter</title>
</head>
<body>
<p><?= $count ?></p>

<a href="?count=<?= $count + 1 ?>">UP</a>
<a href="?count=<?= $count -1 ?>">Down</a>

</body>
</html>

