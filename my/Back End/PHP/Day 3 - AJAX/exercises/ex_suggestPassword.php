/*
-- Exercise 4 :

Write a function that will :
	- Take a "length" integer as an argument, it's default value will be 8
	- Using that argument, create a random password of given length
	Use $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; as a list of characters to pick from


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
        <label for="num">Input number of letters in password</label>
<input type="text" name="num" value="<?php echo @$_POST['num']?>">
<button type="submit" name="calc">suggest password</button>
    </form>
    
</body>

</html>
<?php

    if (isset($_POST['calc'])){
        $len=$_POST['num'];
        echo "suggest you [" .sug($len). '] as a password';
    }
    function sug($ln){
        $str="";
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $length=strlen($chars);
        for ($i=0; $i<$ln; $i++){
            $str.=$chars[rand(0,$length-1)];
        } 
        return $str;
    }
?>
