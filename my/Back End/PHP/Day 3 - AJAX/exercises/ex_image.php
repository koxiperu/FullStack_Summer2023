<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='POST'>
        <label for="num1">Text</label>
<input type="text" name="num1" value="<?php echo @$_POST['num1']?>"><br>
<button type="submit" name="calc">show img-tag</button>
    </form>
    
</body>

</html>
<?php
    if (isset($_POST['calc'])){
      echo htmlImages($_POST['num1']);
    }
    
    function htmlImages($src){
        $newstr="<xmp><img src='$src.jpg'></xmp>";
        return $newstr;
    }
    
?>

