<?php 
//INHERITANCE 
//Inheritance represents a relationship between classes in the of a Parent/Child relationship
//children will benefit from the parents properties and methods.
//a class can only inherit from ONE parent.
//Different children can inherit from the same parent.
//The parent shares properties and methods to the children when the are public or protected.
//'private' properties and methods remain locked to the class they belong to.
//Children can have their own properties and methods separate from their parents.
class Vehicle
{
    //properties children can access
    const MINIMUM_PASSENGERS = 1;
    protected $manufacturer;
    public $colour;
    
    public function __construct($manufacturer, $colour){
       $this->manufacturer = $manufacturer;
       $this->colour = $colour; 
    }

    public function horn(){
        echo "Beep beep<br>";
    }
}
//car inherits from Vehicle
class Car extends Vehicle
{
    //properties unique to child
    private $nbDoors;
    public function __construct($manufacturer, $colour, $nbDoors) {
        $this->nbDoors = $nbDoors;
        //parent:: acesses the parents properties and methods
        parent::__construct($manufacturer, $colour);
    }
    public function slamTheDoor(){
        echo "BAM<br>";
    }
    public function getManufacturer(){
        return $this->manufacturer;
    }
}
class Truck extends Vehicle {
    private $laodCapacity;
    public function __construct($manufacturer,$colour, $laodCapacity)
    {
        parent::__construct($manufacturer, $colour);
        $this->laodCapacity = $laodCapacity;
    }
}
$myVehicle = new Vehicle('audi', 'grey');
$myVehicle->horn();
$myCar = new Car ('BMW', 'Blue', 5);
$myCar ->horn();
$myCar->slamTheDoor();
echo $myCar->getManufacturer();
$myTruck = new Truck('Volvo', 'white/red', 16);
$myTruck->horn();

/*echo '<pre>';
var_dump($myVehicle);
echo '</pre>';
echo "<br>----------<br>";
echo '<pre>';
var_dump($myCar);
echo '</pre>';
echo "<br>----------<br>";
echo '<pre>';
var_dump($myTruck);
echo '</pre>';*/
?>