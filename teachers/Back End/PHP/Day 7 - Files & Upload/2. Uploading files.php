<form method="POST" enctype="multipart/form-data">
    <input type="file" name="myFile">
    <input type="submit" name="submitBtn">
</form>

<?php
// UPLOADING FILES

if (isset($_POST['submitBtn'])){
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';

    $tmpName = $_FILES['myFile']['tmp_name'];
    $filePath = 'uploads/' . date('H_i_s_') . $_FILES['myFile']['name'];
    // move_uploaded_file(file temporary name, destination)
    move_uploaded_file($tmpName, $filePath);
}