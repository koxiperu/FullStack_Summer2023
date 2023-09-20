Create a PHP script that will display the contents of a message.txt file line by line.
	   Separate each lines with a horizontal line.

       <?php

$file=fopen('message.txt','r');


 while(!feof($file)){
     $line=fgets($file);
     echo "$line<br><hr>";
 }
 ?>

 /////////////////////message.txt////////////////////////////////
 Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Consectetur quisquam perferendis dolorum! 
Maiores sed voluptas cum ea, corrupti debitis accusantium aliquam vitae blanditiis? 


Aut obcaecati voluptatum aperiam iusto doloremque perferendis?