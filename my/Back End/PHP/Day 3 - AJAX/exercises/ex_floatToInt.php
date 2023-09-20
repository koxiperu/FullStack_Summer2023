/*

-- Exercise 1 :

	Write a function that : 
		- Take one float $x as argument
		- Get the integer part of a positive number ($x)
		- Return this integer part

	Example :
		integerPart(5.26) // return 5
		integerPart(10.76) // return 10
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
        <label for="num">Input float</label>
<input type="text" name="num" value="<?php echo @$_POST['num']?>">
<button type="submit" name="calc">make int</button>
    </form>
    
</body>

</html>
<?php
    if (isset($_POST['calc'])){
        $a=$_POST['num'];
        echo convert($a);
    }
    function convert($x){
        return (int)$x;       //intval($x)

      //$len=strlen($str);
      //for($i=0;$i<$len/2; $i++){
        //if ($str[$i]!==$str[$len-$i]){
            //return false;
        //}
      //}
      //return true;
        }
?>