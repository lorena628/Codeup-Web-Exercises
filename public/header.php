<!-- <div class="container-fluid">
            <nav class="navbar">
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    <ul class="nav nav-pills">

                        <li role="presentation" class="active"></a><a href="home.php" id="home">Home</a></li>
                        <li role="presentation"><a href="careergoals.php">Career Goals</a></li>
                        <li role="presentation"><a href="employers.php">Employers</a></li>
                        <li role="presentation"><a href="contactinfo.php">Contact Info</a>

                    </ul>
                </div>    
            </nav>
        </div> 
        this is the bootstrap header navbar
        -->
<?php
?>
<!DOCTYPE html>
<html>
<head>
</head>
<style>
    #header {
        background-color: rgb(38,38,38);
        color:white;
        text-align:center;
        width: 100%;
        height:50px;
        padding-top: 1.25%;
    }
    #filler {
        margin-top: 80px;
        color:black;
    }
    #btn {
        /* we use static in position so that the buttons or links can move while the header is in a FIXED position */
        position: static;
        text-align: center;
        background-color: rgb(38,38,38);
        border-left-color: rgb(255,97,89);
        /*border-left: hidden;*/
        border-top: hidden;
        border-bottom: hidden;
        border-right: hidden;
        float: right;
    }
    #btn:hover{
        color:#A83232;
        background-color: black;
    }
</style>
<body>

<!-- navbar-top will continue to scroll and the navbar will not be FIXED for the class will work but it is FIXED -->
<div class="navbar-fixed-top" id="header">
        <input type="button" id="btn" onclick="location.href='contactinfo.php';" value="Contact Me" />
        <input type="button" id="btn" onclick="location.href='careergoals.php';" value="Career Goals" />
        <input type="button" id="btn" onclick="location.href='employers.php';" value="Employers" />
        <!-- <input type="button" id="btn" onclick="location.href='home.php';" value="Home" />  -->   
        <!-- this is the "link" instead of a button  -->
        <!-- <a href="careergoals.php">Career Goals</a> -->        
    </div>
</div>

</body> 
</html>