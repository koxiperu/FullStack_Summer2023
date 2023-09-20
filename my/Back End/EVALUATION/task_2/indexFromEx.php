<?php
//renaimed for not to mix with index.php for derictory-navigation file.
//Check imported file-names!!!
require_once 'connect.php';
//check how to create object of the class!!!
$connection=new Connect();
//get results of function - like that!!!
$users=$connection->getUsers();
//Check the names of your arrays!!!
foreach ($users as $user) {
        echo 'Username: '.$user['username'].'<br>';
        echo 'Email: '.$user['email'].'<br>';
        echo 'Password: '.$user['password'].'<hr>';}
        //God, please, check names of you variables, arrays,names  and buttons!!!
        if (isset($_POST['submitBtn'])){ 
                $username = $_POST['username'];
                //POST everywhere, why GET?????
                $email = $_POST['email'];
                $password = $_POST['password'];
                $connection->insertUser($username,$email,$password);
        }
?>

<h1>Add a new user : </h1>

<form method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Submit" name="submitBtn">
</form>