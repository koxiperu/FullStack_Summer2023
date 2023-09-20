<?php
require_once "navbar.html";
if (isset($_GET['id'])){
    $nbPage = $_GET['id'];
}else $nbPage=1;
?>
<a href="artists.php?id=1">show all artists</a>
<a href="artists.php?id=2">show my artists</a>
<a href="artists.php?id=3">add new artist</a>