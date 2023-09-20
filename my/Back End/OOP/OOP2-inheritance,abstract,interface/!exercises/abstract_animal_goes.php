<?php
abstract class Animal1{
    public $type;
    public function __construct($type)
    {
        $this->type = $type;
    }
    abstract function makeSound();
    abstract function displayInfo();
}

class Cat1 extends Animal1{
    public $fur;
    public function __construct($fur)
    {
        $this->fur=$fur;
    }
    public function appearance($fur){
        if ($fur == 'long') echo "<br>long fur<br>";
        else echo "<br>unknown fur<br>";
    }
    public function makeSound(){
        echo "Cat goes Mieow";
    }
    public function displayInfo()
    {
        echo "<br>Fluffy angel from hell";
    }
}
class Dog1 extends Animal1 {
    public function makeSound(){
        echo " Dog goes Woof";
    }
    public function displayInfo()
    {
        echo "<br>Fliend forever";
    }
}
class Dragon extends Animal1 {
    public $temp;
    public function __construct($temp)
    {
        $this->temp=$temp;
    }
    public function fire($temp){
        return pow($temp,2);
    }
    public function makeSound(){
        echo " Dragon goes FFFFFFire!";
    }
    public function displayInfo()
    {
        echo "<br>Smiles when sees any princess.";
    }
}
$myCat = new Cat1('cat');
echo $myCat->appearance('lon');
$myCat->makeSound();
$myCat->displayInfo();
echo "<br>------------<br>";
$myDog = new Dog1(7);
$myDog->makeSound();
$myDog->displayInfo();
echo "<br>------------<br>";
$myDragon = new Dragon(7);
$myDragon->makeSound();
$myDragon->displayInfo();
$fir = $myDragon->fire(57);
echo "<br>My dragon produce $fir degrees! Wow!";
echo "<br>------------<br>";
?>