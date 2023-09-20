<?php

require_once 'FlowerManager.php';

$flowerManager = new FlowerManager();
$flower = $flowerManager->findById($_GET['id']);

echo $flower->name . "<br>";
echo $flower->price . "<br>";