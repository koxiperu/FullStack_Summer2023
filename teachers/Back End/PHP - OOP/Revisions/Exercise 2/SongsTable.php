<?php
require_once 'Song.php';
require_once 'TableManager.php';
class SongsTable extends TableManager
{
    public function getAllSongs()
    {
        $pdo = $this->pdo;
        $result = $pdo->query("SELECT songs.title as title, songs.id, genre.name as genre FROM songs INNER JOIN genre ON songs.genre_id = genre.id");
        $songs = $result->fetchAll(PDO::FETCH_CLASS,'Song');
        return $songs;
    }

    public function getMySongs()
    {
        $pdo = $this->pdo;
        $session = $_SESSION['user']['id'];
        $result = $pdo->query("SELECT songs.title as title, songs.id as id, genre.name as genre FROM songs INNER JOIN songs.genre_id on genre.id WHERE id = $session");
        $songs = $result->fetchAll(PDO::FETCH_CLASS,'Song');
        return $songs;
    }

    public function addSong($data)
    {
        var_dump($_SESSION);
        $pdo = $this->pdo;
        $prep = $pdo->prepare("INSERT INTO songs(title, release_date, genre_id, artist_id, user_id) values(:title, :release_date, :genre_id, :artist_id, :user_id)");
        $prep->bindParam(':title', $data['title']);
        $prep->bindParam(':release_date', $data['release_date']);
        $prep->bindParam(':genre_id', $data['genre_id']);
        $prep->bindParam(':artist_id', $data['artist_id']);
        $prep->bindParam(':user_id',$_SESSION['user']['id']);
        if($prep->execute()){
            echo "new Song added succesfull";
        }else{
            echo "failed to add song";
        }
    }
}