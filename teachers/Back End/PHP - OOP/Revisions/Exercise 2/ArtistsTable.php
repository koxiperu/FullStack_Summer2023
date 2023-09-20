<?php
require_once 'TableManager.php';
require_once 'Artist.php';
class ArtistsTable extends TableManager
{
    public function getAllArtists()
    {
        $pdo = $this->pdo;
        $result = $pdo->query("SELECT * FROM artists");
        $songs = $result->fetchAll(PDO::FETCH_CLASS,'Artist');
        return $songs;
    }
}