<?php

session_start();
$msg = '';

// Add to cart
if (isset($_POST['addToCart'])) {
    $bookTitle = $_POST['title'];
    $bookPrice = $_POST['price'];
    $bookId = $_POST['id'];
    if (!empty($bookTitle) && !empty($bookPrice)) {
        // Prepare the book to be added to the Cart
        $bookToAdd = [
            'title' => $bookTitle,
            'price' => $bookPrice,
            'qty' => 1
        ];

        // Check if the book is already in the cart
        if (isset($_SESSION['cart'][$bookId])) {
            // If yes, edit the quantity (+1) in the cart
            $_SESSION['cart'][$bookId]['qty'] += 1;
        } else {
            // If not, push the book in the cart
            $_SESSION['cart'][$bookId] = $bookToAdd;
        }

        $msg = 'Added to cart!';
    }
}

$nbPage = 1;

if (isset($_GET['page']))
    $nbPage = $_GET['page'];

$howManyPerPage = 2;
$start = $howManyPerPage * ($nbPage - 1);

$db = mysqli_connect('db', 'root', 'root', 'book_shop');

// Retrieve books
$query = "SELECT id, title, price FROM books LIMIT $start, $howManyPerPage";
$result = mysqli_query($db, $query);
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Get the total number of pages
$query = "SELECT COUNT(*) as nbBooks FROM books";
$result = mysqli_query($db, $query);
$queryResult = mysqli_fetch_assoc($result);
$totalPages = $queryResult['nbBooks'] / $howManyPerPage;

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
<?php endforeach;

$previous = $nbPage - 1;
$next = $nbPage + 1;
if ($nbPage > 1)
    echo "<a href='?page=$previous'><button>Previous</button></a>";

if ($nbPage < $totalPages)
    echo "<a href='?page=$next'><button>Next</button></a>";