<?php
/*
EXERCISE 3

CRUD = Create, Read, Update, Delete.

1. Create a database in MySQL with a table named "users". 
The table should have the following columns: 
- id (auto-increment)
- username
- email
- password

2. Create "index.php" and display a list of all data in the "users" table.

3. Add a form in "index.php" to create a new user.
The inputs should match the properties of the "users" table.

4. When recieving the form data, sanitize all values and validate the email using the appropriate filter.
The password field MUST be hashed before being inserted into the database.

5. If all the input values are valid, use them to create a new user in the table.

6. Add a button to each row in the user list that allows to edit or delete the different users.

7. When the edit button is clicked, the user should be taken to a new PHP file named "edit.php" 
that allows them to edit the username, email, and password.

8. When the delete button is clicked, the user should be deleted from the "users" table.

 */
?>
///////////////////////////////////////////////////////////////////////////////////////////////////7
//////////////////////////////   index.php   //////////////////////////////////////////////////////77
/////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
session_start();
if (isset($_POST['edit'])){
    $_SESSION['id']=$_POST['id'];
    header('Location: edit.php');
}
if (isset($_POST['delete'])){
    $_SESSION['id']=$_POST['id'];
    header('Location: delete.php');
}
require_once 'nav.php';
?>
<div style="margin:0 5%; padding:20px 5%; border-radius:20px; background-color:lightblue">
<h2>All users</h2>
<form method="POST">
    <label for="number">Number of users per page: </label>
    <input type="text" name="number" value="<?php if (isset($_POST['number'])) echo @$_POST['number']?>" id="">
    <input type="submit" name="sbtn" value="SET">    
</form>
<button style="margin:20px"><a href='/?page=1' style="text-decoration:none;color:darkgreen;font-weight:900;margin:20px;">Show</a></button>
<button style="margin:20px"><a href='create.php' style="text-decoration:none;color:darkgreen;font-weight:900;margin:20px;">Create new user</a></button>
<strong><div style='display:flex; flex-direction:row; flex-wrap:wrap; justify-content:left; align-items:center; gap:2%'>
    <p style="width:5%">ID</p>
    <p style="width:10%">Username</p>
    <p style="width:20%">Full name</p>
    <p style="width:23%">E-mail</p>
    <p style="width:15%">Password</p>
    <p style="width:15%">Edit/ Delete</p>
</div></strong>
<?php

if (isset($_GET['page'])){
    $nbPage=$_GET['page'];
}else $nbPage=0;

$usersNumber=5;
if ($nbPage>=1){    
    $db=mysqli_connect('db','root','root','registration');    
    $qu="SELECT COUNT(*) as nbUsers FROM users";
    $result=mysqli_query($db,$qu);
    $tN=mysqli_fetch_assoc($result); //one line
    $end=(ceil($tN['nbUsers']/$usersNumber)); 
    
    $start=($nbPage-1)*$usersNumber;    
    $qu="SELECT * FROM users LIMIT $start,$usersNumber"; 
    $result=mysqli_query($db,$qu);
    $users=mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($users as $u): ?>
        <div style='display:flex; flex-direction:row; flex-wrap:wrap; justify-content:left; align-items:center; gap:2%'>
            <p style="width:5%;overflow-wrap:break-word"><?=$u['id']?></p>
            <p style="width:10%;overflow-wrap:break-word"><?=$u['username']?></p>
            <p style="width:20%;overflow-wrap:break-word"><?=$u['firstname']?> <?=$u['lastname']?></p>
            <p style="width:23%;overflow-wrap:break-word"><?=$u['email']?></p>
            <p style="width:15%;overflow-wrap:break-word"><?=$u['password']?></p>
        
            <form method="post" style="width:5%; display:flex; flex-direction:row; gap:20px">
                <input type="hidden" name="id" value="<?=$u['id']?>">
                <input type="submit" name="edit" value="Edit" style="width:100%">
                <input type="submit" name="delete" value="Delete" style="width:100%">
            </form>
        </div>
    <?php endforeach;
};
if (isset($db)) mysqli_close($db);
?>
<div>
    <?php  if ($nbPage!=0) echo 'Page ' .$nbPage;?> 
    <button disabled="<?php echo ($nbPage<=1)?'true':'false'?>">
    <?php
    if ($nbPage<=1) echo "Back";
    else {
        $cp=$nbPage-1;
        echo "<a href='?page=$cp' style='color:darkgreen;font-weight:900; text-decoration:none'>Back</a>";
        
        };
        //echo $nbPage;
    ?>
    </button>
    
    <button disabled="<?php echo ($nbPage==$end)?'true':'false'?>">
    <?php 
    if ($nbPage==0)  echo "Next";
    else if ($nbPage==$end) echo "Next";
        else {
            $cp=$nbPage+1;
            echo "<a href='?page=$cp' style='color:darkgreen;font-weight:900;text-decoration:none'>Next</a>";
            
        };
        //echo $nbPage;
    ?>
    </button>
    
</div>
///////////////////////////////////////////////////////////////////////////////////////////////////7
//////////////////////////////////   nav.php   /////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////
<nav style="display: flex; flex-direction: row; justify-content: space-between; margin:20px 10%">
    
    <ul style="list-style:none; display:flex;flex-direction: row;gap:50px; font-size: 25px;">
        <li><a style="text-decoration: none;color:pink" href="index.php">Users</a></li>
        <li><a style="text-decoration: none;color:pink" href="create.php">Create</a></li>
        <li><a style="text-decoration: none;color:pink" href="edit.php">Edit</a></li>
    </ul>
</nav>
//////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////   create.php   ///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
if (isset($_POST['sbtn'])) {
    $errors = [];
    $fn = strip_tags(trim($_POST['fn']));
    $ln = strip_tags(trim($_POST['ln']));
    $un=strip_tags(trim($_POST['un']));
    $em = filter_var($_POST['em'], FILTER_SANITIZE_EMAIL);
    $psw = strip_tags(trim($_POST['psw']));
    //Validation
    if (empty($_POST['fn'])) $errors['fn'] = 'First name is mandatory !';
    else if (empty($fn)) $errors['fn'] = 'First name is incorrect!';
    if (empty($_POST['ln'])) $errors['ln'] = 'Last name is mandatory!';
    else if (empty($ln)) $errors['ln'] = 'Last name is incorrect!';
    if (empty($_POST['un'])) $errors['un'] = 'Username is mandatory!';
    else if (empty($un)) $errors['un'] = 'Username is incorrect.';
    if (empty($_POST['em'])) $errors['em'] = 'E-mail is mandatory!';
    else if (!str_contains($_POST['em'], '@')) $errors['em'] = 'E-mail must contain @-sign.';
        else if (!str_contains($_POST['em'], '.')) $errors['em'] = 'E-mail must contain . sign';
            else if (!filter_var($em, FILTER_VALIDATE_EMAIL)) $errors['em'] = 'E-mail is incorrect!';
    if (empty($_POST['psw'])) $errors['psw'] = 'Password is mandatory!';
    else if (empty($psw)) $errors['psw'] = 'Password is incorrect!';
    $hashedPsw=password_hash($psw, PASSWORD_DEFAULT);
    if (empty($errors)) {
        $db=mysqli_connect('db','root','root','registration');
        $newUser="INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$fn','$ln', '$un', '$em', '$hashedPsw')";
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
<div style="margin:0 5%; padding:20px 5%; border-radius:20px; background-color:lightblue">
<h1 style="text-align:center">Register form</h1>
<form method="POST" style="background-color:white; margin:20px 20%; padding:20px; border-radius:20px; text-align:center;display:flex; flex-direction:column;justify-content:left; align-items:center;gap:20px">

    <div style="margin:10px auto">
        <label for="fn" style="font-size:20px">First name: </label>
        <input type="text" name="fn" value="<?php if (isset($fn)) echo @$fn?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['fn']))
            echo $errors['fn'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="ln" style="font-size:20px">Last name: </label>
        <input type="text" name="ln" value="<?php if (isset($ln)) echo @$ln?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['ln']))
            echo $errors['ln'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="un" style="font-size:20px">Username: </label>
        <input type="text" name="un" value="<?php if (isset($un)) echo @$un?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['un']))
            echo $errors['un'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="em" style="font-size:20px">E-mail: </label>
        <input type="text" name="em" value="<?php if (isset($em)) echo @$em?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['em']))
            echo $errors['em'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="psw" style="font-size:20px">Password: </label>
        <input type="password" name="psw" value="<?php if (isset($psw)) echo @$psw?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['psw']))
            echo $errors['psw'];
        ?>
    </div>
    <input type="submit" value="add user" name="sbtn" style="margin:10px auto;font-size:20px;padding:5px; border-radius:10px; background-color:blue; color:white">
</form>
</div>

<?php 
if (isset($mes)) echo $mes;
?>    
</body>
</html>
////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////   delete.php   /////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
session_start();
if (isset($_SESSION['id'])) {
    $mes=$_SESSION['id'];
    $db=mysqli_connect('db','root','root','registration');
    $getUser= "DELETE FROM users
    WHERE id= $mes";
    $result=mysqli_query($db,$getUser);
    header('Location: index.php');
    echo "$mes Deleted";
    
}
mysqli_close($db);
?>
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////   edit.php   /////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
session_start();

if (isset($_SESSION['id'])) {
    $mes=$_SESSION['id'];
    $db=mysqli_connect('db','root','root','registration');
    $getUser= "SELECT * FROM users
    WHERE id= $mes";
    $result=mysqli_query($db,$getUser);
    $res = mysqli_fetch_assoc($result);
    $fn=$res['firstname'];
    $ln=$res['lastname'];
    $un=$res['username'];
    $em=$res['email'];
    $psw=$res['password'];
}else{
    header('Location: edit.php/?page=1');
};
if (isset($_GET['page'])){
        echo "<h1>You have to choose the user to edit</h1>
        <a href='index.php' style='text-decoration:none; background-color:lightblue; padding:20px; margin:50px; border-radius:10px'>Choose the user</a>";
    };
 


if (isset($_POST['sbtn'])) {
    $errors = [];
    $fn = strip_tags(trim($_POST['fn']));
    $ln = strip_tags(trim($_POST['ln']));
    $un=strip_tags(trim($_POST['un']));
    $em = filter_var($_POST['em'], FILTER_SANITIZE_EMAIL);
    $psw = strip_tags(trim($_POST['psw']));
    //Validation
    if (empty($_POST['fn'])) $errors['fn'] = 'First name is mandatory !';
    else if (empty($fn)) $errors['fn'] = 'First name is incorrect!';
    if (empty($_POST['ln'])) $errors['ln'] = 'Last name is mandatory!';
    else if (empty($ln)) $errors['ln'] = 'Last name is incorrect!';
    if (empty($_POST['un'])) $errors['un'] = 'Username is mandatory!';
    else if (empty($un)) $errors['un'] = 'Username is incorrect.';
    if (empty($_POST['em'])) $errors['em'] = 'E-mail is mandatory!';
    else if (!str_contains($_POST['em'], '@')) $errors['em'] = 'E-mail must contain @-sign.';
        else if (!str_contains($_POST['em'], '.')) $errors['em'] = 'E-mail must contain . sign';
            else if (!filter_var($em, FILTER_VALIDATE_EMAIL)) $errors['em'] = 'E-mail is incorrect!';
    if (empty($_POST['psw'])) $errors['psw'] = 'Password is mandatory!';
    else if (empty($psw)) $errors['psw'] = 'Password is incorrect!';
    $hashedPsw=password_hash($psw, PASSWORD_DEFAULT);
    if (empty($errors)) {
        $db=mysqli_connect('db','root','root','registration');
        $newUser="UPDATE `users`
        SET `firstname`='$fn', `lastname`='$ln', `username`='$un', `email`='$em', `password`='$hashedPsw' 
        WHERE id=$mes";
        $result=mysqli_query($db,$newUser);        
        $message="<h1 style='text-align:center; color:green'>The user $un was updated in DB.</h1><br>"; 
    }
};
mysqli_close($db);

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
<div style="margin:0 5%; padding:20px 5%; border-radius:20px; background-color:lightblue">
<h1 style="text-align:center">Edit user</h1>
<form method="POST" style="background-color:white; margin:20px 20%; padding:20px; border-radius:20px; text-align:center;display:flex; flex-direction:column;justify-content:left; align-items:center;gap:20px">

    <div style="margin:10px auto">
        <label for="fn" style="font-size:20px">First name: </label>
        <input type="text" name="fn" value="<?php if (isset($fn)) echo @$fn?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['fn']))
            echo $errors['fn'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="ln" style="font-size:20px">Last name: </label>
        <input type="text" name="ln" value="<?php if (isset($ln)) echo @$ln?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['ln']))
            echo $errors['ln'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="un" style="font-size:20px">Username: </label>
        <input type="text" name="un" value="<?php if (isset($un)) echo @$un?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['un']))
            echo $errors['un'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="em" style="font-size:20px">E-mail: </label>
        <input type="text" name="em" value="<?php if (isset($em)) echo @$em?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['em']))
            echo $errors['em'];
        ?>
    </div>
    <div style="margin:10px auto">
        <label for="psw" style="font-size:20px">Password: </label>
        <input type="password" name="psw" value="<?php if (isset($psw)) echo @$psw?>" style="height:30px; border-radius:10px;">
        <?php if (isset($errors['psw']))
            echo $errors['psw'];
        ?>
    </div>
    <input type="submit" value="change" name="sbtn" style="margin:10px auto;font-size:20px;padding:5px; border-radius:10px; background-color:blue; color:white">
</form>
</div>

<?php 
if (isset($message)) echo $message;
?>    
</body>
</html>


