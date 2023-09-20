<?php
/*
	Simple Exercise -
	
	Create an abstract class animal with two methods
	makeSound() and displayInfo()

	Create three children of this class with their on properties that will implement these methods from the parent animal.
*/

abstract class Animal
{
    abstract public function makeSound();
    abstract public function displayInfo();
}

class Dog extends Animal
{
    private $call; //english word for the noise animales make
    private $name;
    private $breed;

    public function __construct($call, $name, $breed)
    {
        $this->call= $call;
        $this->name= $name;
        $this->breed= $breed;
    }

    public function makeSound()
    {
        echo $this->call . "<br>";
    }

    public function displayInfo()
    {
        echo "This dog is call $this->name and it is a $this->breed <br>";
    }
}

class Cat extends Animal
{
    private $colour;
    private $name;
    private $call;

    public function __construct($colour,$name, $call)
    {
        $this->colour = $colour;
        $this->name = $name;
        $this->call = $call;
    }

    public function makeSound()
    {
        echo $this->call ."<br>";
    }

    public function displayInfo()
    {
        echo "This cat is called $this->name and it is $this->colour <br>";
    }
}

$myDog = new Dog('bark','Rex','German Shepperd');
$myCat = new Cat('tabi', 'Yolo', 'Meow');

$myDog->makeSound();
$myDog->displayInfo();

$myCat->makeSound();
$myCat->displayInfo();