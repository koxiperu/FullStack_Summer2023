<?php

/*
    ABSTRACT

    Abstraction is used when the parent should not be able to be instantiated.
    use it when you want to implement 'rules' for children to follow.

    The structure of the class is the same as a regular class.

    1. If a class contains one (or more) abstract methods, the class MUST be abstract.
    2. however abstract classes can have 'regular' methods.
    3. A class can be abstract without any abstract methods.

*/

abstract class Shape
{
    public $x;
    public $y;

    //Abstract classes can have constructors but they cannot be used directly on themselves. only their children
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    //Signature of the method : no body
    abstract function calculateSurface();

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
}
//This is impossible cannot instantiate abstract classes.
//$myShape = new Shape();

class Circle extends Shape
{
    public $diameter;

    public function __construct($diameter)
    {
        $this->diameter = $diameter;
    }


    public function calculateSurface()
    {
        echo pow(($this->diameter / 2),2)* pi() . "<br>";
    }
}

class Rectangle extends Shape
{

    //As of new version of php this is redundant. The class inherits its parents constructor
    // public function __construct($x, $y)
    // {
    //     parent::__construct($x,$y);
    // }

    public function calculateSurface()
    {
        echo $this->x * $this->y . "<br>";
    }
}

$myRectangle = new Rectangle(5,4);
$myRectangle->calculateSurface();

$myCircle = new Circle(5);
$myCircle->calculateSurface();