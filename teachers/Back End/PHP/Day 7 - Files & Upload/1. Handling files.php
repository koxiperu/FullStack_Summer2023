<?php

// HANDLING FILES

// Opening files
// 3 different functions to open files

// readfile(filename) opens file as read-only
$file1 = readfile('file.txt');

// file_get_contents(filename) same as readfile()
$file2 = file_get_contents('file.txt');
// We prefer this over readfile()

// fopen(filename, mode) 3 modes of control : r, w & a
$file3 = fopen('file.txt', 'r');
// r = read-only
// w = write
// a = append

// Read the content of a file
echo $file1 . "<br>";
echo $file2 . "<br>";
//echo $file3 . "<br>";
// instead we need
// feof(filename) checks if we are at the end of the file 
while (!feof($file3)) {
    // fgets(filename) retrieves the next unread line of the file
    $line = fgets($file3);
    echo "<p>$line</p>";
}

// To read a file content as an array
$file4 = file('file.txt');
foreach ($file4 as $line) {
    echo $line . '<br>';
}

// Writing in a file
// 2 ways of writing content

// fwrite($file, data)
//$file5 = fopen('file.txt', 'w'); // overwrite all content with new content
$file5 = fopen('file.txt', 'a'); // append new content
fwrite($file5, "I'm using PHP now !!\r\n");
// \r = return
// \n = line start

// file_put_contents(filename, data, flags)
// Overwrite all previous content
//file_put_contents('file.txt', "Different function this time.\r\n");
// Append new content
file_put_contents('file.txt', "Different function this time.\r\n", FILE_APPEND);

// Close the file
// When using fopen(), we need to call fclose() when we're done
fclose($file3);
fclose($file5);
// file_get_contents and file_put_contents already open and close the file for you
// Always close the door when leaving the room ;)

// Other functions
// feof() and fgets() as seen above
// file_exists(filename)
$isItHere = file_exists('file.txt');
var_dump($isItHere);