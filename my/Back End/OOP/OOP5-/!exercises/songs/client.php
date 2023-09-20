<?php

require "songsTable.php";

switch($_SERVER['REQUEST_METHOD'])
{
     case 'GET':
         if(!isset($_GET['id']))
         { 
             //$genres= $songsTable->getGenres();
             echo $songsTable->getAllSongs();
         }
         break;
    case 'POST':
        $songsTable = new songsTable();
        $content = file_get_contents('php://input');//$content fetchs the content of you request body.
        $content = json_decode($content,true);//Try var_dumping $content.
        $songsTable->addSong($content);
        echo $songsTable->getAllSongs();
        break;
    default: throw new Exception("Request method not recognised. wtf are you doing?!?");

}
