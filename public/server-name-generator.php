 <?php

$adjectives = [0 =>'mad',1=>'little',2=>'easy',3=>'short',4=>'flat',5=>'tiny',6=>'hot',7=>'sweet',8=>'flaky',9=>'fancy'];
$nouns = ['dime','snake','feather','trick','beef','goose','number','street','cactus','patch'];
//randAdj will generate a random adjective
$randAdj   = mt_rand(0, count($adjectives)-1);
//randNoun will generate a random noun
$randNoun   = mt_rand(0, count($nouns)-1);
//combArray will concat the randAdj and randNoun
$combArray     = $adjectives[$randAdj] . " " . $nouns[$randNoun];
////will spit out rand index so we need to access element at that index and will give rand array ele
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Name Generator</title>
</head>
<body>
    <h1>Random Name Generator</h1>
        <?php  
        //here we need to echo out a variable that will be attached to the random combination of array 
        echo $combArray;
        ?>


    <br><button id="update" type="button" class="btn btn-primary btn-sm">New Name</button>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
(function(){    
    

    //js button refresh
    $("#update").click(function(event) {
            location.reload();
    });    

})();
</script>
</body>
</html>
