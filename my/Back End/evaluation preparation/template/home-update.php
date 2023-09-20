<?php
require_once 'UsersTable.php';
require_once 'navbar.html';
if (isset($_GET['id'])){
    $nbPage = $_GET['id'];
    $user=new UsersTable();
    $uc=$user->getUser($nbPage);
    if (isset($_POST['sbtn'])){
        
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
        if (empty($err)){
        $userData=array(
            'name'=>$_POST['name'],
            'id'=>$nbPage,
            'email'=>$_POST['email'],
            'birthyear'=>$_POST['birthyear'],
            'password'=>$_POST['password']
        );
        $message=$user->updateUser($userData);      
    };
    
    echo '<h2>You are updating a user with ID '.$uc->id.'</h2><br>';
        }
    
    ?>
<form method="POST" class='section'>
        <div>
            <label for="name">Username: </label>
            <input type="text" name="name" value="<?=$uc->email?>">
            <? if (!empty($err['name'])) echo $err['name']?>
        </div>
        <div>
            <label for="email">E-mail: </label>
            <input type="email" name="email" value="<?=$uc->email?>">
            <? if (!empty($err['email'])) echo $err['email']?>
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" value="<?=$uc->password?>">
            <? if (!empty($err['password'])) echo $err['password']?>
        </div>
        <div>
            <label for="birthyear">Year of birth: </label>
            <input type="number" name="birthyear" value="<?=$uc->birthyear?>">
            <? if (!empty($err['birthyear'])) echo $err['birthyear']?>
        </div>
        <input type="submit" name='sbtn' value="update">
        <?if (!empty($error)) echo $error?>
    </form>
<?php

};
?>