<?php

/*

    A static method/properties are related to a class. They are not related to an object, an instance of a class.

    A static method/property can be access directly without creatig an object.
*/

class Sheep
{
    private $name;
    private $count;
    //Declaration of a static property
    private static $countCloned = 0;

    public function __construct($name)
    {
        //'self' keyword to access the class instead of the object
        self::$countCloned +=1;

        $this->name = $name;
        $this->count += self::$countCloned;

    }

    //Declaration of a static method
    public static function displayCount()
    {
        return self::$countCloned;
    }
}

echo "There are currently " . Sheep::displayCount() ." sheep </br>";

$sheep1 = new Sheep('Shaun');

echo "There are currently " . Sheep::displayCount() ." sheep </br>";
