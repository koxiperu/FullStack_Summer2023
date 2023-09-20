<?php
//connect to DB
abstract class Connect
{
    protected $pdo;
    function __construct()
    {
        $this->pdo = new PDO('mysql:host=db;dbname=candy_shop','root','root');
    }
}
?>