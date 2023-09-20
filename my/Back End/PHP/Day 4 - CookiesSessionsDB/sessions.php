//SESSIONS
<?php
//Stored on the server =/= cookies
//Is destroyd when you close the browser
//to do before any HTML tag
session_start();



//Add an element to the session
$_SESSION['cart']='Headset';
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

//PHPSESSID is a cookie storing your session ID
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';
//remove the element from the session
unset($_SESSION['cart']);

//when we're done using the session
session_destroy();
?>