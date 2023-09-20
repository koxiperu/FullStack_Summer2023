<?php
/*
	- Exercise 1 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>1.03,"Tomato"=>2.3,"Oignon"=>1.85,"Red cabbage"=>0.85)
	    Write a script that will : 
	    1. Sort by value (try to look on google) and display the array
	    2. Sort by key in descending order and display the array
	    3. Use a loop to calculate the total of Michel spendings.

	*/
$array = array("Salad"=>1.03,"Tomato"=>2.3,"Oignon"=>1.85,"Red cabbage"=>0.85);
asort($array); //like sort but shows with names of index.
krsort($array); //ksort($array) for ascending order
foreach ($array as $val)
   $total+=$val;

/*
	- Exercise 2 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 1 etc.

		Do it by using a for loop.
		Once it's done, try to do it also with the while loop.
	*/
    
foreach ()
/*
	-Exercise 3 :
		Use a loop to create an array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

/*
	-Exercise 4 :
		Create an array of random numbers.
		You can create it manually. For example $array = [5, 20, 6, -6, 100]

		1. Find the max / min number of the array.
		You can't use any function (max/min/sort).
		You have to use loop + variable
	
		2. Find the position of the max/min also.

		3. CHALLENGE (optional)
		You can only use 2 variables ($array and $i doesn't count).
	*/
    /*
	- Exercise 1 :
		
		Write a PHP script which displays this pattern : 
			* 
			* * 
			* * * 
			* * * * 
			* * * * * 

		You have to use a loop inside another loop to do this !

		If you're stuck on this one, you probably can find solution online. Try to understand it.

	*/

	/*
	- Exercise 2 : 
		Write a PHP script which displays this pattern : 
		* 
		* * 
		* * * 
		* * * * 
		* * * * * 
		* * * * * 
		* * * * 
		* * * 
		* * 
		* 

	*/

	/*
	- Final exercise - ONLY FOR THE BEASTS - BONUS

		We have an array of integers, unsorted, with all numbers from 1 to 50 BUT one element is missing (the array therefore contains 49 elements).
		
		The goal is to find the missing item (the missing number).
		However, you have 3 constraints:
		- You can use as many loops as you want BUT you have the right to iterate/loop the array only once!
		- You have the right to use only one variable !
		- You can use only one function : count()

		An example with an array with 9 elements :

			$array = array(5, 1, 3, 2, 9, 6 ,8, 4, 10);
	        // Missing number is 7

	        $var = ...

	        for (int i = 0; i < count($array); ++i)
	        {
	            ...
	        }

	        echo "Missing number is: " . $var;

	*/
?>