<?php

$username = $_POST['username'];
$password = $_POST['password'];

$condition1 = str_contains($username, '@');
$condition2 = strlen($password) < 6;
$condition3 = empty($username);

if ($condition1 or $condition3)
    echo "Enter a valid username.<br>";

if ($condition2)
    echo "Password is too short.<br>";

if (!$condition1 and !$condition2 and !$condition3)
    echo "Welcome $username to our website !";