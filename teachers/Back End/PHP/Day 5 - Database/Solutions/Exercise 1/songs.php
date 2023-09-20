<?php
require_once "nav.html";

$db = mysqli_connect('db', 'root', 'root', 'spotify');

// Retrieve title of all songs
$query = "SELECT title FROM songs";
$result = mysqli_query($db, $query);
$songs = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<h1>Songs :</h1>";

foreach ($songs as $song){
    echo "Title : " . $song['title'] . "<br><hr>";
}

mysqli_close($db);