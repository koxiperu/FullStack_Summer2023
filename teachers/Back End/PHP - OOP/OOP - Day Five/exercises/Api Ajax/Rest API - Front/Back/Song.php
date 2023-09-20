<?php 


class Song{
    public $id;
    public $name;
    public $genre;
    

    public function __toString()
    {
        return "<b>name : </b>$this->name <b> genre :</b> $this->genre <hr>";
    }

    function getAllSongs()
    {
        $pdo = new PDO("mysql:host=db;dbname=db_apiCall", "root", "root");

        $query = "SELECT * FROM Songs";
        $preparedQuery = $pdo->prepare($query);
        $preparedQuery->execute();
        $songs = $preparedQuery->fetchAll(PDO::FETCH_CLASS, "Song");

        return $songs;
    }

    function addSong($params)
    {
        $pdo = new PDO("mysql:host=db;dbname=db_apiCall", "root", "root");

        try {
            $stmt = $pdo->prepare("INSERT INTO Songs (name, genre) VALUES (:name, :genre)");
            $stmt->bindValue(':name', $params['name']);
            $stmt->bindValue(':genre', $params['genre']);
    
            $stmt->execute();

            return "New entry added!";
        } catch(PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}   



?>