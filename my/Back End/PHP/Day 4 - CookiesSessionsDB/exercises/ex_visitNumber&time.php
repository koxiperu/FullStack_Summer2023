<?php

if (isset($_COOKIE['count'])){
        $count=$_COOKIE['count']+1;
        setcookie('count',$count,time()+60);        
    }
else {
    setcookie('count',1,time()+60);
    setcookie('firstVisit', date('d/m/Y H:i:s'),time()+60);
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
    <form method="POST">
        <input type="submit" name="reset" value="reset">
    </form>
    <?php
    //reset btn
    if (isset($_COOKIE['count'])) echo 'Number of times visited: ' .$_COOKIE['count']. '<br>';
    if (isset($_COOKIE['firstVisit'])) echo 'Date of first visit: ' .$_COOKIE['firstVisit']. '<br>';
    else echo "It`s first time of visiting<br>";
    if (isset($_POST['reset'])) {
        setcookie('count',1,time()-3600);
        unset($_COOKIE['count']);
        setcookie('firstVisit', date('d/m/Y H:i:s'),time()+60);
    };
    ?>
</body>
</html>