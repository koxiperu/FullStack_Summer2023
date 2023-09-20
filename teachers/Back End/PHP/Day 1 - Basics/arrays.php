<?php

// ARRAYS
// Also work the same way than in JS, but the synthax changes

// Create an empty array
$shoes = [];
$hats = array();

// Fill our array
$shoes[0] = 'Nike';
$hats[0] = 'Fedora';
// Once our arrays are initialized, no difference is made between [] or array()

// Array functions
// Sorting an array
$sockColors = ['Yellow', 'Green', 'Red', 'Blue'];
$sortedSockColors = $sockColors;
sort($sortedSockColors);
echo '<pre>';
var_dump($sockColors);
var_dump($sortedSockColors);
echo '</pre>';

// Counting an array
echo count($sockColors); // 4
// $sockColors.length is not possible here :(

// remove a value
unset($sockColors[3]);
// remove the value at index 3
unset($sockColors[-1]);
// remove the last value of the array

echo '<br>';

// Associative array
// using key/value pairs instead of index
$remiInformation = [
    'email' => 'remi.humbert@cap4lab.com',
    'firstName' => 'Remi',
    'lastName' => 'Humbert',
]; // the order inside the array does not matter anymore

echo '<pre>';
var_dump($remiInformation);
echo '</pre>';
// echo $remiInformation[0]; this will throw an error