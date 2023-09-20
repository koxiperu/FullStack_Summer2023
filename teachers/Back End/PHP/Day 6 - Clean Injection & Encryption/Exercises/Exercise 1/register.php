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

if(isset($_POST['submitBtn'])){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $errors = [];

    if (empty($firstName))
        $errors[] = "First name is required!<br>";
    if (empty($lastName))
        $errors[] = "Last name is required!<br>";
    if (empty($email))
        $errors[] = "Email is required!<br>";
    if (empty($password))
        $errors[] = "Password is required!<br>";
    if (!str_contains($email, '@'))
        $errors[] = "No @ in email address!<br>";
    if ($password !== $confirmPassword)
        $errors[] = "Passwords are not matching!<br>";

    if ($errors){
        foreach($errors as $error){
            echo $error;
        }
    } else {
        $db = mysqli_connect('db', 'root', 'root', 'register_exercise');
        $query = "INSERT INTO users(id, firstname, lastname, email, password) VALUES(id, '$firstName', '$lastName', '$email', '$password')";
        $result = mysqli_query($db, $query);
        if ($result)
            echo "Insert successful !";
        else
            echo "Failed to insert new user...";
        mysqli_close($db);
    }
}