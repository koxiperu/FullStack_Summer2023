<?php

require "UsersTable.php";

$usersTable = new UsersTable();

switch($_SERVER['REQUEST_METHOD'])
{
    case 'GET':
        if(isset($_GET['id']))
        {
            echo $usersTable->findById($_GET['id']);
        }else{
            echo $usersTable->findAll();
        }
        break;
    case 'POST':
        $content = file_get_contents('php://input');
        $content = json_decode($content,true);
        $usersTable->insert($content);
        break;
    case 'PATCH':
        $content = file_get_contents('php://input');
        $content = json_decode($content,true);
        $usersTable->update($content);
        break;
    case 'DELETE': 
        $content = file_get_contents('php://input');
        $content = json_decode($content);
        var_dump($content);
        $id = $content['id'];
        $usersTable->delete($id);
        break;
    default: throw new Exception("Request method not recognised. wtf are you doing?!?");
}