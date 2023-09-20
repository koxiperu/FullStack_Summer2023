<?php

$totalBooks = 0;
foreach ($_SESSION['cart'] as $book)
    $totalBooks += $book['qty'];
?>

<nav>
    <a href="./books.php"><button>Books</button></a>
    <a href="./cart.php"><button>Cart
            <?= $totalBooks; ?>
        </button></a>

</nav>