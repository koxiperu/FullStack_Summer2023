<?php
// VARIABLES

// use $ to declare/use a variable
$hello = 'there';
//var hello = 'there';

// variables are case sensitive
$hellO; // is different than $hello

// no number as first character
$onehat; // valid
//$1hat; // not valid
$hat1; // valid

// no spaces in var names
//$hat price; // not valid
$hat_price; // valid
$hatPriceNewShop; // best practice

// variable best practices

// give "proper" names to your variables
// describe what's stored inside
$aaaaaa = [1, 2, 3];
$numberArray = [1, 2, 3];

// name language
$chaussure; // stick with that language until the end of the project
$shoe; // don't switch languages all the time
// keep in mind that english is the standard so I recommand you keep it this way


// Display a variable
$students = 20;

// display "There are $students students"
echo 'There are ' . $students . ' students<br>';
// in PHP . is the equivalent of + in JS
// it's called concatenation

// OPERATORS
$two = 1 + 1;
echo $two;
// PHP uses the regular math operators : +, -, *, / and %

// to increment/decrement
$inc = 0;
$inc++; // will add 1
$inc--; // will remove 1

// to assign a new value to a variable, using the current one
$inc = $inc + 2; // don't do this
$inc += 1; // do this instead :)
$inc -= 2;
$inc *= 3;
$inc /= 4;