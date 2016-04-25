<?php

$favorites = ['Sleeping ', 'Netflixing ', 'Eating ', 'Talking ', 'Browsing '];

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Here are a few of ....</title>
    <link rel="stylesheet" href="/css/favorite-things.css">
</head>
<body>
<h1> My favorite things</h1>


<table class="hobbies">
<?php foreach ($favorites as $favoriteHobbies) { ?>
    
    <tr><td><?php echo $favoriteHobbies; ?></td></tr>
    
<?php } ?>
</table>



</body>
</html>