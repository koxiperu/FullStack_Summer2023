

<?php
if (isset($_POST['sbtn'])) {
    $errors = [];

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $em = $_POST['em'];
    $psw = $_POST['psw'];
    $cpsw = $_POST['cpsw'];

    //Validation
    if (empty($fn))
        $errors['fn'] = 'First name is mandatory !';

    if (empty($ln))
        $errors['ln'] = 'Last name is mandatory!';
    if (empty($em)) $errors['em'] = 'E-mail is mandatory!';
    else if (strpos($em, '@')<0) $errors['em'] = 'E-mail must contain @-sign.';
    if (empty($psw)) $errors['psw'] = 'Password is mandatory!';
    else if ($psw != $cpsw) $errors['psw'] = 'Password must match!';

    //Only if NO errors
   
}

?>


<form method="POST" style="background-color:rgb(233, 199, 243); border-radius:20px; box-shadow:0 0 20px grey; margin:10px 30%; display:flex; flex-direction:column; justify-content:center; text-align:center">
<h1 style="text-shadow:0 0 3px grey">Register form</h1>
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
    <input type="submit" value="Sign Up" name="sbtn" style="margin:10px auto;font-size:20px;padding:5px; border-radius:10px; background-color:violet;">
</form>

<?php
if (isset($_POST['sbtn'])){
    if (empty($errors)) {
        $db=mysqli_connect('db','root','root','registration');
        $newUser="INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES ('$fn','$ln', '$em', '$psw')";
        $result=mysqli_query($db,$newUser);
        mysqli_close($db);
        echo "<h1 style='text-align:center'>$fn, you have been registered in our database. Gongratulations!</h1><br>"; 
    }
};

?>