<?php
//Pagination

//used to display different data nd create "pages" (no new file)
$nbPage=1;
//to use pagination, GET method
//for example: songs.php?page=1;
if (isset($_GET['page'])){
    $nbPage=$_GET['page'];
}
echo "I'm on page number: $nbPage";
/*
//get the first 3 songs
SELECT * FROM songs LIMIT 0, 3
//get the next 3 songs
SELECT * FROM songs LIMIT 3, 3

*/
?>