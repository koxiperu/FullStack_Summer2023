<?php
// Step 3 : Add a reset button
// Reset btn
if (isset($_POST['resetBtn'])){
    // Remove the cookie from the cookie file (permanent)
    setcookie('count', 1, time() -3600);

    // Remove the cookie from the array
    unset($_COOKIE['count']);
}

// check if my cookie exists
if (isset($_COOKIE['count'])){
    // We have to increment
    $count = $_COOKIE['count'] + 1;
    setcookie('count', $count, time()+60);
    echo 'Number of time visited : ' . $_COOKIE['count'] . '<br>';
    echo 'Date of first visit : ' . $_COOKIE['first_visit'] . '<br>';
} else {
    // It's the first visit : initialize to 1
    setcookie("count", 1, time()+60);
    setcookie("first_visit", date("d/m/Y H:i:s"), time()+60);
    echo "First time visiting the page !<br>";
    // time() returns the current timestamp
    // date() returns the current date/time
} ?>

<form method="POST">
    <input type="submit" name="resetBtn" value="Reset">
</form>
