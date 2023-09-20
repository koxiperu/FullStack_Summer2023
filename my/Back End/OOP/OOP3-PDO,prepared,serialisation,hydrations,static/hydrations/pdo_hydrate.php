<?php
//Hydrating your object
//Hydrating an object is taking data that exist in memory (databases, files) and then populating an object with that data.

require_once './Movie.php';
$pdo = new PDO('mysql:host=db;dbname=database', 'root', 'root');
//Run the query
$result = $pdo->query('SELECT * FROM movies');
//Use the results to hydratate some movie objects. We did not use a constructor for this, the object where created then given values.
// "$hydratedMovie = new Movie(); $hydratedMovies->name=$name;
$movies = $result -> fetchAll(PDO::FETCH_CLASS, 'Movie');
//loop through and display the hydrated objects
foreach ($movies as $movie) {
    echo $movie;
    echo '<hr>';
}
?>