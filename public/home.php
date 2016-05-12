<!DOCTYPE html>
<html>
<head>
    <title>Main</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<style>
    body {
        background-image: url(/img/airplanefan.jpeg);
        background-size: cover;
        /*background-repeat: no-repeat;*/
    }
   /* footer { 
        display: block;
    }*/

</style>
</head>
<body>

    <?php require_once 'header.php'; ?>
<!-- footer class="container">
  <h5>Footer</h5>
  <p>Footer information goes here</p>
</footer> -->

<div id="filler" class="container-fluid">
    <div class="row">
        <div id= "about"class="col-md-6 ">
            <h1 class="left">About</h1>
            <div id="links">
                <input type="button" id="bttn" onclick="location.href='work.php';" value="Work" />
                <input type="button" id="bttn" onclick="location.href='contactinfo.php';" value="Contact Me" />
            </div>
        </div>
        <div id= "me"class="col-md-6">
            <h1 class="right">My name is Lorena, pleasure to meet you</h1>
            <!-- <i class="fa fa-camera-retro fa-5x"></i>   -->
        </div>
    </div>
</div>



<?php require_once 'footer.php';?>

  

</body>
</html>