<?php

require_once "LivingBeing.php";

class Human extends LivingBeing implements IWorker
{
    public function communicate()
    {
        echo "Hey, my name is $this->name<br>";
    }

    public function work()
    {  
        //Write your exceptions here!
        if (rand(1,4)==1) {
            throw new Exception("Work accident with $this->name<br>", 002);
            
        };
        echo "$this->name is currently working<br>";
    }
}

?>