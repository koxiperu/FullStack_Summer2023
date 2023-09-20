<?php
require_once 'UsersTable.php';
if (isset($_GET['id'])){
    
    $usersTable=new UsersTable();
    $nbPage = $_GET['id'];
    if (isset($_POST['sbtn'])){
        $user=new UsersTable();
        $message=$user->updateUser($nbPage, $_POST['name'], $_POST['email'], $_POST['age']); 
    };
    $uc=$usersTable->getUserById($nbPage);
    echo '<a href="users.php">Return to main page.</a>
    <h2>You are updating a user with ID '.$uc->id.'</h2><br>';
    ?>
    
<form method="POST">
    <label for="name">Name: </label>
    <input type="text" name="name" id="" value="<?=$uc->name?>">
    <label for="email">email: </label>
    <input type="text" name="email" id="" value="<?=$uc->email?>">
    <label for="age">Age</label>
    <input type="number" name="age" id="" value="<?=$uc->age?>">
    <input type="submit" name="sbtn" value="Update">
    <hr>
    <h3><?if (isset($message)) echo $message?></h3>
</form>
<?php

};
?>