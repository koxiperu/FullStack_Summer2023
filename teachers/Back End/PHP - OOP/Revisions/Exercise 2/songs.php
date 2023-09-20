<a href="addSongs.php"> add Song</a>
<?php

require "SongsTable.php";

$songsTable = new SongsTable();

$songs = $songsTable->getAllSongs();

foreach($songs as $song)
{
    echo $song->title."<br>";
    echo $song->genre."<br>";
    
    echo "<hr>";
}