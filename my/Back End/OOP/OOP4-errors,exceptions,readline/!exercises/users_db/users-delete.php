<?php
require_once 'UsersTable.php';
if (isset($_GET['id'])){    
    $usersTable=new UsersTable();
    $nbPage = $_GET['id'];
    echo '<a href="users.php">Return to main page.</a><br>';
    echo $usersTable->deleteUser($nbPage); 
    };
    
?>