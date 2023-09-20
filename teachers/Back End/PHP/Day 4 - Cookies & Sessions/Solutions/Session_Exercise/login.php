<?php
session_start();

// Make sure button was clicked
if (isset($_POST['loginBtn'])) {
    $errors = false;

    // Check if email and password are not empty
    if (empty($_POST['email'])) {
        $errors = true;
        echo 'Email is mandatory<br>';
    }

    if (empty($_POST['password'])) {
        $errors = true;
        echo 'Password is mandatory<br>';
    }

    // If NO errors
    if (!$errors) {
        $_SESSION['email'] = $_POST['email'];
        header("Location: account.php");
    }
}

?>

<form method="POST">
    <input type="text" name="email" placeholder="Your email"><br>
    <input type="text" name="password" placeholder="Your password"><br>
    <input type="submit" name="loginBtn" value="Log in">
</form>