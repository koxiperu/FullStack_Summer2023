<?php
class Connect
{
public function getUsers(){
$pdo=new PDO("mysql:host=localhost;dbname=exercise2_db",'root','');
$query=$pdo->query('SELECT * FROM users');
$users=$query->fetchAll(PDO::FETCH);
$pdo=null;
return $users;
}
public function insertUser($user,$email,$password){
$pdo=new PDO("mysql:host=localhost;dbname=exercise2_db",'root','');
$query=$pdo->prepare('INSERT INTO users(id, name, password, email) VALUES (:username, :email, :password)');
$query->bindValue(':username',$u);
$query->bindValue(':email',$e);
$query->bindValue(':password',$p);
$result=$query->execute();
$pdo=null;
return $result;
}
}