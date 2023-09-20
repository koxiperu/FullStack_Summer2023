<?php
//Good indentation of the code is also necessary
class Connect
{
public function getUsers(){
    $pdo=new PDO("mysql:host=db;dbname=exercise2_db",'root','root');//...AND root may be????!!!!
    $query=$pdo->query('SELECT * FROM users');
    //FETCH WHAT?
    $users=$query->fetchAll(PDO::FETCH_ASSOC);
    $pdo=null;
    return $users;
}
//God, please, check names of you variables
public function insertUser($user,$email,$password){
    $pdo=new PDO("mysql:host=db;dbname=exercise2_db",'root','root');
    //You have auto-increment! What ID? And order is significant
    //And check names of columns in your db! And name DB!!!!
    $query=$pdo->prepare("INSERT INTO users(username, email, password) VALUES (:username, :email, :password)");
    //God, please, check names of you variables
    $query->bindValue(':username',$user);
    $query->bindValue(':email',$email);
    $query->bindValue(':password',$password);
    $result=$query->execute();
    $pdo=null;
    return $result;
}
}

// I fixed ALL, but next time your salary will be mine, if I will do your work HEHEHEHE:)