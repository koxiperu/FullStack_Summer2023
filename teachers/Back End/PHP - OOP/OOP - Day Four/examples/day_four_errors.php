<?php

/*
    Errors:
    And error is an unexpected result that can't be handled by the code.
    Errors are fixed directly by the developer. But proper error messages can make this process alot easier. Defining them is important to allow proper maintenance without spending too much time reverse engineering code to find the error.
*/


function custom_error($error_no, $error_msg)
{
    echo "Something is wrong. <br>";
    echo "Error code : $error_no <br>";
    echo "Error message : $error_msg <br>";
}

set_error_handler('custom_error');

echo $var;