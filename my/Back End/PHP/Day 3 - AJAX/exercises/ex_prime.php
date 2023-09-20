/*
-- Exercise 6

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='POST'>
<input type="text" name="number">
<button type="submit" name="calc">analyse</button>
    </form>
    
</body>

</html>
<?php
    if (isset($_POST['calc'])){
        $a=$_POST['number'];
        echo $a. ' is ' .prime($a);
    }
function prime($x){
    $pr=0;
  for ($i=1;$i<=$x;$i++)  {
if ($x%$i==0) $pr+=1;
  }
  if ($pr==2 or $pr==1) return 'Prime';
  else return 'NOT prime';
}

?>