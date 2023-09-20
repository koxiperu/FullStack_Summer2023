<?php
//obviously...
require_once 'candyClass.php';
require_once 'connection.php';
class CandyTable extends Connect {
    public function getAll(){
        $stmt=$this->pdo->query("SELECT candy.name as name, candy.price as price, categories.title as categ FROM candy 
        INNER JOIN categories ON categories.id=candy.categ_id");
        if ($stmt->execute()){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'Candy');
        }else return false;
    }
    
    public function addCandy($dataArray)    {
        $stmt = $this->pdo->prepare("INSERT INTO candy (name, price, categ_id) VALUES (:name, :price, :categ_id)");
        $stmt->bindParam(':name', $dataArray['name']);
        $stmt->bindParam(':price',$dataArray['price']);
        $stmt->bindParam(':categ_id',$dataArray['categ']);
        $stmt->execute();
        $lastInsertedId= $this->pdo->lastInsertId();
        if ($lastInsertedId) {
            return $lastInsertedId;
        } else {
            return false;
        }
    }
}
?>