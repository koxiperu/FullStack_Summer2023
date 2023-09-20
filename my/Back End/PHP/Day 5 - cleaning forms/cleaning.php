<?php
//clean FORM injection
$email="   r@ emi    ?§.   humbert @ ca p 4lab. com";
echo $email. '<br>';
$cleanEmail=filter_var($email, FILTER_SANITIZE_EMAIL); //formatting filter
//clean email is free of extra spaces and special characters
echo $cleanEmail. '<br>';
$validEmail=filter_var($cleanEmail, FILTER_VALIDATE_EMAIL); //validation filter, 
//false or string in return

//
echo $validEmail. '<br>';

//clean from spaces
trim($string)

//extra functions
$example="<h1>I love PHP</h1>";
echo $example. '<br>';
//remove all HTML tags
echo strip_tags($example). '<br>';
//converts HTML tags to text equivalent
echo htmlspecialchars($example). '<br>';
echo '&#128515<br>';
echo htmlspecialchars('&#128515'). '<br>';
?>




