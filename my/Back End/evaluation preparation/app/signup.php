<?php
require_once 'usersTable.php';
if (empty($_POST['name'])){
    $err['name']='Username is mandatory!';
};
if (empty($_POST['email'])){
    $err['email']='Email is mandatory!';
};
if (empty($_POST['password'])){
    $err['password']='Password is mandatory!';
};
if (empty($_POST['birthyear'])){
    $err['birthyear']='Birthyear is mandatory!';
};
if (empty($err)) {
    $content=array(
        'name'=> $_POST['name'],
        'email'=> $_POST['email'],
        'password'=> $_POST['password'],
        'birthyear'=> $_POST['birthyear'],
    );
    $newUser=new usersTable();    
    $newUser->addUser($content);
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'navbar.html'?>
    <form method="POST">
        <label for="name">Username: </label>
        <input type="text" name="name" value="<? if (isset($_POST['name'])) echo $_POST['name']?>">
        <? if (!empty($err['name'])) echo $err['name']?>
        <hr>
        <label for="email">E-mail: </label>
        <input type="email" name="email" value="<? if (isset($_POST['email'])) echo $_POST['email']?>">
        <? if (!empty($err['email'])) echo $err['email']?>
        <hr>
        <label for="password">Password: </label>
        <input type="password" name="password" >
        <? if (!empty($err['password'])) echo $err['password']?>
        <hr>
        <label for="birthyear">Year of birth: </label>
        <input type="number" name="birthyear" value="<? if (isset($_POST['birthyear'])) echo $_POST['birthyear']?>">
        <? if (!empty($err['birthyear'])) echo $err['birthyear']?><hr>
        <input type="submit" name='sbtn' value="register">
    </form>
</body>
</html>