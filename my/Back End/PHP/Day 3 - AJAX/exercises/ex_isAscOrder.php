-- Exercise 2 : 
	Write a function 'isOrdered' that :
		- Take one array as argument
		- Checks if the elements of the arrays are ordered in ascending order.
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='POST'>
        <label for="num">Input several numbers, separated " "</label>
<input type="text" name="num" value="<?php echo @$_POST['num']?>">
<button type="submit" name="calc">is asc?</button>
    </form>
    
</body>

</html>
<?php
    if (isset($_POST['calc'])){
        $array=explode(' ',$_POST['num']);
        echo "the array is " .asc($array);
    }
    function asc($arr){
        $newArr=$arr;
        sort($newArr);
        if ($newArr==$arr) return ' in ascending order';
        else return ' in NOT ascending order';
        }
?>

