<?php
require_once 'connection.php';
$connection=new Connect();
$user=Connect::getUsers();
foreach ($users as $user) {
echo 'Username:'.$user['username'].'<br>';
echo 'Email:'.$user['email'].'<br>';
echo 'Password:'.$user['password'].'<hr>';}
if (isset($_POST['submit'])){
$username = $_POST['username'];
$email = $_GET['email'];
$password = $_POST['pwd'];
$connection->insertUser($username,$email,$password);
}

?>

<h1>Add a new user : </h1>

<form method="post">
<input type="text" name="username" placeholder="Username"><input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
<input type="submit" value="Submit" name="submitBtn">
</form>