<?php
session_start();
require_once 'nav.php';
$totalPrice = 0;
$cart = $_SESSION['cart'];
?>

<h1>Cart</h1>

<?php
if ($cart) {
    foreach ($cart as $book): ?>
        <p>
            <strong>
                Title :
                <?= $book['title'] ?>
            </strong><br>
            Price :
            <?= $book['price'] ?> € <br>
            Qty :
            <?= $book['qty'] ?>
        </p>
        <?php
        $totalPrice += $book['price'] * $book['qty'];
    endforeach;
} else {
    echo "<h3>Empty cart...</h3>";
} ?>

<hr>
<p>Total :
    <?= $totalPrice; ?> €
    <a href="./remove-cart.php"><button>Empty cart</button></a>
</p>