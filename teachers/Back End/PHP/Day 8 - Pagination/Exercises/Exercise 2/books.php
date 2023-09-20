<?php

$nbPage = 1;

if (isset($_GET['page']))
    $nbPage = $_GET['page'];

$howManyPerPage = 2;

$db = mysqli_connect('db', 'root', 'root', 'book_shop');

// Retrieve books
$query = "SELECT id, title, price
FROM books
LIMIT 0, $howManyPerPage";
$result = mysqli_query($db, $query);
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($db);

require_once 'nav.php';

echo "<h1>Books List</h1>";

echo $msg;

foreach ($books as $book): ?>
    <p>
        <strong>Title : </strong>
        <?= $book['title']; ?>
    </p>

    <p>
        <strong>Price : </strong>
        <?= $book['price']; ?>
    </p>

    <form method="post">
        <input type="hidden" name="id" value="<?= $book['id']; ?>">
        <input type="hidden" name="title" value="<?= $book['title']; ?>">
        <input type="hidden" name="price" value="<?= $book['price']; ?>">
        <input type="submit" name="addToCart" value="Add to cart">
    </form>

    <hr>
<?php endforeach; ?>