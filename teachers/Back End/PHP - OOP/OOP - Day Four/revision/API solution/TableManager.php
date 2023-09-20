<?php
abstract class TableManager
{
    protected function getPdo()
    {
        return new PDO('mysql:host=db;dbname=database','root','root');
    }
}