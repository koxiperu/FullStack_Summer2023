<?php 

/* INTERFACE
Interfaces look like a class but only contain abstract methods
Interfaces are used to 'force' child classes to have the same role/job.
Interfaces are however not extended from their parent but thay inplement them you can use 
interfaces to implement multiple inheritance.

Best practices
- NAme of the file should be the same as the interface name;
- Name of the interface should always start with Capital I.
*/
class Animal3
{
    public $legs;
    public $color;
    public $gender;
    protected $name;

    public function __construct($legs, $color, $gender, $name)
    {
        $this->legs = $legs;
        $this->color = $color;
        $this->gender = $gender;
        $this->name = $name;
    }
}
interface IActions {
    //the abstract is implicit
    public function work();

}
interface IMovements {
    //the abstract is implicit
    public function run();

}

class Robot implements IActions{
    public function work() {
        echo '<br>Robot is working<br>';
    }
    public function makeSound(){
        echo "<br>beep boop<br>";
    }
}
class Dog3 extends Animal3 implements IActions, IMovements
{ //inherited from abstract parent Animal
    public function __construct($legs, $color, $gender, $name)
    {
        parent::__construct($legs, $color, $gender, $name);
    }

    public function goes() {
        echo "Dog goes Waff!";
    }
    //implement from the interface
    public function work(){
        echo "<br>Dogs don't work(:<br>";
    }
    //imlement from the interface IMOvements
    public function run(){
        echo "<br>Dogs run on 4 legs<br>";
    }
}

$myDog = new Dog3(4, 'black', 'boy', 'Hugo');
$myDog->work();
$myDog->run();
?>