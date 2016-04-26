<?php
function pageController() 
{
    $data = array();
    $favorites = ['Sleeping ', 'Netflixing ', 'Eating ', 'Talking ', 'Browsing '];

    // the ['favorites'] in the square brackets is equal to the $favorites in the foreach loop because that is the key; HOWEVER the $favorites in the $data ['favorites'] = $favorites  is equal to the variable $favorites that has the 5 items in the array
    $data['favorites' ] = $favorites;
    return $data;
}
extract(pageController());


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
<!--short syntax is used for this next line of code where i replace < ?php echo with < ?= instead -->    
        <tr><td><?= $favoriteHobbies; ?></td></tr>
<?php } ?>

</table>



</body>
</html>