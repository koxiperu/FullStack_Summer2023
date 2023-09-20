<?php

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


*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	if (isset($_POST['btn'])){
		$email = $_POST['usr'];
		if (strpos($email, '@'))
			echo '<p style="color:green">valid email</p>';
		else
			echo '<p style="color:red">not valid</p>';
	}
	?>
	<form method="POST">
		<input type="text" name="usr">
		<input type="password" name="pwd">
		<input type="submit" name="btn">
	</form>
</body>
</html>

