<?php
    /*
    ERRORS
    And error is an unexpected result, that can't be handles by the code. 
    Errors are fixed directly by the developer. But proper error messages can make this process a lot easier. Defining them is important to allow peoper maintenance without spending too much time reverse engeneering code to find the error.
 
    */
function customError($error_no, $error_msg){
    echo "Something is wrong. <br>";
    echo "Error code_ $error_no.<br>";
    echo "Error message: $error_msg<br>";
}

set_error_handler("customError");
echo $var;

?>