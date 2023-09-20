
/*
- Exercise 1

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    "The first number is higher" (if the first number is higher than the second number)
    "The first number is smaller" (if the first number is smaller than the second number)
    "The two numbers are identical" (if the two numbers are equal)
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
        <label for="num1">First number</label>
<input type="text" name="num1" value="<?php echo @$_POST['num1']?>"><br>
<label for="num2">Second number</label>
<input type="text" name="num2" value="<?php echo @$_POST['num2']?>"><br>
<button type="submit" name="calc">compare</button>
    </form>
    
</body>

</html>
<?php
    if (isset($_POST['calc'])){
      compare($_POST['num1'],$_POST['num2']);
    }
    
    function compare($x,$y){
        if ($x==$y) echo 'The two numbers are identical<br>';
        else if ($x<$y) echo 'The first number is smaller<br>';
             else echo 'The first number is higher<br>';
    
    }
    
?>





