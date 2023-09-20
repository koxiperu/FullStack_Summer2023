<?php

// Retrieve the value of name input
echo $_GET['name'];

$name = $_GET['name'];

// if it's empty, display a message
if (empty($name))
    echo 'Please enter a name';

echo '<pre>';
var_dump($_GET);
echo '</pre>';