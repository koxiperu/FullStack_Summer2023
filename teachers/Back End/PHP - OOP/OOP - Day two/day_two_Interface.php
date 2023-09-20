<?php

/*
    INTERFACE

    Interfaces look like a class but only contain abstract methods.

    Interfaces are used to 'force' child classes to have the same role/job.
    Interfaces are however not extended from their parent but they implement them
    you can use interfaces to implement multiple inheritances.

    Best practises:
        - Name of the file should be the same as the interface name.
        - Name of the interface should always start with Capital "I"
*/
abstract class Animal
{
    abstract public function makeSound();
    abstract public function displayInfo();
}


interface IActions
{
    //The Abstract is implicit.
    public function work();
}

interface IMovements
{
    //Again the abstract is implicit.
    public function run();
}


class Robot implements IActions
{
    public function work()
    {
        echo "Robot is working<br>";
    }

    public function makeSound()
    {
        echo "beep boop<br>";
    }
}

class Dog extends Animal implements IActions, IMovements
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


    //Implemented from the Interface IMomvements.
    public function run()
    {
        echo "I'm zoomin!";
    }

    //Inheritad from the abstract parent Animal.
    public function makeSound()
    {
        echo $this->call . "<br>";
    }

    public function displayInfo()
    {
        echo "This dog is call $this->name and it is a $this->breed <br>";
    }

}


