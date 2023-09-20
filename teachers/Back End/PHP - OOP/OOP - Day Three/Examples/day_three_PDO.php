<?php

/*
    PDO - PHP Data Object

    PDO is an abstraction layer to access/manipulate databases
    It can handle around 12 differnet types of DBs.

    PDO uses OOP.
*/

//Connect to the DB
$pdo = new PDO('mysql:host=db;dbname=database','root', 'root');

//Create the query and execute
// $query = 'DELETE FROM movies WHERE id = 1';
// $result = $pdo->exec($query);
// echo $result;

$query = 'SELECT * FROM movies';

//Query the database and hold them in memory
$result = $pdo->query($query);

$movies = $result->fetchAll(PDO::FETCH_ASSOC);

foreach ($movies as $movie) {
    echo $movie['name'] . '<br>';
}

// Close the connection
$pdo = null;

echo "<pre>";
var_dump($movies);
echo "</pre>";