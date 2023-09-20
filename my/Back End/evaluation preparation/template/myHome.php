<?php
session_start();
require_once 'usersTable.php';
require_once 'navbar.html';
$usersTable=new UsersTable;
$users=$usersTable->getMyData($_SESSION['user']->id);
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
?>