<?php
// Encryption

// Encrypt password
$password = "password1234";
echo $password . "<br>";

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo $hashedPassword . '<br>';

// Check password
$checkPassword = password_verify($password, $hashedPassword);
var_dump($checkPassword);
$checkPassword = password_verify('password12345', $hashedPassword);
var_dump($checkPassword);