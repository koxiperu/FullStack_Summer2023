/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Copy the code from Michel supermarket exercise.
	    - Calculates the sum of Michel's expenses (already done)
	3.2
	Write a function that will:
	- Take an array as input
	- Calculate the sum of the expenses of the array
	- return the sum
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
        <label for="num1">Salad</label>
<input type="text" name="num1" value="<?php echo @$_POST['num1']?>"><br>
<label for="num2">Tomato</label>
<input type="text" name="num2" value="<?php echo @$_POST['num2']?>"><br>
<label for="num3">Ognion</label>
<input type="text" name="num3" value="<?php echo @$_POST['num3']?>"><br>
<label for="num4">Ice-cream for the soul saving</label>
<input type="text" name="num4" value="<?php echo @$_POST['num4']?>"><br>
<button type="submit" name="calc">total expenses</button>
    </form>
    
</body>

</html>
<?php
    if (isset($_POST['calc'])){
       for ($i=1;$i<=4;$i++){
        $arr[$i-1]=$_POST['num'.$i];
       }
     echo expenses($arr);
    }
    
function expenses($ar, $total=0){
    foreach ($ar as $val)
   $total+=$val;
   echo "Total $total<br>";
}
?>

