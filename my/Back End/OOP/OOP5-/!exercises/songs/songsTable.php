<?php
require_once 'SongClass.php';
require_once 'connection.php';
class SongsTable extends Connect {
    private $pdo;
    public function __construct()
    {
       $this->pdo = $this->getPdo();
    }

    public function getAllSongs(){
        $results = $this->pdo->query("SELECT * FROM songs");
        $songs = $results->fetchAll(PDO::FETCH_CLASS,'Song');
        return json_encode($songs);

    }
    public function addSong($dataArray)
    {
        var_dump($dataArray);
        try{
        $stmt = $this->pdo->prepare("INSERT INTO songs (name, genre) VALUES (:name, :genre)");
        $stmt->bindParam(':name',$dataArray['name']);
        $stmt->bindParam(':genre',$dataArray['genre']);
        $stmt->execute();
        }
        $lastInsertedId= $this->pdo->lastInsertId();
        if ($lastInsertedId) {
            echo "New song with ID $lastInsertedId inserted successfully!";
        } else {
            echo "Failed to insert a new song!";
        }
    }
    // public function getGenres(){
    //     $stmt = $this->pdo->query("SHOW COLUMNS FROM songs WHERE Field = 'genre'");
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return explode("', '", $row);
    // }

}
?>