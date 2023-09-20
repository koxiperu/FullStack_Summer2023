<?php
require_once 'songClass.php';
require_once 'connection.php';
class SongsTable extends Connect {
    public function addSong($dataArray)    {
        $stmt = $this->pdo->prepare("INSERT INTO songs (title, release_date, genre_id, artist_id, user_id) VALUES (:title, :release_date, :genre_id, :artist_id, :user_id)");
        $stmt->bindParam(':title', $dataArray['title']);
        $stmt->bindParam(':release_date',$dataArray['release_date']);
        $stmt->bindParam(':genre_id',$dataArray['genre_id']);
        $stmt->bindParam(':artist_id',$dataArray['atrist_id']);
        $stmt->bindParam(':user_id',$dataArray['user_id']);
        $lastInsertedId= $this->pdo->lastInsertId();
        if ($lastInsertedId) {
            return $lastInsertedId;
        } else {
            return false;
        }
    }
    public function allSongs(){
        $stmt=$this->pdo->prepare("SELECT songs.title, genre.name, artists.name FROM songs INNER JOIN genre ON genre.id=songs.genre_id INNER JOIN artists ON artists.id=songs.artist_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, "Song");
    }
    public function usersSongs($id){
        $stmt=$this->pdo->prepare("SELECT * FROM songs WHERE user_id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, "Song");
    }
    public function oneSong($id){
        $stmt=$this->pdo->prepare("SELECT * FROM songs WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}
?>