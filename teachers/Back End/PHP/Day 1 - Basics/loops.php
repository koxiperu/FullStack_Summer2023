<?php

// LOOPS

// foreach loop
$fruits = ['Banana', 'Apple', 'Orange'];
//for (let item of array){} 
// this is the PHP equivalent
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}
;
// foreach will execute the code once for every item in the array

// for loop
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . '<br>';
}
;


// while loop
$nbOfFruits = count($fruits);
$counter = 0;
while ($counter < $nbOfFruits) {
    echo $fruits[$counter] . '<br>';
    $counter++;
}
// the while loop functions the same as in JS, but we won't use it that much