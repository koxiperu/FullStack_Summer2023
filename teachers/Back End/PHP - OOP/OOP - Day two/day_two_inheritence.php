<?php

/*
    INHERITANCE

    Inheritance represents a relationship between classes in the of a
    Parent/Child relantionship

    Children will benefit from the parents properties & methods.
    A class can only inherit from ONE parent.
    Different children can inherit from the same parent.

    The parent shares propreties & methods to the children when
    they are 'public' or 'protected
    'Private properties and methods remain locked to the class they belong too.

    Children can have their own properties and methods seperate from their parents.
*/

class Vehicle
{
    //properties children can access
    const MINIMUM_PASSANGERS = 1;
    protected $manufacturer;
    public $colour;

    public function __construct($manufacturer, $colour)
    {
        $this->manufacturer = $manufacturer;
        $this->colour = $colour;
    }

    public function horn()
    {
        echo "BEEP BEEP<br>";
    }
}

// Car inherits from Vehicle
class Car extends Vehicle
{
    //properties unique to child
    private $nbDoors;

    public function __construct($manufacturer, $colour, $nbDoors)
    {
        $this->nbDoors = $nbDoors;
        // 'parent::' accesses the parents properties and methods
        parent::__construct($manufacturer, $colour);
    }


    public function slamTheDoor()
    {
        echo "BAM!<br>";
    }
    
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
}

class Truck extends Vehicle
{
    private $loadCapacity;

    public function __construct($manufacturer, $colour, $loadCapacity)
    {
        parent::__construct($manufacturer, $colour);
        $this->loadCapacity = $loadCapacity;
    }
}

$myVehicle = new Vehicle('audi', 'Grey');
$myCar = new Car('BMW', 'Blue', 5);
$myVehicle->horn();
$myCar->horn();
$myCar->slamTheDoor();
//Wont work cant access protected variables from outside the class.
//echo $myCar->manufacturer;
echo $myCar->getManufacturer();

$myTruck = new Truck('Volvo', 'White/Red', 16);

echo "<pre>";
var_dump($myVehicle);
echo "</pre>";
echo "====<br>";
echo "<pre>";
var_dump($myCar);
echo "</pre>";
echo "====<br>";
echo "<pre>";
var_dump($myTruck);
echo "</pre>";
echo "====<br>";