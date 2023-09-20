<?php
// SESSIONS

// Stored on the server =/= cookies
// Is destroyed when you close the browser

// To do before any HTML tag
session_start();

// Add an element to the session
$_SESSION['cart'] = 'Headset';

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

// PHPSESSID is a cookie storing your session ID
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

// Remove an element from the session
unset($_SESSION['cart']);

// When we're done using the session
session_destroy();