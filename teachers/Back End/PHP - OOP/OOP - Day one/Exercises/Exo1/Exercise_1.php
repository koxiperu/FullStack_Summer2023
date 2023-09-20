<?php

/*

A Human is represented by a name, a haircolor, a gender and a height.

Create the matching class.
Use the constructor to initialize your property quickly.

The name should not be editable after the creation of the object.

Create two different object from this class.
Display the two objects using toString().
    
*/

class Human{
    private $name;
    public $hairColour;
    public $gender;
    public $height;

    public function __construct($name, $hairColour, $gender, $height)
    {
        $this->name = $name;
        $this->hairColour = $hairColour;
        $this->gender = $gender;
        $this->height = $height;
    }

    public function breath(){
        echo "I am breathing";
    }

    public function getName() {
        return $this->name;
    }

    public function __toString()
    {
        return "Hello I am" . $this->getName() . " and I am " . $this->height . " tall";
    }
}

$carl = new Human("Carl", "brown", 'M', 180);
$sarah = new Human("Sarah", 'Blonde', "F", 165);

echo $carl . "</br>";
echo $sarah . "</br>";