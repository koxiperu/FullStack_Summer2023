<?php
require_once 'usersTable.php';
require_once 'navbar.html';
$usersTable=new UsersTable();
if (isset($_GET['id'])){ 
    $userId=$_GET['id'];
    $userInfo=$usersTable->getUser($userId);
    ?>
    <div class="object">
        <div class="section">
            <p><?=$userInfo->id?></p>
            <p><strong><?=$userInfo->name?></strong></p>
            <p><?=$userInfo->email?></p>
            <p><?=$userInfo->password?></p>
            <p><?=$userInfo->birthyear?></p>
        </div>    
        <a href='home.php'>return</a>
    </div>
 <?php
}else {
    
    $users=$usersTable->getAll();
    foreach ($users as $u)
    :?>
    <div class="object">
        <div class="section">
            <p><strong><?=$u->name?></strong></p>
            <p><?=$u->email?></p>
        </div>    
        <p class='section'><?=$u->birthyear?></p>
        <a href='home.php?id=<?=$u->id?>'>Details</a>
        <a href='home-update.php?id=<?=$u->id?>'>Update</a>
        <a href='home-delete.php?id=<?=$u->id?>'>Delete</a>        
    </div>
 <?php endforeach;
}
    ?>
    