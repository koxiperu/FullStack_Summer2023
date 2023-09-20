<?php

/*
    REMINDER : 
    To navigate in the console:
        "ls" : displayes everything in current directory.
        "cd" : Navigate to a specified directory.
        "php *filename.php* : Run the php script.

    
    For this exercise, you should use PHP in console.
	You can use readline() function to expect an input from the user.
	https://www.php.net/manual/fr/function.readline.php

	- Part 1
		A program asks the user for a file name.
		For now, the program does nothing else.
	- Part 2
		Now, when the user enters the name of the file, the program will read this file and then display the content. "file_get_contents()"  
		You must handle the case where the file does not exist (part 3).
	- Part 3
		In case the file does not exist, give the user an additional chance to enter a new file name.
		The user has 3 chances for enter a valid filename.

*/
function readAFile($filename)
{
    if (file_exists($filename))
    {
        $content = file_get_contents($filename);
        echo "Content of the file : $content";
    } else {
        throw new Exception ("File '$filename' does not exist");
    }
}

//Call read a file function
$chances = 3;

while($chances > 0)
{
    try{
        $filename = readline("Filename ? \r\n");
        readAFile($filename);
        $chances = 0;
    } catch(Exception $e)
    {
        echo $e->getMessage();
        $chances--;

        if($chances == 0)
            echo "Too many incorrect attempts";
    }
}