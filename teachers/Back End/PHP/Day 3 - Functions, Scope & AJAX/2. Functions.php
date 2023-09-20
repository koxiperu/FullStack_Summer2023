<?php

// FUNCTIONS

// Declare a function
function hello_world()
{
    echo 'Hello, world...<br>';
}

// Call a function
hello_world();

//  Function with a return value
function hello()
{
    // Return the message
    return 'hello<br>';

    // Never be executed
    echo "My password is password1234";
}

// Display the result
echo hello();

// Save the result in a variable
$result = hello();
echo $result;

// Function with arguments
function login($email, $password)
{
    return "Try to login with : $email / $password<br>";
}

echo login("markus@gmail.com", 1234);
echo login("spongebob@nickelodeon.com", "IloveP@tr1ck");

// Using already defined variables as arguments works as well
$myemail = "remi@gmail.com";
$myPassword = "HaveANiceWekend";
echo login($myemail, $myPassword);

// Default values for arguments
function multiplyByTwo($x = 1)
{
    $x = 10; // erases the value of $x
    return $x * 2;
}
echo multiplyByTwo(5) . '<br>';
echo multiplyByTwo();