<?php

abstract class TableManager
{
    protected $pdo;

    function __construct()
    {
        $this->pdo = new PDO('mysql:host=db;dbname=database','root','root');
    }
}