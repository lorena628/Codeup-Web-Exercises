<?php
require_once '../db_connect.php';
require_once '../Input.php';



function pageController($dbc)
{
    $data = [];
    $data['page'] = Input::has('page') ? Input::get('page') : 1; 

    $offset = ($data['page'] - 1) * 4; 
    $stmt = $dbc->query('SELECT * FROM national_parks LIMIT 4 OFFSET ' . $offset);


    $data['parks'] = $stmt->fetchALL(PDO::FETCH_ASSOC);
    return $data;

}
extract(pageController($dbc));



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>National Parks</title>
</head>
   
<body>
<p><?= "page : $page" ?></p>

<a href="national_parks.php?page=<?= $page - 1;?>">Previous Page</a>
<a href="national_parks.php?page=<?= $page + 1;?>">Next Page</a>


<?php foreach($parks as $park) : ?>
<h1><?= $park['name'] ?></h1>
<br> Location <?= $park['location'] ?> <br>
<br> Date Established <?= $park['date_established'] ?> <br>
<br> Area in acres <?= $park['area_in_acres'] ?> <br>
<?php endforeach; ?>




</body>
</html>

