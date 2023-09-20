<?php
class Employee {
    private $baseSalary;
    private $overTime;
    private $rate;

    public function __construct($baseSalary, $overTime, $rate)
    {
        $this->baseSalary = $baseSalary;
        $this->overTime = $overTime;
        $this->rate = $rate;
    }

    public function getWage(){
        return $this->baseSalary + ($this->overTime * $this->rate);
    }
}
?>