<?
/*
Using the Animal/Robot/Human exercise.

	- Step 1 :
		Think about the nature of your classes. At least one of them will never be instantiate...
		You need to turn them into abstract class.
		Maybe change some methods to make it abstract methods.
		
		Tips : If you pay attention, many of our classes can 'talk' or 'make a sound'

	- Step 2 :

		In a main program (client) :

		1. Create an array of animals and humans (cats, dogs or humans)
		2. Create a script where :
			- Loop through the array
			- Each time the current element should make a sound

*/


abstract class Magical 
{
    public $name;
    public $hairColor;
    public $gender;
    public function __construct($name, $hairColor, $gender)
    {
        $this->name=$name;
        $this->hairColor=$hairColor;
        $this->gender=$gender;
    }
    abstract function work();
}
abstract class Mechanical
{
    public $id;
    public $colour;
    public function __construct($id, $colour)
    {
        $this->id=$id;
        $this->colour=$colour;
    }
    abstract function work();
    
}
class Human1 extends Magical
{
    public function work(){
        echo "<br>Human can work by hands and by head<br>";
    }
    public function speak(){
        echo " goes BlaBlaBla<br>";
    }
    public function getName(){
        return $this->name;
    }
}
class Robot extends Mechanical
{
    public function work(){
        echo " can work by hands using computer programms<br>";
    }
    public function getId(){
        return $this->id;
    }
}


$humanArray=[
    new Human1('Miranda', 'pink', 'woman'),
    new Human1('Haily', 'brown', 'woman'),
    new Human1('Britney', 'blond', 'man'),
    new Human1('Henri','blond','man')
];
$robotArray=[
    new Robot('R1D1', 'pink'),
    new Robot('R2D2CR', 'blue'),
    new Robot('R3D3S0', 'white'),
    new Robot('R4D4MK','red')
];
foreach ($humanArray as $human){
    $n=$human->getName();
    echo "$n ";
    $human->speak();
};
foreach ($robotArray as $robot){
    $r=$robot->getId();
    echo "$r ";
    $robot->work();
};

?>