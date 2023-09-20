<?php
require "User.php";
require "TableManager.php";
class UsersTable extends TableManager
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getPdo();
    }

    public function findAll()
    {
        $results = $this->pdo->query("SELECT * FROM users");
        $users = $results->fetchAll(PDO::FETCH_CLASS,'User');

        return json_encode($users);
    }

    public function findById($id)
    {
        $results = $this->pdo->query("SELECT * FROM users WHERE id = $id");
        $user = $results->fetchAll(PDO::FETCH_CLASS,'User');

        return json_encode($user);
    }

    public function insert($dataArray)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email, age) VALUES (:name, :email, :age)");

        $stmt->bindParam(':name',$dataArray['name']);
        $stmt->bindParam(':email',$dataArray['email']);
        $stmt->bindParam(':age',$dataArray['age']);
        $stmt->execute();

        $lastInsertedId = $this->pdo->lastInsertId();
        if ($lastInsertedId) {
            echo "New user with ID $lastInsertedId inserted successfully!";
        } else {
            echo "Failed to insert a new user!";
        }
    }

    public function update($dataArray)
    {
        $stmt = $this->pdo->prepare("Update users SET name = :name, email = :email, age= :age WHERE id = :id");
        $stmt->bindParam(':id',$dataArray['id']);
        $stmt->bindParam(':name',$dataArray['name']);
        $stmt->bindParam(':email',$dataArray['email']);
        $stmt->bindParam(':age',$dataArray['age']);

        $stmt->execute();
        $rowCount= $stmt->rowCount();

        if($rowCount > 0) {
            echo "User with ID ". $dataArray['id'] . " was updated succesfully";
        }else {
            echo "User with ID " . $dataArray['id'] . " was not updated";
        }
    }

    public function delete($id)
    {
        $query = "DELETE FROM users WHERE id = $id";
        $result = $this->pdo->exec($query);
        echo "$result rows were deleted";
    }    
}