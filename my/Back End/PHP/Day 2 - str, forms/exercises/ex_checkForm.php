<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<form action="form-submission.php" method="POST"> sent input-type-name-->
        
    <form method='POST' style="background-color:lightblue; margin:20px 20%; padding:20px; border-radius:20px; text-align:center;box-shadow:0 0 20px blue">
    <h1>Sign-in so we could get data for hacking your bank account °_°</h1>
        <input type="text" value="<?php echo @$_POST['fn']?>" name="fn" id="" placeholder="first name"> <br><br>
        <input type="text" value="<?php echo @$_POST['ln']?>" name="ln" id="" placeholder="last name"><br><br>
        <input type="text" value="<?php echo @$_POST['email']?>" name="email" id="" placeholder="e-mail"><br><br>
        <input type="password" name="password" id="" placeholder="password"><br><br>
        <input type="password" name="confirm" id="" placeholder="password"><br><br>
        <div>
        <label for="subscribe">Do you want a spam?</label>
        <input type="checkbox" name="subscribe" id=""></div>
        <input type="submit" name="submitBtn">
    </form>
</body>
</html>
<?php
if (isset($_POST['submitBtn'])){
    if (empty($_POST['fn'])) echo '<p style="color:red">Please neter your first name.<br></p>';
    else if (empty($_POST['ln'])) echo '<p style="color:red">Please neter your last name.<br></p>';
         else {
            if (!strpos($_POST['email'], '@')) echo '<p style="color:red">Invalid e-mail. It must contain "@"-symbol!<br></p>';
            else if (strlen($_POST['email'])<8) echo '<p style="color:red">Invalid e-mail. It must have at least 8 symbols! <br></p>';
                 else if (strlen($_POST['email'])>50) echo '<p style="color:red">Invalid e-mail. It must be shorter than 50 symbols<br></p>';
                      else if(strlen($_POST['password'])<8) echo '<p style="color:red">Password must contain min 8 symbols.<br></p>';
                           else if ($_POST['password']!=$_POST['confirm']) echo '<p style="color:red">Password and confirmation password are not the same!<br></p>';
                                else {
                                    echo '<h2 style="color:green; text-align:center">Dear ' .$_POST['fn']. ' ' .$_POST['ln'].', we know your password [' .$_POST['password']. '], and you ';
                                    if (!empty($_POST['subscribe'])) echo ' want ';
                                    else echo ' don´t want ';
                                    echo ' to be subscribe on our spam!</h2>'; 
                                    $_POST['fn']="";
                                    $_POST['ln']="";
                                }
        }   
}
?>

