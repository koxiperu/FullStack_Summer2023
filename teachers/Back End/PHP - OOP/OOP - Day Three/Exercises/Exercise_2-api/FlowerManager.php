<?php
require_once 'Flower.php';
class FlowerManager
{
    private function getPdo()
    {
        return new PDO('mysql:host=db;dbname=flower_db','root','root');
    }

    public function findAll()
    {
        $pdo = $this->getPdo();
        $results = $pdo->query('SELECT * FROM Flowers');
        $flowers = $results->fetchAll(PDO::FETCH_CLASS,'Flower');

        return $flowers;
    }

    public function findById($id)
    {
        $pdo = $this->getPdo();
        $prep = $pdo->prepare('SELECT * FROM Flowers WHERE id = :id');
        $prep->bindValue(':id', $id);
        $prep->execute();

        $flower = $prep->fetch(PDO::FETCH_OBJ);
        $pdo = null;

        return $flower;
    }
}