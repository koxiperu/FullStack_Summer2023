<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="myform.php" method="GET"> -->
    <form method="POST">
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="submit" name="submitBtn">
    </form>
</body>

</html>

<?php
if (isset($_POST['submitBtn'])) {
    if (empty($_POST['name']))
        echo "Please enter a name";
    else if (empty($_POST['email']))
        echo "Please enter an email address";
    else
        echo "The form is valid !<br>Your name is " . $_POST['name'] . " and your email address is " . $_POST['email'] . ".";
}
?>