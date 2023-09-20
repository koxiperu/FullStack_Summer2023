<?php
require_once "UserClass.php";
require_once "tableManager.php";
 class UsersTable extends TableManager{
    
    public function getAllUsers()
    {
        $results = $this->pdo->query("SELECT * FROM users");
        $users = $results->fetchAll(PDO::FETCH_CLASS, 'Users');
        return $users;

    }
    public function getUserById($id){
        $results = $this->pdo->query("SELECT * FROM users WHERE id=$id");
        $user = $results->fetchAll(PDO::FETCH_CLASS, 'Users');
        return $user[0];
    }
    public function addUser($name, $email, $age){
        $this->pdo->query("INSERT INTO users (name, email, age) VALUES ('$name', '$email',$age)");
        return "New user ($name, $email, $age) added successfully.<br>-------------<br>";
    }
    public function updateUser($id, $name, $email, $age){
        $this ->pdo->query("UPDATE users
        SET name = '$name',
            email = '$email',
            age = $age
        WHERE id = $id");
        return "User with id= $id updated successfully.<br>-------------<br>";
    }
    public function deleteUser($id){
        $this->pdo->query("DELETE FROM users
        WHERE id = $id");
        return "User (id=$id) deleted successfully.<br>-------------<br>";
    }
    
}
?>