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
        $str=$_POST['number'];
        echo '"' .$str. '" is ' .polindrome($str);
    }
    function polindrome($str){
        $revstr=strrev($str);
        if ($revstr==$str) return " a polyndrome";
         else return " NOT a polyndrome";
      

      //$len=strlen($str);
      //for($i=0;$i<$len/2; $i++){
        //if ($str[$i]!==$str[$len-$i]){
            //return false;
        //}
      //}
      //return true;
        }
?>