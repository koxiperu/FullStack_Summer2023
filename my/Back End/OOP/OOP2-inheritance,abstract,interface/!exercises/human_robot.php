<?
/*

An animal is represented by a number of legs, a color, a gender and a name.
A dog is able to bark.
A cat is able to meow.

	-> Create the matching classes
    
- Part 2 :

A human being is a magical creature that does not belong to the animal kingdom but is represented by a name, a hair color and a gender.

A robot is a mechanical creature that is defined by an identifier and a color.

	-> Create the matching classes

- Part 3 :

Human and robot can work, create a 'work()' method (just display some stuff).

- Part 4 : 

Human can talk.

	-> Change your code to match
*/


interface IActions {
    public function work();

}
class Magical
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
}
class Mechanical
{
    public $id;
    public $colour;
    public function __construct($id, $colour)
    {
        $this->id=$id;
        $this->colour=$colour;
    }
    
}
class Human1 extends Magical implements IActions
{
    public function work(){
        echo "<br>Human can work by hands and by head<br>";
    }
    public function speak(){
        echo "<br>Human goes BlaBlaBla<br>";
    }
}
class Robot extends Mechanical implements IActions
{
    public function work(){
        echo "<br>Robot can work by hands using computer programms<br>";
    }
}



$human = new Human1('Miranda', 'pink', 'woman');
$robot = new Robot('ZU87743', 'blue');
$human->work();
$human->speak();
$robot->work();

?>