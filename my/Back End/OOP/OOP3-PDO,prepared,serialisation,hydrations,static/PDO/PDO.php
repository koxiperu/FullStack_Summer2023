<?php
//PDO PHP Data Object - is an abstraction layer to access/manipulate databases. It can handle around 12 different types of DBs.
//PDO uses OOP

//1. Connect to the DB
$pdo = new PDO('mysql:host=db;dbname=database', 'root', 'root');
//2. Create the query and execute
// $query = "DELETE FROM movies WHERE id=1";
// $result = $pdo->exec($query); //quantity of rows // manipulation operations - INSERT, UPDATE...
//echo $result;

$query = "SELECT * FROM movies";
//Query the database and hold them in memory
$result = $pdo->query($query); //for SELECT
$movies = $result->fetchAll(PDO::FETCH_ASSOC);
foreach ($movies as $movie ) {
    echo $movie['name'] .'<br>';
}
//close the connection
$pdo = null;
echo '<pre>';
var_dump($movies);
echo '</pre>';

?>