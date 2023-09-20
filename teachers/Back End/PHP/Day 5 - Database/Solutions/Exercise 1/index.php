<?php
require_once 'nav.html';
$conn = mysqli_connect('db', 'root', 'root', 'spotify');

$query = "SELECT title FROM songs ORDER BY release_date DESC LIMIT 3";

$result = mysqli_query($conn, $query);
$songs = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($conn);

?>
<h1>Home page</h1>
<h3>Welcome to my beautiful website</h3>

<h4>Latest songs : </h4>
<?php foreach ($songs as $song): ?>

    <p>
        <strong>Title : </strong>
        <?= $song['title']; ?>
    </p>
    <hr>

<?php endforeach; ?>