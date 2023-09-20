<?php
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';
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

function integerPart($x){
	if ($x < 0){
		return "Poisitive number required<br>";
	}
	// return intval($x);
	return explode('.',$x)[0];
}

echo integerPart(5.2342);



/*
-- Exercise 2 : 
	Write a function 'isOrdered' that :
		- Take one array as argument
		- Checks if the elements of the array are ordered in ascending order.
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

function isOrdered($array){
	$oarray = $array;
	sort($oarray);
	if ($array == $oarray)
		return "Array is already ordered<br>";
	else
		return "Array is not ordered<br>";
}
echo isOrdered([1,2,3,4,5]);
echo isOrdered(['Hello','I','am','Remi']);


/*
-- Exercise 3 :

Write a function that will :
	- Take an array of integers as an argument
	- Return the average of all the numbers in the array

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

function calculateAverage($numbers){
    $total = array_sum($numbers);
    $length = count($numbers);
    return $total / $length;
}

$myArray = [1,2,3,4,5,6,7,8,9];
echo "The average is : " . calculateAverage($myArray);


/*
-- Exercise 4 :

Write a function that will :
	- Take a "length" integer as an argument, it's default value will be 8
	- Using that argument, create a random password of given length
	Use $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; as a list of characters to pick from

*/
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

function randomPwd($length = 8){
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';

    for ($i = 0; $i < $length; $i++){
        $randomIndex = rand(0, strlen($chars) -1);
        $password .= $chars[$randomIndex];
    }
    return $password;
}

echo "Generated password : " . randomPwd(10) . "<br>";
echo "Generated password : " . randomPwd(50);
