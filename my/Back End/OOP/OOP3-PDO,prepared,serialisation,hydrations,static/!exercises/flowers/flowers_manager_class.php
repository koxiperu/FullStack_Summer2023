<?php
require_once 'flowers_flower_class.php';
class FlowerManager
{
    public function findAll()
    {
        $pdo = new PDO('mysql:host=db;dbname=flowers_db', 'root', 'root');
        $query = "SELECT id, name, price FROM flowers";
        //$result = $pdo->query($query);
        //return $result->fetchAll(PDO::FETCH_ASSOC);
        return $pdo->query($query)->fetchAll(PDO::FETCH_CLASS, 'Flower');

    }
    public function findId($id){
        $pdo = new PDO('mysql:host=db;dbname=flowers_db', 'root', 'root');
        $query = "SELECT * FROM flowers WHERE id = $id";
        $result = $pdo->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}


?>