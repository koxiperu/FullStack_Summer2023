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

function whichIsHigher($a, $b){
    if($a > $b){
        return "First number is higher<br>";
    } else if ($a < $b){
        return "Second number is higher<br>";
    } else {
        return "Numbers are identical !!<br>";
    }
}

echo whichIsHigher(5,10);
echo whichIsHigher(13,13);



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

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*
-- Exercise 6

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/