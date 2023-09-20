/*
-- Exercise 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
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
<input type="text" name="num1">
<input type="text" name="num2">
<button type="submit" name="calc">multiplication</button>
    </form>
    
</body>

</html>
<?php
    if (isset($_POST['calc'])){
        if (empty($_POST['num1']) and empty($_POST['num2'])) echo 'Input at least 1 number<br>';
        else if (empty($_POST['num1'])) echo multipl($_POST['num2']);
             else if (empty($_POST['num2'])) echo multipl($_POST['num1']);
                  else {
                    echo multipl($_POST['num1'],$_POST['num2']);
                  }
    }
    function multipl($x=1,$y=1){
        return $x*$y;
    }
    

?>