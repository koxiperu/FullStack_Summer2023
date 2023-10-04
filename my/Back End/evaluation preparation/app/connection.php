<?php
abstract class Connect
{
    protected $pdo;
    function __construct()
    {
        $this->pdo = new PDO('mysql:host=db1;dbname=users','root','root');
    }
}
?>