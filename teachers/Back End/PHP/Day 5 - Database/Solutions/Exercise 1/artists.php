<?php
require_once "nav.html";

$db = mysqli_connect('db', 'root', 'root', 'spotify');

$query = "SELECT name, poster FROM artists";
$result = mysqli_query($db, $query);
$artists = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "<h1>Artists :</h1>";

foreach ($artists as $artist){
    echo "Name : " . $artist['name'] . '<br>';
    echo "<img src='" . $artist['poster'] . "' width='400px'><br><hr>";
}

mysqli_close($db);