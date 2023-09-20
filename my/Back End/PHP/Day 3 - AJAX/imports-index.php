<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Import a file -> stop the script if problem-->
    <?php require 'nav.html'; ?>
    <!-- Import a file "...php include '';... " -> warning of problem -->

    <h2>Include page</h2>
    <?php
    $var3=' Noel ';
    //_once means import the file just one time. If it`s already imported it won`t do it again
    require_once 'variables.php';
    echo $var1;
    ?>
</body>
</html>
////////////////////////////nav.html////////////////////////////////////
<nav>
    <ul>
        <li>Home</li>
        <li>Portfolio</li>
        <li>About</li>
        <li>Contact</li>
    </ul>
</nav>

////////////////////////////variables.php//////////////////////////////////
<?php
$var1=' Mark ';
$var2=20;
echo $var3;
?>