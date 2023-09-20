<form method="POST" enctype="multipart/form-data">
    <input type="file" name="myFile" id="">
    <input type="submit" value="submit" name="sbtn">
</form>
<?php
//UPLOADING files
if (isset($_POST['sbtn'])){
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';
    $tmpName=$_FILES['myFile']['tmp_name'];
    $filePath='uploads/' .date('H_i_s'). '_' .$_FILES['myFile']['name'];
    //move uploaded file (file temporary name, destination)
    move_uploaded_file($tmpName, $filePath);
}
?>