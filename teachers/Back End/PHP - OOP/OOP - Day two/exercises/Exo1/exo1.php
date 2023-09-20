<?
/*

An animal is represented by a number of legs, a color, a gender and a name.
A dog is able to bark.
A cat is able to meow.

	-> Create the matching classes
*/

class Animal
{
    public $nbrLegs;
    public $colour;
    public $gender;
    public $name;

    public function __construct($nbrLegs, $colour, $gender, $name)
    {
        $this->nbrLegs = $nbrLegs;
        $this->colour = $colour;
        $this->gender = $gender;
        $this->name = $name;    
    }
}

class Dug extends Animal
{
    public function __construct($nbrLegs, $colour, $gender, $name)
    {
        parent::__construct($nbrLegs, $colour, $gender, $name);
    }

    public function bark()
    {
        echo "Woof!";
    }
}

class Cat extends Animal
{
    public function __construct($nbrLegs, $colour, $gender, $name)
    {
        parent::__construct($nbrLegs, $colour, $gender, $name);
    }

    public function miaow()
    {
        echo "Miaow!";
    }
}

$cat = new Cat(4,'blue', 'girl', 'pink');
$dug = new Dug(4,'red','good boy', 'Clifford');
$cat->miaow();
$dug->bark();