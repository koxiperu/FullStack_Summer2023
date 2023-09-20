<?php
require_once "navbar.html";
require_once "songsTable.php";
$s = new SongsTable();
if (isset($_GET['id'])){
    $nbPage = $_GET['id'];
    
} else {
    $s = new SongsTable();
    $songs = $s->allSongs();
};

?>
<a href="songs.php">show all songs</a>
<a href="songs.php?id=1">show my songs</a>
<a href="songs-add.php">add new song</a>
<?
//$theOne = $manager->findId(4);

// foreach ( $flowers as $flower ) {
//     echo $flower['name'] .' costs '.$flower['price']. '$<br>
// 	<a href="flowers_detail.php?page=' .$flower['id']. '">See more details</a>';
// 	echo '<br>***********<br>';
// }
foreach ( $songs as $song ) 
    :?>
<div>
    <p> <?=$song->title?> (<em><?=$song->artist_id?></em>)</p>
    <p><?=$song->release_date?></p>
</div>
<a href="songs.php?page=<?=$song->id?>">See more details</a>';
<a href="songs.php?id=3<?=$song->id?>">Update</a>';
<a href="songs.php?id=0<?=$song->id?>">Delete</a>';
<hr>
<?php endforeach;
?>
