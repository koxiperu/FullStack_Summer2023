<?php
//encryption
$password="password1234";
echo $password. ' == before<br>';

$hashedPsw=password_hash($password, PASSWORD_DEFAULT);
echo $hashedPsw. ' == after<br>';

//check password
$checkPsw=password_verify($password, $hashedPsw);
var_dump($checkPsw);
$checkPsw=password_verify("password12345", $hashedPsw);
var_dump($checkPsw);
?>

