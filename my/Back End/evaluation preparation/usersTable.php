<?php
require_once 'userClass.php';
require_once 'connection.php';
class UsersTable extends Connect {
   
    public function addUser($dataArray)    {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password, birthyear) VALUES (:name, :email, :password, :birthyear)");
        $stmt->bindParam(':name', $dataArray['name']);
        $stmt->bindParam(':email',$dataArray['email']);
        $stmt->bindParam(':password',$dataArray['password']);
        $stmt->bindParam(':birthyear',$dataArray['birthyear']);
        $stmt->execute();
        $lastInsertedId= $this->pdo->lastInsertId();
        if ($lastInsertedId) {
            echo "<h1>New user with ID $lastInsertedId added successfully!</h1>";
        } else {
            echo "<h1>Failed to add a new user!</h1>";
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