<?php
//SCOPE
//what makes your variables accessible in certain parts of the code but not on others
//since we only have one type of variable, we need to pay attention where we declare them
$number=10;
function example(){
    echo $number;
}
example();
//if want to use global var inside the function, give it like argument
$number=10;
function example($number){
    echo $number;
}
example($number);

//we need to pass external variables as argument for the function to use them.
//the same with var inside the function -> return
function example2(){
    $number2=404;
}
example2();
echo $number2;
//use return, but created inside a function var "number2" will die inside the function
function example2(){
    return $number2=404;
}
$result=example2();
echo $result;
echo example2();

$myNumber=5;
function displayVar($x){
    $x+=10;
    return "Inside the function $x <br>";
}
echo "before the function $myNumber<br>"; //5
echo displayVar($myNumber); //15
echo "After the function $myNumber <br>"; //5

?>