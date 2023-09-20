<?php 
//ABSTRACT
//Abstraction is used when the parent should not be able to be instatiated.
//Use it when you want to implement 'rules' for children to follow.
//The structure of the class is the same as a regular class.
//1. If a class contains one (or more) abstract methods, the class MUST be abstract
//2. however abstract classes can have 'regular' methods
//3. A class can be abstract without any abstract methods
abstract class Shape {
    public $x;
    public $y;
    public function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    //signature of the method: no body
    abstract function calculateSurface();

    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
}
//$myShape = new Shape() - not for abstract
//anbstract class can have constructors but they cannot be used directly on themselves, only their children
class Circle extends Shape {
    public $diameter;
    public function __construct($diameter)
    {
        $this->diameter=$diameter;
    }
    public function calculateSurface()
    {
        echo pow(($this->diameter/2),2)*pi();
    }
}
class Rectangle extends Shape {
    //the class inherit its parents constructor - only in abstract classes.
    // public function __construct($x,$y)
    // {
    //     parent::__construct($x,$y);
    // }
    public function calculateSurface()
    {
        echo $this->x*$this->y;
    }
}
$myRectangle = new Rectangle(5,4);
$myRectangle->calculateSurface();
echo "<br>------------<br>";
$myCircle = new Circle(7);
$myCircle->calculateSurface();
echo "<br>------------<br>";


?>