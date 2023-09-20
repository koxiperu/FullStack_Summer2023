<?php

// Here we define our Class
// It is common practise to always name your classes with an uppercare first letter.

class Car
{

}

//Create an object : Instance of a Class
$myCar = new Car();

echo '<pre>';
var_dump($myCar);
echo '</pre>';


//I can create as many objects as I would like

$myLambo = new Car();

echo '<pre>';
var_dump($myLambo);
echo '</pre>';

/*
    Classes have 'internal variables' called properties.

*/
class Car2{
    //To define a property, you need to define its 'scope'.
    //Scope meaning where it can be accessed from.
    //There are 3 scopes: Public, private and protected.

    //Public properties can be accessed from anywhere in your code.
    public $make;
    //Private properties can be accessed only from inside the object 
    //they are defined in.
    private $model;
    //protected properties can be accessed only from inside the object 
    //they are defined in and its children.
    protected $brand;

    //They also have 'internal functions', called 'methods'.

    //Decalre Methods
    public function accelerate()
    {
        //The $this-> variable is all classes have that allows you to access 
        //the class from inside itself.
        //$this references the class it is in.
        $this->model = "muscle car model";
        echo "Car goes 'Brrrrrrr'" . $this->model;
    }
}

//new instance of car2
$newCar2 = new Car2();
$newCar2->make = "bmw";
//Throws an error. Private properties cannot be accessed from outside the class
//$newCar2->model = "X3"; 

echo '<pre>';
var_dump($newCar2);
echo '</pre>';

/*
    - The contructor:
    The constructor is a method that allows you to initialise
    properties when creating the object.
*/

class car3
{
    // Declare properties
    public $colour;
    public $brand;
    public $model;
    // Constructor
    public function __construct($colour, $brand, $model)
    {
        $this->colour = $colour;
        $this->brand = $brand;
        $this->model = $model;
    }

    // Declare methods
    public function accelerate()
    {
        echo 'This one goes Vroooooom!';
    }

    public function __toString()
    {
        //Needs to return a string
        return 'Car details. Colour : ' . $this->colour . "</br>";
    }
}

$otherCar = new Car3('red', 'Ferrari', 'F40');

// Call a method from your object :
$otherCar->accelerate();

// edit properties:
$otherCar->colour = 'Blue';

// Display a property
echo $otherCar->colour . "<br>";

//var_dump gives us all the values of the object. Its type length and contents.
echo '<pre>';
var_dump($otherCar);
echo '</pre>';


//Normally the echo function only accepts strings, but with the __toString() function we created it 
//can be stringified and shown.
echo $otherCar;


/*
    Encapsulation:
    - Protect the state of an object.  Accessing properties is done via getter and setter methods.
    - The code of an object is easily editable without breaking the whole program.
    - Encapsiation is done using private scope getters/setters
*/

class Car4
{
    //properties
    private $colour;
    public $brand;
    public $model;

    //Constructor
    public function __construct($colour, $brand, $model)
    {
        $this->setColour($colour);
        $this->brand = $brand;
        $this->model = $model;
    }

    //Setter
    public function setColour($colour)
    {
        //Updates the colour property
        //I have only three allowed colours : red/green/blue
        if ($colour != 'red' && $colour != 'green' && $colour != 'blue') {
            echo "Choose a valid colour (red/green/blue)";
        } else {
            $this->colour = $colour;
        }
    }

    //Getter
    public function getColour()
    {
        return $this->colour;
    }
}

// Create an object
$myCar = new Car4('Yellow', 'bmw', 'm2');

echo '<pre>';
var_dump($myCar);
echo '</pre>';

//This wont work!
//$myCar->colour = "red";

//So we'll use the setter.
$myCar->setColour('red');
//now we Get the colour
echo $myCar->getColour();