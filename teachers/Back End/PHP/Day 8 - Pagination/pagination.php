<?php
// Pagination

// Used to display different data and create "pages" (not a new file).

$nbPage = 1;

// To use pagination, GET method is our friend
// for example : songs.php?page=1

if (isset($_GET['page'])){
    $nbPage = $_GET['page'];
}

echo "I'm on page number : $nbPage";

/*
// Get the first 3 songs
SELECT * FROM songs LIMIT 0, 3

// Get the next 3 songs
SELECT * FROM songs LIMIT 3, 3
*/