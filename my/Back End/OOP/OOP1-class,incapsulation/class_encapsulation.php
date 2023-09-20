<?php
//Here we define our class
class Car
{

}

//create an object: instance of a class
$myCar = new Car();

var_dump($myCar);

//I can create as many objects as I would like

$myLambo = new Car();
var_dump($myLambo);
/*Classes have `internal`variables calld properties.
*/
class Car2{
    //to define a property, you need to define its SCOPE.
    //Scope means where it can be accessed from: public, private, protected.
    public $make; //can be accessed from anywhere in your code
    private $model; //from only inside the object they are defined in
    protected $brand; //accessed only from inside the object they are defined in and its children;
    //they also have ' internal' functions, called methods.
    //Declare methods
    public function accelerate()
    {
        // the $this -> variable is all classes have that allows you to access the class from inside itself
        //$this reference the class it is in
        $this->model = "muscle car model";
        echo "Car goes Brrrrr".$this->model;
    }
}
echo "<br>--------------------------------------------------------<br>";
//new instance of car2
$newCar2 = new Car2();
$newCar2->make = "bmw";
//$newCar2->model = "X3";  throws an error, because private property.
//classes names strats with uppercase

var_dump($newCar2);
//The constructor is a method that you allows you to initialise properties when creating the object
echo "<br>--------------------------------------------------------<br>";
class Car3
{
    public $colour;
    public $brand;
    public $model;
    //constructor 
    public function __construct($colour, $brand, $model)
    {
        $this->colour = $colour;
        $this->brand = $brand;
        $this->model = $model;
    }
    //declare method
    public function accelerate()
    {
        echo "<br>This one goes Vrooom<br>";
    }
    public function __toString()
    {
        //needs to return a string
        return "Car details. Colour: ".$this->colour .'<br>';
    }
}
$otherCar = new Car3('red', 'ferrari', 'f40');
//call a method from your object:
$otherCar->accelerate();
//edit properties:
$otherCar->colour = 'blue';
//display a property
echo $otherCar->colour . '<br>';
echo '<pre>';
var_dump($otherCar);
echo '</pre>';
echo  $otherCar;

///////////////////////////////////////////////////////////////////////////
//Encapsulation
// - protect the state of an object. Accessing properties is done via getter and setter methods.
// - The code of an object is easily editable without breaking the whole program.
// - Encapsulation is done using private scope getters/setters
echo "<br>--------------------------------------------------------<br>";
class Car4
{
    //properties
    private $colour;
    public $brand;
    public $model;

    //constructor
    public function __construct($colour, $brand, $model)
    {
        $this->setColour($colour);
        $this->brand = $brand;
        $this->model = $model;
    }
    //setter
    public function setColour($colour)
    {
        //updates the colour property
        //I have only three allowed colours: red/green/blue
        if ($colour != 'red' && $colour !='green' && $colour !='blue') {
            echo "Choose a valid colour(red/blue/green)<br>";
        }else {
            $this->colour = $colour;
        }
    }
    //getter
    public function getColour()
    {
        return $this->colour;
    }
}
//create an object
$myCar = new Car4('yellow', 'bmw', 'm2');
echo '<pre>';
var_dump($myCar);
echo '</pre>';

//This wont work
// $myCar->colour = 'red';
//so, we use setter
$myCar->setcolour('red');
//now we get a color
echo $myCar->getColour();

echo "<br>--------------------------------------------------------<br>";
?>