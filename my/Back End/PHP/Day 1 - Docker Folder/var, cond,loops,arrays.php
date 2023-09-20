
<?php
//use $ to declare/call a variable
$variable;
$variable='heheh';

//it is case_sensitive
$Hello; // is different than $hello, !$hello
//no numbers at first place - $7hello
//no spaces $hat price => $hat_price OR $hatPrice - best practice
//variable bset practices:
$numberArray=[1,2,3];  //descriptive ingredients
$shoe; // not $chaussure, english is a standart

//display a variable
$students=20; 

//display there are $students students
echo 'There are ' .$students. ' students <br>'; //in php . is equivalent of + in JS, 
//it's called concatination

//operators: +, -, *, / and %
echo 1+1 .' <br>';
echo '1' + '1'.'<br>';
echo 1.1.'<br>';
echo 1 . 1 . '<br>';

$dec=0;
$dec++;//will add 1
$dec--;//will remove 1
echo $dec . '<br>'; 
$dec=$dec+2;
$dec +=2;
$dec -=1;
$dec/=2;
$dec*=4;
echo $dec . '<br>';

//conditions
if (1==1){
    echo "It works!";
}else{
    echo "You'll never see me anyway...";
}

//to use when executing just one line of code - no curly brackets needed
if(1 == 2)
 echo "wrong :(";
else
 echo "something :)"; 

//this is another syntax
if (1==='1') echo "nnnot correct!<br>";
else echo "you`re smart!";

//ternary operator is also back
echo (1==5)?"equal":"not equal";

//ARRAYS
//Also work the same way than in JS, but the syntax changes

//create an empty array
$shoes=[];
$hats=array();

//fill our array
$shoes[0]="Nike";
$shoes[1]="Reebok";
$hats[0]="Fedora";
//once our arrays are initialized, no difference is made ([] or array())

//Array functions
$sockColors=["green", "blue", "yellow", "red"];
$sortedSockColors=$sockColors;
sort($sortedSockColors);
echo '<pre>'; //displays line under line
var_dump($sockColors);
echo '<br>';
var_dump($sortedSockColors);
echo '</pre>';

//counting in aray
echo count($sockColors); //length of array

//associative array, the order doesn'T matter
$remiInfo=[
    'firstName' => 'Remi',
    'lastName'=>'Humbert',
    'email'=>'remi.humbert@cap4lab.com'
];
echo $remiInfo['email'];

//LOOPS
$array=['banana', 'apple','orange'];
foreach($array as $item){ //this is the PHP
    echo $item;
}

//for loop
for($i=0; $i < count($array); $i++){
    echo $array[$i]. '<br>';
}

//while loop - the same as in js
$nbOfArray=count($array);
$counter=0;
while ($counter < $nbOfArray) {
    echo $array[$counter]. '<br>';
    $counter++;
}

//DATES

?>