<?php
abstract class Connect
{
    protected $pdo;
    function __construct()
    {
        $this->pdo = new PDO('mysql:host=db;dbname=users','root','root');
    }
}
?>