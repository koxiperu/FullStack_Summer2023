/*
-- Exercise 3 :

Write a function that will :
	- Take an array of integers as an argument
	- Return the average of all the numbers in the array

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
        <label for="num">Input several numbers <br>, separated " "</label>
<input type="text" name="num" value="<?php echo @$_POST['num']?>">
<button type="submit" name="calc">average</button>
    </form>
    
</body>

</html>
<?php
    if (isset($_POST['calc'])){
        $array=explode(' ',$_POST['num']);
        echo "the average is " .averag($array);
    }
    function averag($arr){
        $sum=0;
        for ($i=0; $i<count($arr);$i++){
          $sum+=$arr[$i];
        }
        return $sum/count($arr);
        }
?>

