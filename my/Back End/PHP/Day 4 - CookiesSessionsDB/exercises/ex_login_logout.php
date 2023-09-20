<?php
/*	Let's assume you have an online shopping website.

	Step 1 :
		Create a 'login.php' file.
		This file should contain a form asking form : email and password. 

	Step 2 :
		Once the user submit the register form, you have to :
			- Check if email & password are not empty.
			- Open a session.
			- In this session, save the email adress.

	Step 3:
		Create a page 'account.php'.

		If a user is trying to access that page :
			- Check if the user loggued in before 
			- If he's not log-in you need to redirect to the register page.
			- If he logged-in, display 'Hello, username. Email address : '.

		To redirect in php : Look for header('location : ....') on google

    Step 4 : 
		
		Add a 'logout' button.
		When the user click, the user should be redirected to the login page and should now be log out.


 */
?>
///////////////////////////////////index.php/////////////////////////////
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="un" id=""><br>
        <input type="password" name="psw" id=""><br>
        <input type="submit" name="btn" value="submit"><br>
        <?php
            if (isset($_POST['btn'])) {
                $cond1=empty($_POST['un']);
                $cond2=empty($_POST['psw']);
                if ($cond1) echo 'Invalid username<br>';
                if ($cond2) echo 'Invalid password.<br>';
                if (!$cond1 and !$cond2) {
                    $_SESSION['email']=$_POST['un'];
                    echo "<br>You're loged in.<br>";
                    echo "<a href='acount.php'>redirect to page</a>";
                }
            }
?>

    </form>
</body>
</html>

/////////////////////////acount.php//////////////////////////////////////////
<?php
session_start();
if (isset($_SESSION['email'])) {
    $name=explode('@',$_SESSION['email']);
    if (isset($_POST['btnback'])) {
        session_destroy();
        header("location:index.php");
    } else echo "Hello " .$name[0]. " with the e-mail adress " .$_SESSION['email']. "!<br>"; 
       
}else{
    echo "<p>You're not loged in. Follow the link below to log in.</p><a href='index.php'>Redirect</a>";
}
?>
<hr>
<form method="POST">
           <input type="submit" name="btnback" value="log out"><br>
</form>