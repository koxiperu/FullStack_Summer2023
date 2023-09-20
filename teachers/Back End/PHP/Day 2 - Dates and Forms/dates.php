<?php

// DATES

// Set the timezone
date_default_timezone_set('Europe/Luxembourg');

// Display a date
echo date('d/m/Y') . '<br>'; // 07/07/2023
echo date('Y-m-d') . '<br>'; // 2023-07-07

// Day number
echo date('d') . '<br>'; // 07

// Month number
echo date('m') . '<br>'; // 07
echo date('M') . '<br>'; // Jul
echo date('F') . '<br>'; // July

// Using date AND time
echo date('d/m/Y H:i:s') . '<br>'; // i = minutes
// H = 24h     h = 12h

// convert a string to a timestamp
echo strtotime('now') . '<br>';
echo strtotime('tomorrow') . '<br>';
echo strtotime('next Sunday') . '<br>';
echo strtotime('+7 days') . '<br>';
echo strtotime('18 March 2000') . '<br>'; // birth of a great man

// Mix the two functions
echo date('d/m/Y H:i:s', strtotime('+4 days')) . '<br>';