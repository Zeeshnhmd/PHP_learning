<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/


$name= 'Zeeshan'; //string
$age= 24; //Int
$has_kids = true; //Bollean
$cash_on_hand= 20.75; //float

var_dump($has_kids);
echo $cash_on_hand;

// first name of concatenation
echo $name . ' is ' . $age . ' year old ';

//second of concatenation
echo "${name} is ${age} years old";


//arthematic operations
$x= '5' + '5';
var_dump($x);
echo 10 -5;
echo 5* 6;
echo 10 / 2;
echo 10 % 3;

// constant (cannot be changed similar to .env variables)

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;

?>