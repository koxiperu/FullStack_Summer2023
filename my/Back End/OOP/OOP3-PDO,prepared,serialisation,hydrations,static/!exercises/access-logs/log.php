<?php
class Utility{
    public static function displayMessage(){
        $message = date('Y-m-d H:i:s') . " - Acessing file\r\n";
        $file = fopen('log_file.log', 'a');

    if (fwrite($file, $message)) echo 'Ok';
    else echo 'log failed';

    fclose($file);

    //file_put_contents('log_file.log', $message, FILE_APPEND);
    }
}
?>