<?php
require_once "UserClass.php";
abstract class TableManager{
    protected $pdo;
    protected function getPdo(){
        return new PDO('mysql:host=db;dbname=user_db', 'root', 'root');
    }
}
?>