<?php
require_once '../db_credentials.php';
require_once '../db_connect.php';
require_once '../Input.php';



function pageController($dbc)
{
    $data = [];

    $data['page'] = Input::has('page') ? Input::get('page') : 1; 

    $offset = ($data['page'] - 1) * 4; 

    $stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT :lim OFFSET :off ');
    $stmt->bindValue(":lim", 4, PDO::PARAM_INT);
    $stmt->bindValue(":off", $offset, PDO::PARAM_INT);
    $stmt->execute();
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
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
       <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
       <link rel="stylesheet" href="/css/national_parks.css">
</head>
<body>
<div id=header>
    <h1>NATIONAL PARKS</h1>
</div>
<div>
    <table class="table">
            <tr>
                <th class="col-md-3">Name</th>
                <th class="col-md-3">Location</th>
                <th class="col-md-1">Date Established</th>
                <th class="col-md-2">Area in Acres</th>
                <th class="col-md-3">Description</th>

            </tr>

            <?php foreach($parks as $park) : ?>
                <tr><td><?= $park['name']; ?></td>
                <td><?= $park['location']; ?></td>
                <td><?= $park['date_established']; ?></td>
                <td><?= $park['area_in_acres']; ?></td>
                <td><?= $park['description']; ?></td></tr>
            <?php endforeach; ?>
    </table>
</div>
<?= Input::get('name'); ?>

    
<div id= links>

    <?php if($page>=2): ?> 
        <a href="?page=<?= $page - 1 ?>"><i class="fa fa-arrow-left  fa-1x" aria-hidden="true"></i></a>
    <?php endif; ?>

        <?= "Page: $page" ?>

    <?php if($page <= count($parks) ): ?>
        <a href="?page=<?= $page + 1 ?>"><i class="fa fa-arrow-right  fa-1x" aria-hidden="true"></i></a>
    <?php endif; ?>

    <p><input type="button" id="add_bttn" onclick="location.href='add_a_park.php';" value="Add a Park!" /></p>
    
</div>



 <!--    <img id="tree" src="/img/tree.png">   -->
</body>
</html>

