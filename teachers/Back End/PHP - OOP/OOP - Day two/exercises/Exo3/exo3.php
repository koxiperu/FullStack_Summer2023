<?php
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
abstract class LivingBeing
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

	abstract function communicate();
}

class Dug extends LivingBeing
{
    public function __construct($nbrLegs, $colour, $gender, $name)
    {
        parent::__construct($nbrLegs, $colour, $gender, $name);
    }

	public function communicate()
	{
		echo "Bark Bark";
	}
}

class Cat extends LivingBeing
{
    public function __construct($nbrLegs, $colour, $gender, $name)
    {
        parent::__construct($nbrLegs, $colour, $gender, $name);
    }

	public function communicate()
	{
		echo "meow";
	}
}


class Human1 extends LivingBeing
{
    public function work() {
        echo "I've made 1 car in a week";
    }

	public function communicate()
	{
		echo "Bla Bla Bla";
	}
}

class MechanicalCreature
{
    public $identifier;
    public $colour;

    public function __construct($id, $colour)
    {
        $this->identifier = $id;
        $this->colour = $colour;
    }
}

class Robot extends MechanicalCreature
{
    public function work()
    {
        echo "I make 3000 cars an hours";
    }
}


