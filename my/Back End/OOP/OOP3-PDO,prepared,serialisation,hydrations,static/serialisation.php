<?php
/*
SERIALISATION
Serialisation is the process of taking a object and turning it into readible string. Often cases into a JSON.
JSON:
JSON is a data/file format which allows us to store data. The data represents an object or an array.It's really easy to read and the syntax is simple. It's a lightweight method that allows fast data transfer.
Syntax:
- {...} :Curly bracets represents array
- [..] : Square bracets represents array
- JSON understands only Strings, Boolean and Numbers.
*/

require_once 'hydrations/Movie.php';
$fightClub = new Movie();
$fightClub -> name = 'Fight Club';
$fightClub -> release_date = '2013-07-12';
$titanic = new Movie();
$titanic -> name = 'Titanic';
$titanic -> release_date = '2000-01-22';
$movies = [$fightClub, $titanic];

$json = json_encode($movies, JSON_PRETTY_PRINT);
echo '<pre>';
echo $json;
echo '</pre>';
?>