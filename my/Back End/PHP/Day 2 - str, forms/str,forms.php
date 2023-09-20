<?php
//DATES
//set the timezone
date_default_timezone_set('Europe/Luxembourg');
//Display a date
echo date('d/m/Y') .'<br>'; //uppercase is 4 digits or months-letters, low-case is 2 digits 
echo date('Y-m-d') .'<br>'; 
echo date('Y M d') .'<br>';
echo date('F') .'<br>'; // July 

//date and time
echo date('d/m/Y H.i.s') .'<br>'; // i - minutes, H - 24h, h-12h

//convert a string to a datetime
echo strtotime('now') .'<br>';
echo strtotime('tomorrow') .'<br>';
echo strtotime('next Sunday') .'<br>';
echo strtotime('+7 days') .'<br>';
echo strtotime('18 March 2000') .'<br>'; //birth of a great man

//mix the two functions
echo date('d/m/Y H:i', strtotime('+4 days')) .'<br>';

//STRINGS
$myString='PHP is so cool !!';

//Find the position of a word in a string
//strpos(string, search)
echo strpos($myString, 'cool') .'<br>';
echo str_replace('cool', 'dumb', $myString) .'<br>';
echo $myString;

//substring: retrieve part of a string
echo substr($myString,6) .'<br>';
echo substr($myString, 6,9) .'<br>';
substr($myString, 6,4) .'<br>'; //from 6 position, take 4 letters. If starts from space, doesn'T show.

//Get the length of a string
echo strlen($myString) .'<br>';

//turn a string into array
$myArray=explode(' ',$myString);
echo '<pre>';
var_dump($myArray);
echo '</pre>';

//turn it back into a string
echo implode('~',$myArray) .'<br>'; //symbol or word

//explode & omplode are the PHP equivalent to JS split and join

//make the string lowercase
echo strtolower($myString) .'<br>';

//make the string uppercase
echo strtoupper($myString) .'<br>';

//FORMS //SEE FORMS.HTML

?>