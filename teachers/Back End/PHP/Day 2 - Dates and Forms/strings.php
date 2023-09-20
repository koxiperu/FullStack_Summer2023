<?php

// STRINGS
$myString = 'PHP is so cool !!';

// Find the position of a word in a string
// strpos(string, search)
echo strpos($myString, 'cool') . '<br>'; // 10

// Replace parts of a string
// str_replace(search, replace, string)
echo str_replace('cool', 'dumb', $myString) . '<br>';
echo $myString . '<br>';

// Substring : retrieve parts of a string
// substr(string, offset, (length))
echo substr($myString, 6) . '<br>';
echo substr($myString, 7, 4) . '<br>';

// Get the length of a string
echo strlen($myString) . '<br>';

// Turn a string into an array
// explode(separator, string)
$myArray = explode(' ', $myString);

echo '<pre>';
var_dump($myArray);
echo '</pre>';

// Turn it back into a string
// implode(joint, array)
echo implode('-', $myArray) . '<br>';

// explode & implode are the PHP equivalent to JS split and join

// Make the string lowercase
echo strtolower($myString) . '<br>';

// Make the string uppercase
echo strtoupper($myString);