<?php

require_once 'User.php';

$user=new User();
$user->name = "lorena";
$user->email = "lorena@codeup.com";
$user->password = "password";
$user->save();

echo "the id of the last inserted row in the db is " . $user->id . PHP_EOL;

echo "all users below" . PHP_EOL;
$allUsers=User::all();
var_dump($allUsers);

echo "first user below" . PHP_EOL;
$user = User::find(1);
$user->email = "pancho@gmail.com";
$user->save();



$user = User::find(4);
var_dump($user->name);


// $user = User::update(19);
// var_dump($user->name);


$lorena = new User();
$lorena->name='lorena';
$lorena->email= 'lorena.gmail.com';
$lorena->password= 'password';
$lorena->save();
