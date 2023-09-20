
/*
    Create two pages :

    `create-cookie.php`
        The page will initialize a cookie 'viewed' to `true`;

    `get-viewed.php`
        The page will display a message 'You have visited the page.
create-cookie ', if the 'viewed' cookie is assigned.

Otherwise, it will display the message 'You have not visited
the create-cookie page '.

    To navigate from one page to another, you will need to change the URL manually (localhost:8000/get-viewed.php)
*/
////////////////////////create-cookie.php/////////////////
<?php
setcookie('viewed',true, time()+60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Very important information, that you should read.</h1>
</body>
</html>

///////////////////////////////get-viewed.php//////////////////////
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if (isset($_COOKIE['viewed'])) echo "<p>You visited the page create-cookie.<br></p>";
else echo "<p>You have NOT visited the page create-cookie. <br></p>"; 
?>
    <h1><a href="create-cookie.php">Visit create-cookie page</a></h1>
</body>
</html>