<?php
require_once 'usersTable.php';
if (isset($_POST['sbtn'])) {
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
        $res=$newUser->addUser($content);
        if($res) $error='<h3>New user was registered successffully</h3>';
        else $error='<h3>Connection failed. Try later again.</h3>';
}
}
    
?>
<html>
<main>
    <?php require_once 'navbar.html'?>
    <form method="POST" class='section'>
        <div>
            <label for="name">Username: </label>
            <input type="text" name="name" value="<? if (isset($_POST['name'])) echo $_POST['name']?>">
            <? if (!empty($err['name'])) echo $err['name']?>
        </div>
        <div>
            <label for="email">E-mail: </label>
            <input type="email" name="email" value="<? if (isset($_POST['email'])) echo $_POST['email']?>">
            <? if (!empty($err['email'])) echo $err['email']?>
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" >
            <? if (!empty($err['password'])) echo $err['password']?>
        </div>
        <div>
            <label for="birthyear">Year of birth: </label>
            <input type="number" name="birthyear" value="<? if (isset($_POST['birthyear'])) echo $_POST['birthyear']?>">
            <? if (!empty($err['birthyear'])) echo $err['birthyear']?>
        </div>
        <input type="submit" name='sbtn' value="register">
        <?if (!empty($error)) echo $error?>
    </form>
</main>
</html>