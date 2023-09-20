<?php
//require_once "checking.php";


function checkinput($fileName){
    if (file_exists($fileName)) {
    $content = file_get_contents($fileName);
    echo 'Content:::: ' .$content;    
}else throw new Exception("File $fileName doesn't exist, try again.", 002);
}

$at=3;
while ($at>0)
{
    try {
        $fileName=readline('Input file-name: ');
        checkinput($fileName);
        $at=0;
    } catch (Exception $e) {
        echo $e->getMessage();
        $at--;
        if ($at==0) echo 'File failed!';
    }
}


?>
