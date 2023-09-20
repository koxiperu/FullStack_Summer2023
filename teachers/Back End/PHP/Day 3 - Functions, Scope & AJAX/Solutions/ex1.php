<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
- Exercise 1

Write a function that:
- Takes into parameter two numbers.
- Check which is the largest number.

The expected result is this:
"The first number is higher" (if the first number is higher than the second number)
"The first number is smaller" (if the first number is smaller than the second number)
"The two numbers are identical" (if the two numbers are equal)

*/

function whichIsHigher($a, $b)
{
    if ($a > $b) {
        return "First number is higher<br>";
    } else if ($a < $b) {
        return "Second number is higher<br>";
    } else {
        return "Numbers are identical !!<br>";
    }
}

echo whichIsHigher(5, 10);
echo whichIsHigher(13, 13);



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*

-- Exercise 2
Write a htmlImages($src) function that:
- takes a string as argument ($src)
- display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
        > Displays <img src='skate.jpg'>

*/

function htmlImage($src)
{
    return "<img style='height: 400px' src='$src'>";
}

echo htmlImage('skate.jpg');


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

    3.1
    Write a PHP script that:
    - Copy the code from Michel supermarket exercise.
    - Calculates the sum of Michel's expenses (already done)
    3.2
    Write a function that will:
    - Take an array as input
    - Calculate the sum of the expenses of the array
    - return the sum

*/

function expenses($myArray)
{
    $total = 0;
    foreach ($myArray as $value) {
        $total += $value;
    }
    return $total;
}

$array1 = array("salad" => 1.03, "tomato" => 2.3, "banana" => 1.85);
echo expenses($array1);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercise 4

Write a function that:
- Takes two numbers as parameter.
- That returns the result of the multiplication of the two numbers
- All parameters must have a default value.
- Call your function with the numbers 10 and 2.
- Call your function with a single number: 4
*/

function multiply($a = 1, $b = 1)
{
    return $a * $b;
}

echo multiply(10, 2) . "<br>";
echo multiply(4);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercise 5

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/

function isPalindrome($string)
{
    $length = strlen($string) - 1;
    for ($i = 0; $i <= $length / 2; $i++) {
        if ($string[$i] != $string[$length - $i]) {
            return false;
        }
    }
    return true;
}

echo isPalindrome("kayak") . "<br>";
echo isPalindrome("hello");

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*
-- Exercise 6

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/

function isPrime($myNumber)
{
    // first check if number is > 1
    if ($myNumber <= 1)
        return "Number should be greater than 1<br>";

    // try to divide by every number
    for ($i = 2; $i < $myNumber; $i++) {
        // check if a number can be divided by another one, use modulo (%)
        if ($myNumber % $i == 0)
            return "Not a prime number<br>";
    }
    return "Is a prime number<br>";
}

echo isPrime(12);
echo isPrime(3);

/*

-- Exercise 1 :

    Write a function that : 
        - Take one float $x as argument
        - Get the integer part of a positive number ($x)
        - Return this integer part

    Example :
        integerPart(5.26) // return 5
        integerPart(10.76) // return 10
*/
function integerPart($x)
{
    if ($x < 0)
        echo "Positive number required<br>";
    return explode('.', $x)[0];
}


echo integerPart(6.2567);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
-- Exercise 2 : 
    Write a function 'isOrder' that :
        - Take one array of integer as argument
        - Checks if the elements of the arrays are ordered in ascending order.
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
-- Exercise 3 :

    Write a function 'orderArray' that :
        - Take one array of integer as argument
        - Return an array which was ordered

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';