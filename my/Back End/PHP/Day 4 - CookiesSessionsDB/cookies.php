<?php
//set cookie name, value
setcookie('username', 'johndoe', time()+60);
echo'<pre>';
var_dump($_COOKIE);
echo '</pre>';
?>
<a href="cookies.php">Read the cookie</a>

/////////////////////////////////////////
cookies.php
-----------------------------------------
//$_COOKIE is an associative array where the key is the cookie name
<?php
echo "Username: " .$_COOKIE['username'];
?>

/////////////////////////////////////////
