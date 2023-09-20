<?php
/*

    EXERCISE 2 :

    - Step 1 : 
    Edit 'books.php' page. It will use pagination and show 2 books per page.
    For each book, add a button/link 'add to cart'.
    When you click on the button, it should add the book to the cart.

    - Step 2 :
    Create 'nav.php'.
    It will contain links to go from "books.php" to "cart.php".
    You should be able to see, in the nav, the number of books inside your cart.
    When you add a book to the cart, it should update this number.

    - Step 3 : 
    Create 'cart.php' page.
    Display every books from your cart and display total price.
    If cart is empty display a message "your cart is empty".

    - Step 4 :
    Create 'remove-cart.php'. It will empty all books added to your cart.
    Add a button that will empty the cart in 'cart.php'.
    When cart clearing is done, redirect the user to 'cart.php' automatically.
    You don't have to add 'nav.php' in this page since it will never be displayed, just used in the background.

*/

// Cart must be an array
//$_SESSION['cart'] = array();

// Example : 
//$_SESSION['cart'] = [
//    ['title' => 'Harry potter', 'price' => 12],
//    ['title' => 'LOTR', 'price' => 15],
//];
?>

////////////////////////////////////  books.html  ////////////////////////////////////
<?php
session_start();
$_SESSION['quantity'];

if (isset($_POST['addToCart'])){                
    $q=1;
    $repeat=false;
    $title=$_POST['title'];
    $price=$_POST['price']; 
    $id=$_POST['id'];               
    if (isset($_SESSION['quantitity'])) {
        $_SESSION['quantity']+=$q;
        for ($i=0;$i<count($_SESSION['cart']);$i++){
            if ($_SESSION['cart'][$i][0]==$id){
                $_SESSION['cart'][$i][3]+=1;
                $_SESSION['total']+=$price;
                $repeat=true;                            
            };
        };                              
    }else { 
        array_push($_SESSION['cart'],[$id, $title,$price, 1]);
        $_SESSION['total']+=$price;
        $_SESSION['quantity']+=$q;
       
    };
                //  echo '<pre>';
                //  var_dump($_SESSION['cart']);
                //  echo '</pre>';
};
$nbPage = 1;
$msg="";
if (isset($_GET['page']))
    $nbPage = $_GET['page'];

$db = mysqli_connect('db', 'root', 'root', 'book_shop');
$howManyPerPage=2;
$query = "SELECT COUNT(*) as total FROM books";
$result = mysqli_query($db, $query);
$books = mysqli_fetch_assoc($result);
$totalPages = $books['total'] / $howManyPerPage;

// Retrieve books
$start = $howManyPerPage * ($nbPage - 1);
$query = "SELECT id, title, price
FROM books
LIMIT $start, $howManyPerPage";
$result = mysqli_query($db, $query);
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($db);

$previous = $nbPage - 1;
$next = $nbPage + 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php require_once 'nav.php'; ?>

    <h1>Books List</h1>

    <?= $msg; ?>

    <?php foreach ($books as $book): ?>

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
            <!-- <button type="submit" name="addToCart"><a href="http://localhost:8000/cart.php" style="text-decoration:none; color:black">Add to Cart</a></button>             -->
            
        </form>        
        <hr>
        
    <?php 

    endforeach; ?>

    <div style="display:flex; flex-direction:row; gap:10px">
    <?php 
    if ($nbPage > 1) echo "<a href='?page=$previous'><button>Previous</button></a><br>";
    else echo "<a href='?page=$previous'><button disabled='true'>Previous</button></a><br>";
    if ($nbPage < $totalPages) echo "<a href='?page=$next'><button>Next</button></a><br>";
    else echo "<a href='?page=$previous'><button disabled='true'>Next</button></a><br>";
    ?>
    </div>
</body>
</html>
<?php
?>
//////////////////////////////////////   nav.php   ////////////////////////////////////////////

<a href="books.php" style="text-decoration:none; font-weight:900; font-size:20px;margin:0 50px">Home</a>
<a href="cart.php" style="text-decoration:none; font-weight:900; font-size:20px">My Cart (<?= (isset($_SESSION['quantity']))?$_SESSION['quantity']:0?>)</a>



////////////////////////////////////   cart.php   ///////////////////////////////////////////////
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'nav.php'; ?>

    <h1>My cart</h1>
    <?php 
if (isset($_SESSION['empty'])) {
    session_destroy();
    echo "<h3>Your cart is empty.</h3><br>";
}else{
if (isset($_SESSION['quantity'])) {
    $number=$_SESSION['quantity'];
    foreach($_SESSION['cart'] as $c): ?>
    <div style="display:flex; flex-direction:row;gap:10%">
    <div>
        <p>
            <strong>Title : </strong><?= $c[0]; ?>
        </p>
        <p>
            <strong>Price: </strong><?= $c[1]; ?>
        </p>
    </div>
    <p>
            <strong>Qty: </strong><?= $c[2]; ?>
        </p>
        <form method="POST">
            <input type="submit" value="Delete" name="del">
        </form>
    </div>
        <hr>
    <?php endforeach;
    
    echo "<h3>Total price is: ".$_SESSION['total']. "eur. </h3>";
} else {
    echo "Your cart is empty.<br>";
};
};
?>
<button name="addToCart"><a href="http://localhost:8000/remove-cart.php" style="text-decoration:none; color:black">Empty the cart</a></button>
</body>
</html>

//////////////////////////////   remove-cart.php   /////////////////////////////////////////

<?php
session_start();
        $_SESSION['cart']=[];
        $_SESSION['quantity']=0;
        $_SESSION['total']=0;
        header('location: cart.php');        

?>




