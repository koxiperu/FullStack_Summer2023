<form method="POST">
    <input type="text" name="firstname" placeholder="First name">
    <input type="text" name="lastname" placeholder="Last name">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirmPassword" placeholder="Confirm password">
    <input type="submit" name="submitBtn">
</form>

<?php
// register.php

if (isset($_POST['submitBtn'])) {
    $firstName = strip_tags(trim($_POST['firstname']));
    $lastName = strip_tags(trim($_POST['lastname']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = strip_tags(trim($_POST['password']));
    $confirmPassword = strip_tags(trim($_POST['confirmPassword']));

    $errors = [];

    if (empty($firstName))
        $errors[] = "First name is required!<br>";
    if (empty($lastName))
        $errors[] = "Last name is required!<br>";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors[] = "Not a valid email address!<br>";
    if (empty($password))
        $errors[] = "Password is required!<br>";
    if ($password !== $confirmPassword)
        $errors[] = "Passwords are not matching!<br>";

    if ($errors) {
        foreach ($errors as $error) {
            echo $error;
        }
    } else {
        // Hash password before sending to the DB
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $db = mysqli_connect('db', 'root', 'root', 'register_exercise');
        $query = "INSERT INTO users(id, firstname, lastname, email, password) VALUES(id, '$firstName', '$lastName', '$email', '$hashedPassword')";
        $result = mysqli_query($db, $query);
        if ($result)
            echo "Insert successful !";
        else
            echo "Failed to insert new user...";
        mysqli_close($db);
    }
}