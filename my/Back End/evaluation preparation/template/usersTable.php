<?php
require_once 'userClass.php';
require_once 'connection.php';
class UsersTable extends Connect {
    public function getAll(){
        $stmt=$this->pdo->query("SELECT * FROM users");
        if ($stmt->execute()){
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        }else return false;
    }
    public function getMyData($id)
    {        
        $stmt=$this->pdo->prepare("SELECT * FROM users WHERE id = :id ");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
    }
    public function getUser($id)
    {        
        $stmt=$this->pdo->prepare("SELECT * FROM users WHERE id = :id ");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function updateUser($array){
        $stmt=$this->pdo->prepare("UPDATE users SET 
            name = :name,
            email = :email,
            birthyear = :birthyear,
            password  = :password
        WHERE id = :id ");
        $stmt->bindParam(':id', $array['id']);
        $stmt->bindParam(':name', $array['name']);
        $stmt->bindParam(':email', $array['email']);
        $stmt->bindParam(':birthyear', $array['birthyear']);
        $stmt->bindParam(':password', $array['password']);
        $stmt->execute();
        $lastInsertedId= $this->pdo->lastInsertId();
        if ($lastInsertedId) {
            return $lastInsertedId;
        } else {
            return false;
        }
    }
    public function addUser($dataArray)    {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password, birthyear) VALUES (:name, :email, :password, :birthyear)");
        $stmt->bindParam(':name', $dataArray['name']);
        $stmt->bindParam(':email',$dataArray['email']);
        $stmt->bindParam(':password',$dataArray['password']);
        $stmt->bindParam(':birthyear',$dataArray['birthyear']);
        $stmt->execute();
        $lastInsertedId= $this->pdo->lastInsertId();
        if ($lastInsertedId) {
            return $lastInsertedId;
        } else {
            return false;
        }
    }
    public function checkUser($dataArray){
        $_SESSION['user']=null;
        $stmt=$this->pdo->prepare("SELECT * FROM users WHERE name= :name AND password= :password");
        $stmt->bindParam(':name', $dataArray['name']);
        $stmt->bindParam(':password',$dataArray['password']);
        if ($stmt->execute()){
            $_SESSION['user']= $stmt->fetch(PDO::FETCH_OBJ);
        }else $_SESSION['user']=null;
    }
}
?>