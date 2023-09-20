<?php

$filename = 'last_access.log';
if (file_exists($filename)) {

    // prepare new content
    // set proper timezone
    date_default_timezone_set("Europe/Luxembourg");
    // get current time to HH-mm-ss format
    $time = date('H-i-s');
    // create message
    $content = "Access file : $time \n";


    // Using fwrite()
    // open last_access.log
    $file = fopen($filename, 'c');

    // write the message at the end of the file
    fwrite($file, $content);

    // close file when done
    fclose($file);


    // Using file_put_contents()
    file_put_contents($filename, $content, FILE_APPEND);
}