<?php

/*

EXERCISE :

1. Create two pages, index.html and checking.php.
2. In index.html you’ll have a form with a text input (call it 'username') and a submit button.
3. When the form is submitted, send the value of the input to checking.php using AJAX.
4. In checking.php, check if the input value contains '@'. If it does, send back "Enter a valid username".
If it does not, send back "Welcome [username] to our website !".
Hint : use str_contains() to check if a string contains something.
5. Display the response message in a <p> element.

BONUS 1 : Add a new password field to the form. In the PHP file verify that it is at least 6 characters long.
Return the appropriate error message if it's shorter.

*/