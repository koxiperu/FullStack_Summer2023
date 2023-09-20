
/* 
-- Exercise 1 :
	
	1.1 : 
	Create a new page with a basic connection form with email and password input.

	1.2 :
	Get the click of the button.

	1.3 :
	Check if the mail contains the '@' symbol. 
	If yes, display 'valid email';
	If no, display 'invalid email';

	To do this you have to check for "str_pos" function !

	1.4 :
	When the user validates the form: display a message in red if invalid, show in green if valid.

*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<form action="form-submission.php" method="POST"> sent input-type-name-->
    <form method='POST'>
        <input type="text" name="email" id="">
        <input type="password" name="password" id="">
        <input type="submit" value="" name="submitBtn">
    </form>
</body>
</html>

<?php
if (isset($_POST['submitBtn'])){
    if (empty($_POST['email'])) echo 'Please neter an email.<br>';
    else if (strpos($_POST['email'], '@')) echo '<p style="color:green">Valid email.<br></p>';
         else echo '<p style="color:red">Invalid email:(</p>';
}
?>
