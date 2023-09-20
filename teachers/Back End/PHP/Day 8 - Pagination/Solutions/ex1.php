<?php
// EXERCISE 1

$nbPage = 1;
if (isset($_GET['page']))
    $nbPage = $_GET['page'];

$songsPerPage = 3;
$start = $songsPerPage * ($nbPage - 1);

$db = mysqli_connect('db', 'root', 'root', 'spotify');

if($db){
    // Retrieve songs
    $query = "SELECT title, release_date FROM songs LIMIT $start, $songsPerPage";
    $result = mysqli_query($db, $query);
    $songs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Get total number of pages
    $query = "SELECT COUNT(*) as nbSongs FROM songs";
    $result = mysqli_query($db, $query);
    $queryResult = mysqli_fetch_assoc($result);
    $totalPages = $queryResult['nbSongs'] / $songsPerPage;
}

mysqli_close($db);
?>

<h1>Songs list</h1>

<?php foreach($songs as $song): ?>
    <p>
        <strong>Title : </strong><?= $song['title']; ?>
    </p>
    <p>
        <strong>Release date : </strong><?= $song['release_date']; ?>
    </p>
    <hr>
<?php endforeach;

$previous = $nbPage - 1;
$next = $nbPage + 1;

// Only show if page is 2 or more
if ($nbPage > 1)
    echo "<a href='?page=$previous'><button>Previous</button></a><br>";

// Show until we reach last page
// If $totalPages = 3.0000001 we still need a 4th page to display all the content
if ($nbPage < $totalPages)
    echo "<a href='?page=$next'><button>Next</button></a><br>";