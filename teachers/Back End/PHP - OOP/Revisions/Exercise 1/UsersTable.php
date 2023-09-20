<?php
require 'TableManager.php';
class UsersTable extends TableManager
{
    public function signUp($data)
    {
        $pdo = $this->pdo;
        $prep = $pdo->prepare("INSERT INTO users(username, email, password) values(:username, :email, :password)");
        $prep->bindParam(':username', $data['username']);
        $prep->bindParam(':email', $data['email']);
        $prep->bindParam(':password', $data['password']);
        If($prep->execute()){
            echo "Register succesfull";
        }else{
            echo "Register failed";
        }
    }

    public function signIn($data)
    {
        $_SESSION['user'] = null;
        $pdo = $this->pdo;
        $prep = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $prep->bindParam(':username', $data['username']);
        $prep->bindParam(':password', $data['password']);
        if($prep->execute())
        {
            $_SESSION['user'] = $prep->fetch(PDO::FETCH_OBJ);
        }else{
            $_SESSION['user'] = null;
        }
    }
}