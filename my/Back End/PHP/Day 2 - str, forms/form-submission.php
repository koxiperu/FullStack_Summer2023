<?php 
echo $_POST['name']; //$_smth - global variable
$name=$_POST['name'];
if (empty($name))
 echo 'Please enter a name';

 echo '<pre>';
 var_dump($_POST);
 echo '</pre>';
?>