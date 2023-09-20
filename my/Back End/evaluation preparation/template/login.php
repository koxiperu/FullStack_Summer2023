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
        $loginedUser=$newUser->checkUser($_POST);
        if ($_SESSION['user'] != null) {
            header("Location: myHome.php");
        }else{
            $error='<h3>Password or username are incorrect!</h3>';
        } 
    }
  
}
  
?>
<html>
<main>
    <?php require_once 'navbar.html'?>
    <form method="POST" class="section">
        <div>
            <label for="name">Username: </label>
            <input type="text" name="name" value="<? if (isset($_POST['name'])) echo $_POST['name']?>">
        <? if (!empty($err['name'])) echo $err['name']?>
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password">
        <? if (!empty($err['password'])) echo $err['password']?>
        </div>
        <input type="submit" name='sbtn' value="sign in">
        <?if (!empty($error)) echo $error?>
    </form>
    
</main>
</html>