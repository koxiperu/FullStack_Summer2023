<?php
// setcookie(name, value, duration)
setcookie('username', 'johndoe', time()+60); // will last 60 seconds

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

?>
<a href="cookies.php">Read the cookie !</a>