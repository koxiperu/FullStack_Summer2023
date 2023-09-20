<?php
/*
EXERCISE 2

Creating a registration form, a login form, and storing the user data in a MySQL database.
1.
    Create a database and a table in MySQL: 
    You will need to create a database and a table to store the user's registration data.
    The table should have columns for the user's name, email, password, and any other relevant
    information you want to collect.

2. 
    Create a registration form: Create an HTML form that collects the user's name,
    email, and password. Make sure to use the POST method and submit the form to a PHP script.

3.
    Create a PHP script to process the registration form: Create a PHP script that 
    will validate the user's input and insert it into the MySQL database. 
    You will need to use the mysqli functions to connect to the database and insert the data.

4.
    Create a login form: Create an HTML form that collects the user's email and password.
    Make sure to use the POST method and submit the form to a PHP script.

5.
    Create a PHP script to process the login form: Create a PHP script that will 
    check if the user's email and password match the ones stored in the MySQL database.
    If they match, set a session variable to indicate that the user is logged in.

6.
    Display the user data: Create a PHP script that will display the user's data after
    they log in. You can use the session variable to retrieve the user's data from the MySQL
    database and display it in an HTML table.
*/
?>
////////////////////////////////////////////////////////////////////////////////////////////////7
//////////////////////////////   index.php   ///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
<?php
$db=mysqli_connect('db','root','root','registration');
$qU="SELECT username, password FROM users";
$res=mysqli_query($db,$qU);
$users=mysqli_fetch_all($res, MYSQLI_ASSOC);
mysqli_close($db);
if (isset($_POST['signinBtn'])) {
    $message = "<h1 style='color:red'>Not valid login or password</h1>";
    $mes=0;
    $e=true;
    $errors=[];     

    $user = $_POST['username'];
    $password = $_POST['password'];
    foreach ($users as $us){
        if($user==$us['username'] and $password==$us['password']) {
            $mes=1;
            $e=false;
        }else if($user==$us['username']){
            $errors['password']="<h1 style='color:red'>Incorrect password</h1>";
            $e=false;
            }
        };
    if ($e) $errors['username']="<h1 style='color:red'>Incorrect username</h1>";
}
if (isset($mes) and $mes==1) {    
    session_start();
    $_SESSION['user']=$user;
    header('Location: user.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once 'nav.php'; ?>
    <form method="post" style="background-color:lightblue; margin:20px 20%; padding:20px; border-radius:20px; text-align:center;box-shadow:0 0 20px blue;display:flex; flex-direction:column;justify-content:center; align-items:center;gap:20px">
    <h1>If you signed up, please enter username and password to enter. </h1>
    <div style="margin:10px auto">
    <label for="username">Username: </label>
        <input type="text" name="username" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['username']))
            echo $errors['username'];
        ?>
        </div>
        <div style="margin:10px auto">
<label for="password">Password: </label>
        <input type="password" name="password" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['password']))
            echo $errors['password'];
        ?>
</div>
        <input type="submit" name="signinBtn" value="Sign In" style="margin:10px auto;font-size:20px;padding:5px; border-radius:10px; background-color:blue; color:white">
    </form>
    
 <?php
//  echo '<pre>';
//  var_dump($users);
//  echo '</pre>';
 ?>
</body>
</html>

/////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////   sign_up.php   /////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////7
<?php
if (isset($_POST['sbtn'])) {
    $errors = [];

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $un=$_POST['un'];
    $em = $_POST['em'];
    $psw = $_POST['psw'];
    $cpsw = $_POST['cpsw'];

    //Validation
    if (empty($fn)) $errors['fn'] = 'First name is mandatory !';
    if (empty($ln)) $errors['ln'] = 'Last name is mandatory!';
    if (empty($un)) $errors['un'] = 'Username is mandatory!';
    if (empty($em)) $errors['em'] = 'E-mail is mandatory!';
    else if (!str_contains($em, '@')) $errors['em'] = 'E-mail must contain @-sign.';
    if (empty($psw)) $errors['psw'] = 'Password is mandatory!';
    else if ($psw != $cpsw) $errors['psw'] = 'Password must match!';

    //Only if NO errors
   
}
if (isset($_POST['sbtn'])){
    if (empty($errors)) {
        $db=mysqli_connect('db','root','root','registration');
        $newUser="INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$fn','$ln', '$un', '$em', '$psw')";
        $result=mysqli_query($db,$newUser);
        mysqli_close($db);
        $mes="<h1 style='text-align:center; color:green'>$un, you have been registered in our database. Gongratulations!</h1><br>"; 
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once 'nav.php'; ?>
<form method="POST" style="background-color:lightgreen; margin:20px 20%; padding:20px; border-radius:20px; text-align:center;box-shadow:0 0 20px green;display:flex; flex-direction:column;justify-content:center; align-items:center;gap:20px">
<h1>Register form</h1>
    <div style="margin:10px auto">
        <label for="fn" style="font-size:20px">First name: </label>
        <input type="text" name="fn" value="<?php echo @$_POST['fn']?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['fn']))
            echo $errors['fn'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="ln" style="font-size:20px">Last name: </label>
        <input type="text" name="ln" value="<?php echo @$_POST['ln']?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['ln']))
            echo $errors['ln'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="ln" style="font-size:20px">Username: </label>
        <input type="text" name="un" value="<?php echo @$_POST['un']?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['un']))
            echo $errors['un'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="em" style="font-size:20px">E-mail: </label>
        <input type="text" name="em" value="<?php echo @$_POST['em']?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['em']))
            echo $errors['em'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="psw" style="font-size:20px">Password: </label>
        <input type="password" name="psw" value="<?php echo @$_POST['psw']?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['psw']))
            echo $errors['psw'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="cpsw" style="font-size:20px">Confirm password: </label>
        <input type="password" name="cpsw" value="<?php echo @$_POST['cpsw']?>" style="height:30px; border-radius:10px;">
    </div>
    <input type="submit" value="Sign Up" name="sbtn" style="margin:10px auto;font-size:20px;padding:5px; border-radius:10px; background-color:green; color:white">
</form>
<?php 
if (isset($mes)) echo $mes;
?>    
</body>
</html>

/////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////   user.php   //////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
<?php
session_start();
require_once 'nav.php';
$uname=$_SESSION['user'];
$db=mysqli_connect('db','root','root','registration');
$qU="SELECT firstname, lastname, email, password FROM users WHERE username='$uname'";
$res=mysqli_query($db,$qU);
$user=mysqli_fetch_all($res, MYSQLI_ASSOC);
mysqli_close($db);
//  echo '<pre>';
//  var_dump($users);
//  echo '</pre>';
?>

<div style="background-color:lightblue; margin:20px 20%; padding:20px; border-radius:20px; text-align:center;box-shadow:0 0 20px blue;display:flex; flex-direction:column;justify-content:center; align-items:center;gap:20px">
<h1 style='color:green'> Welcome to our site, <?php if (isset($uname)) echo $uname?>!</h1>

<p><strong>Full name: </strong><?php echo $user[0]['firstname']?> <?php echo $user[0]['lastname']?></p>
<p><strong>Email: </strong><?php echo $user[0]['email']?> </p>
<!-- <p>Last visit: </p> -->
</div>


//////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////   nav.php   ////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
<nav style="display: flex; flex-direction: row; justify-content: space-between; margin:20px 10%">
    
    <ul style="list-style:none; display:flex;flex-direction: row;gap:20px; font-size: 25px;">
        <li><a style="text-decoration: none;" href="index.php">Sign IN</a></li>
        <li><a style="text-decoration: none;" href="sign_up.php">Singn UP</a></li>
    </ul>
</nav>
