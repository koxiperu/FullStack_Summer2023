<?php
//FUNCTIONS
//Declare functions
function hello_world(){
    echo 'Hello, World...<br>';
}

//call a function
hello_world();

//function with a return value
function helo(){
    echo 'This is before return and will be display<br>';
    //return the message
    return 'hellllo<br>';

    //never be executed
    echo 'My password is 1234<br>';
}
//display the result
echo helo();
//save the result in a variable
$result=helo();
echo $result;

//function with argument
function login($email, $password){
    return "Try to login with: $email/ $password <br>"; //"" if i don`t want to use '. .'
}
echo login('markus123@fgfgf.lu', '123WDe');
echo login('alaska@cold.us', 12345);

//using already defined var as arguments works as well
$myemail='remi@gmail.com';
$mypassword='123Lalala';
echo login($myemail, $mypassword);

function multiplyByTwo($x=1){
    return $x*2;
}
echo multiplyByTwo(5).'<br>';
echo multiplyByTwo().'<br>';
echo multiplyByTwo(false).'<br>';
?>