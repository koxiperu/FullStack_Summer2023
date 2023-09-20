<?php
require_once "UsersTable.php";
?>
 <a href="users-add.php" style="border-radius:10px; padding:5px;">Add new user</a>
 <a href="users.php" style="border-radius:10px; padding:5px;">Home</a>
 <h1> All users</h1>
 <?php
$usersTable=new UsersTable();


if (isset($_GET['id'])){
    $nbPage = $_GET['id'];
    $uc=$usersTable->getUserById($nbPage);
    echo '
    <h2>You choose a user '.$uc->name.'</h2><br>';
}else {
    $users=$usersTable->getAllUsers();
    foreach ( $users as $u ) {
        ?>
        <div>
        <?=$u->name?> is <?=$u->age?> years old and has email <?=$u->email?>
        <a href='users-update.php?id=<?=$u->id?>' style="background-color:pink; margin:10px; border-radius:10px; padding:5px;">Update</a>
        <a href='users-delete.php?id=<?=$u->id?>' style="background-color:orange; margin:10px;border-radius:10px; padding:5px;">delete</a>
        <a href='users.php?id=<?=$u->id?>' style="background-color:lightgreen; margin:10px;border-radius:10px; padding:5px;">Show detailes</a>
         </div>
    <hr>
<?php }

}
?>
