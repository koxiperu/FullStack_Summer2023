<?php
require_once 'usersTable.php';
$newUser=new usersTable();
if (isset($_POST['sbtn'])){
    $err=[];
    $error='';
    if (empty($_POST['name'])){
    $err['name']='Username is mandatory!';
    };
    if (empty($_POST['password'])){
    $err['password']='Password is mandatory!';
    };

    if (empty($err)) {            
        $newUser->checkUser($_POST);
        if ($_SESSION['user']!=null) {
            header("Location: songs.php");
        }else{
            $error='<h3>Password or username are incorrect!</h3>';
        } 
    }
  
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
        <label for="password">Password: </label>
        <input type="password" name="password">
        <? if (!empty($err['password'])) echo $err['password']?>
        <hr>
        <input type="submit" name='sbtn' value="sign in">
    </form>
    <?if (!empty($error)) echo $error?>
</body>
</html>