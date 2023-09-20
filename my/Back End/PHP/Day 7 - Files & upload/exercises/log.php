Create a script that saves in the 'last_access.log' file the timestamp of this time (now).

	Everytime someone access the page you should write 'Access file : xx-xx-xx' at the end of the file 
	(with hours minutes and seconds)

	Choose the right setting to open the file.


<h1>This page</h1>
<?php
$date=date('y-m-d H:i:s');
file_put_contents('last_acess.log', "Access file: $date \r\n", FILE_APPEND);
$file=fopen('last_acess.log','a');
fwrite($file, "Access file: $date\r\n" );
fclose($file);
?>

////////////////////last_acess.log//////////////////////////////
Access file: 23-07-13 09:48:12 
Access file: 23-07-13 09:48:12