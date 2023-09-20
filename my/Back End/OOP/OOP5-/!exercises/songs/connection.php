<?php
abstract class Connect
{
    protected function getPdo()
    {
        return new PDO('mysql:host=db;dbname=music','root','root');
    }
}
?>