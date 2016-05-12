<?php
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>


</head>
<style>
    #header {
        background-color: rgb(23,23,33);
        color:white;
        text-align:center;
        width: 100%;
        height:50px;
        
        /*padding-top: 1.10%;*/
    }
    #filler {
        margin-top: 40px;
        color:black;
    }
    #btn {
        /* we use static in position so that the buttons or links can move while the header is in a FIXED position */
        position: static;
        text-align: center;
        background-color: rgb(23,23,33);
        color: rgb(255,97,89);
        border-left: hidden;
        border-top: hidden;
        border-bottom: hidden;
        border-right: hidden;
        font-size: 25px;
        font-family: 'Satisfy', cursive;  
        /*float: right;*/
    }
    #btn:hover{
        color:#A83232;
        /*background-color: black;*/
    }
    .fa-circle{
        color: rgb(255,97,89);
        /*border-radius: 2%;*/
        opacity: .8;
    }

</style>
<body>

<!-- navbar-top will continue to scroll and the navbar will not be FIXED for the class will work but it is FIXED -->
<div class="navbar-top" id="header">
        <input type="button" id="btn" onclick="location.href='aboutme.php';" value="About " />
        <i class="fa fa-circle" aria-hidden="true"></i>
        <input type="button" id="btn" onclick="location.href='work.php';" value=" Work " />
        <i class="fa fa-circle" aria-hidden="true"></i>
        <input type="button" id="btn" onclick="location.href='contactinfo.php';" value=" Contact" />
        <!-- <input type="button" id="btn" onclick="location.href='home.php';" value="Home" />  -->   
        <!-- this is the "link" instead of a button  -->
        <!-- <a href="careergoals.php">Career Goals</a> -->        
    </div>
</div>

</body> 
</html>