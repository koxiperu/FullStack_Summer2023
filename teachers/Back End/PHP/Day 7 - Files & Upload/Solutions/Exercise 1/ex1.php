<?php
if(file_exists("message.txt")){
// open message.txt in read-only (we don't need more)
$file = fopen('message.txt', 'r');

// repeat until the end of the file
while (!feof($file)) {
    echo fgets($file) . "<br><hr>"; // display each line
}

// close the file when we're done
fclose($file);

// Other solution
$file = file('message.txt');
foreach ($file as $line) {
    echo "$line<br><hr>";
}

}