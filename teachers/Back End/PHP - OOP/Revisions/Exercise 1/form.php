<html>
    <form method="post">
        <input type="text" placeholder="username" name="username">
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        <input type="submit" value="submit" name="submit">
    </form>
</html>

<?php
require 'UsersTable.php';

$userTable = new UsersTable();


if (isset($_POST['submit'])) {
    $errors = [];

    $username = '';
    $email = '';
    $password = '';

    if(empty($_POST['username']))
    {
        $errors['username'] = 'Username is mandatory';
    }else
    {
        $username = $_POST['username'];
    }

    if(empty($_POST['email']))
    {
        $errors['email'] = 'email is mandatory';
    }else
    {
        $email = $_POST['email'];
    }

    if(empty($_POST['password']))
    {
        $errors['password'] = 'password is mandatory';
    }else
    {
        $password = $_POST['password'];
    }
    if(empty($errors)) {
        $userTable->signUp($_POST);
    }else{
        foreach($errors as $key => $err)
        {
            echo "$key: $err<br>";
        }
    }

}
