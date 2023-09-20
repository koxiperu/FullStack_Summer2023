<html>
    <form method="post">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <input type="submit" value="submit" name="submit">
    </form>
</html>

<?php
require 'UsersTable.php';

$userTable = new UsersTable();


if (isset($_POST['submit'])) {
    //var_dump($_SESSION['user']);
    $errors = [];

    $username = '';
    $password = '';

    if(empty($_POST['username']))
    {
        $errors['username'] = 'Username is mandatory';
    }else
    {
        $username = $_POST['username'];
    }


    if(empty($_POST['password']))
    {
        $errors['password'] = 'password is mandatory';
    }else
    {
        $password = $_POST['password'];
    }

    if(empty($errors)) {
        $userTable->signIn($_POST);
        if($_SESSION['user'] != null)
        {
            echo "You are logged in!";
        }else{
            echo "Username or password incorrect!";
        }
    }else{
        foreach($errors as $key => $err)
        {
            echo "$key: $err<br>";
        }
    }

}