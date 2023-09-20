<?php
// CLEAN FORM INJECTION
echo "|";
$email = "      /\    remi   .  humbert@ca p 4lab.      com      ";
print($email);
echo "|";
$cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL); // formatting filter
// $cleanEmail is now free of extra spaces and special characters
print($cleanEmail);
echo "|";
$validEmail = filter_var($cleanEmail, FILTER_VALIDATE_EMAIL); // validation filter
print($validEmail);

// Extra functions
$example = "<h1>I love PHP</h1>";
echo $example;

// removes all HTML tags
echo strip_tags($example) . "<br>";

// converts HTML tags to text equivalent
echo htmlspecialchars($example);

// To remove extra spaces before and after the string
echo trim($email);