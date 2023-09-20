<?php
/*
A static method/properties are related to a class. They not related to an object., an instance of a class.
A static method/property can be access directly without creating an object.
*/

class Sheep{
    private $name;
    private $count;
    //Declaration of a static property
    private static $countCloned = 0;

    public function __construct($name)
    {
        self::$countCloned+=1; 
        $this->name = $name;
        $this->count +=self::$countCloned;  
        //self keyword to access the class instead of the object
             
    }
    //Declaration of a static method
    public static function displayCount(){
        return self::$countCloned;
    }
}
echo "There are currently " .Sheep::displayCount(). " sheeps <br>";
$sheep1 = new Sheep ('Shaun');
echo "There are currently " .Sheep::displayCount(). " sheeps <br>";
$sheep2 = new Sheep ('Sarah');
echo "There are currently " .Sheep::displayCount(). " sheeps <br>";
?>