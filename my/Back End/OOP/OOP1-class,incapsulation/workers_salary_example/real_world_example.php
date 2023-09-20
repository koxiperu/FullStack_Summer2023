<?php

$baseSalary = 35000;
$overTime = 10;
$rate = 20;

function getWage($baseSalary, $overTime, $rate) {
    return $baseSalary + ($overTime*$rate);
}
getWage($baseSalary, $overTime, $rate);

//with OOP small abstraction. We remove the definition of an employee from the main script
//to create more readable and scalable code.
require_once "./employee.php";
$employee = new Employee(45000, 20, 50);
$employee->getWage();
?>
