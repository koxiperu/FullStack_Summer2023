<?php
require_once 'TableManager.php';
require_once 'Genre.php';
class GenreTable extends TableManager
{
    public function getAllGenres()
    {
        $pdo = $this->pdo;
        $result = $pdo->query("SELECT * from genre");
        $genres = $result->fetchAll(PDO::FETCH_CLASS,'Genre');
        return $genres;
    }
}