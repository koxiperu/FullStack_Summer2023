<?php

namespace App\Models;


class Greeting
{
    public static function getName(){
        return 'Anna';
        
    }
    public static function greet($name){
        return "Hello, $name! Welcome to Laravel";
    }
}