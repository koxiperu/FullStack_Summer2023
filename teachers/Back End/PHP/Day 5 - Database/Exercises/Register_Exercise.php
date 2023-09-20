<?php

/*

    Exercise :

    In this exercise, you'll have to create the register process.

    - Step 1 :
        Create a 'register.php' file
        This file contains a form with those input :
            * first name
            * last name
            * email
            * password
            * confirm password
            * submit btn

    - Step 2 :
        If the form is submitted, you have to check :
            * first name, last name, mail and password must not be empty !
            * mail must be a valid one (with @symbol)
            * passwords must be the same 
        
        Display a different message for each validation/error.

    - Step 3 :
        Create a new database in phpMyAdmin named "register_exercise". It will contain a single "users" table.
        This table will have the following attributes : "firstname", "lastname", "email" & "password".
        If everything is good, insert the new user in the "users" table.
        You can make sure it worked by looking at phpMyAdmin directly after submitting the form.

    */