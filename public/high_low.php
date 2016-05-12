<?php

// // these are the new argumaents for min/max 
// $min = $argv[1];
// $max = $argv[2];
 
// if($argv[1] < $argv[2]){
//     $min = $argv[1];
//     $max = $argv[2];

// }elseif($argv[1] > $argv[2]){
//     $max = $argv[1];
//     $min = $argv[2];
// }

// // cheching if new arguments are numbers
// if(!is_numeric($min)){
//         echo "this is not a number\n";
//         exit;
// }
// if(!is_numeric($max)){
//     echo "this is not a number\n";
//     exit;
// } 
// // this is the do while for picking a number
// do{
//     $num = mt_rand($min, $max);

//     do {
//     echo "Pick a number\n";
//     //users guess
//     $guess = trim(fgets(STDIN));
//     //if guess is not a number
//     if (!is_numeric($guess)){
//         echo "That is not a number \n";
//     }elseif ($guess > $num) {
//         echo "Guess LOWER, ";

//     }elseif ($guess < $num) {
//         echo "Guess HIGHER, ";
//     }
//     elseif ($guess == $num){
//         echo "You got it! Play again?";
//         }
//     }while ($guess != $num);
// // this is the variable for users response to playing again
// $resp = trim(fgets(STDIN));
// }while ($resp == 'yes');
// echo "Have a nice day :)\n";
var_dump($_POST);


function pageController()
{   
    session_start();
    if(isset($_SESSION["Guess"])){
        $random = $_SESSION["Guess"];
    }else{
        $random = mt_rand(1, 100);
        $_SESSION["Guess"] = $random;
    }
    var_dump($random);

    if($_POST["newnumber"] < $random) {
        $message= " guess higher";
    }else{
        $message= " guess lower";
    }
    
    $data=[];
    $data['message']= $message;
    return $data;
}

$message= ' ';
if (!empty($_POST)){
    extract(pageController());  
}




?>
<!DOCTYPE html>
<html>
<head>
    <title>High Low </title>
</head>
<body>
<h1>Pick a number</h1>
<p>Pick a number between 1 and 100</p>
<p> <?= $message ?></p>
        <form method="POST">
        <input type="text" id="newnumber" name="newnumber" placeholder="insert number">
        <input type="submit" value="submit">


</body>
</html>

