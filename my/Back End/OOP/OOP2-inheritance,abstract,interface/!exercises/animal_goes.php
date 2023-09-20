<?php
class Animal
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

class Dog extends Animal 
{
    public function __construct($legs, $color, $gender, $name)
    {
        parent::__construct($legs, $color, $gender, $name);
    }

    public function goes() {
        echo "Dog goes Waff!";
    }
}
class Cat extends Animal 
{
    public function __construct($legs, $color, $gender, $name)
    {
        parent::__construct($legs, $color, $gender, $name);
    }

    public function goes() {
        echo "Cat goes Meow!";
    }
}

$myDog = new Dog (4, 'black', 'male', 'Bim');
$myDog->goes();
echo "<br>----------<br>";
$myDog = new Cat (4, 'white', 'female', 'Murka');
$myDog->goes();
?>