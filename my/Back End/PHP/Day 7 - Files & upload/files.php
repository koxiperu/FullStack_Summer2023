<?php
//HANDLING FILES
//opening files - 3 functions:
//1. readfile(filename) opens file as read-only
//$file1=readfile('file.txt');

//2. file_get_contents('file.txt') same as readfile()
//$file2=file_get_contents('download.jpeg');

//3. fopen(filename, mode) 3 modes of control r (read only),w (write) and a (append)
$file3=fopen('file.txt','r');

//read the content 
//echo $file2 .'<br>';
//instead $file3 we need 
 while(!feof($file3)){
     $line=fgets($file3);
     echo "<p>$line</p> ";
 }

//to read a file content as an array
// $file4=file('file.txt');
// foreach($file4 as $line){
//     echo $line .'<br>';
// }

//writing in a file
//2 way of writing content

//fwrite($file,data)
//$file5=fopen('file.txt','w'); //this will overwrite all content with new content
$file5=fopen('file.txt','a'); //this will append new content
fwrite($file5, "<h1>I dont understand this beutiful language!</h1>\r\n");
// \r = return
// \n = line start

//file_put_contents(filename, data, flags);
//file_put_contents('file.txt', "Different function this time. \r\n");
//append new comment
file_put_contents('file.txt', "Different function this time. \r\n", FILE_APPEND);

//close the file
//when using fopen() we need to call fclose() when we're done
fclose($file3);
fclose($file5);
//file_get_contents and file_put_contents already open and close the file for you
//always close the door when leaving the room

//other functions
//feof(), fgets() as seen above
//before doing everything, check if the file there
$isItHere=file_exists('file.txt');
var_dump($isItHere);
?>