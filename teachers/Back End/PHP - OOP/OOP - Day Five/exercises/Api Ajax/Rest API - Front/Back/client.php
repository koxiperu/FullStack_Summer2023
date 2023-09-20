<?php

require_once "./Song.php";

$songObject = new Song();

// echo "<pre>";
// var_dump($json);
// echo "</pre>";

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        //Your code here
        $songs = $songObject->getAllSongs();
        echo json_encode($songs);
        break;
    case 'POST':
        //$content fetchs the content of you request body.
        $content = file_get_contents('php://input');
        $content = json_decode($content, true);
        echo $songObject->addSong($content);
        break;
    default:
        throw new Exception("Request method not recognised. wtf are you doing?!?");
}