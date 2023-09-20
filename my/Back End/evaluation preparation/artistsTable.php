<?php
require_once 'artistClass.php';
require_once 'connection.php';
class ArtistsTable extends Connect {
    public function addArtist($dataArray)    {
        $stmt = $this->pdo->prepare("INSERT INTO artists (name, bio, gender, date_of_birth, user_id) VALUES (:name, :bio, :gender, :date_of_birth, :user_id)");
        $stmt->bindParam(':name', $dataArray['name']);
        $stmt->bindParam(':bio',$dataArray['bio']);
        $stmt->bindParam(':gender',$dataArray['gender']);
        $stmt->bindParam(':date_of_birth',$dataArray['date_of_birth']);
        $stmt->bindParam(':user_id',$dataArray['user_id']);
        $stmt->execute();
        $lastInsertedId= $this->pdo->lastInsertId();
        if ($lastInsertedId) {
            return $lastInsertedId;
        } else {
            return false;
        }
    }
    public function allArtists(){
        $stmt=$this->pdo->prepare("SELECT * FROM artists");
        $stmt->execute();
        $artists = $stmt->fetchAll(PDO::FETCH_CLASS, "Artist");
        return $artists;
    }
    public function usersArtists($id){
        $stmt=$this->pdo->prepare("SELECT * FROM artists WHERE user_id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $artists = $stmt->fetchAll(PDO::FETCH_CLASS, "Artist");
        return $artists;
    }

}
?>