<?php

/*
    EXCEPTION
    An exception is an unexpected result that can be handled by the script. 

    For example: You try to open a file, but the file doesn't exist as expected. Using an exception you can let the user choose another file Or maybe create the file.

    Exceptions are handled in an Object Oriented way.

    When an exception is triggered (thrown), an 'Exception' object is created.
    An exception object contains some usefull information about what is happening (getMessage(), getCode(), toString....)

    Syntax:
        throw new Exception();
    
    'new' create an exception object
    'throw' Triggers the exception.
*/


class MultiplyByNegativeException extends Exception
{
}

function multiply ($x, $y)
{
    // Check if numbers are negative
    if($x < 0 || $y < 0 )
    {
        throw new MultiplyByNegativeException('Negative number not allowed!',123456789);
    }else if(is_string($x) || is_string($y))
    {
        throw new Exception();
    }

    echo $x * $y;
}


try {
    multiply("hello",5);
    echo "After function<br>";
} catch(MultiplyByNegativeException $th) {
    // Do something if it is negative
    echo $th->getMessage() . "<br>";
    echo $th->getCode() . "<br>";
} catch(Exception $th) {
    echo "Something went wrong<br>";
}