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
        <input type="text" name="name" id="">
        <input type="email" name="email" id="">
        <input type="submit" value="" name="submitBtn">
    </form>
</body>
</html>

<?php
if (isset($_POST['submitBtn'])){
    if (empty($_POST['name'])) echo 'Please neter a name.<br>';
    else if (empty($_POST['email'])) echo 'Please neter an email.<br>';
    else echo 'The form is valid <br> Your name is ' .$_POST['name']. ' and your email is ' .$_POST['email']. ' !';
}
?>