<?php
class Person
{
    public $firstName;
    public $lastName;
    public $fruit = array();
}

//instantiated class ($person is the object, instance of plan)
$person = new Person;
$person->firstName='Isaac';
$person->lastName='Castillo';
$person->fruit=['apple','orange'];



var_dump($person);

$person2 = new Person();

$person2->firstName= 'Bobbie';
var_dump($person2);