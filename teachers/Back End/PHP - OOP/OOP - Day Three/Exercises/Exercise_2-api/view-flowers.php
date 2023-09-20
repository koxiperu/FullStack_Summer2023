<?php

require_once 'FlowerManager.php';

$flowerManager = new FlowerManager();

$flowers = $flowerManager->findAll();

foreach ($flowers as $flower)
{
    echo $flower->name . '<br>';
    echo $flower->price . '<br>';
    echo "<a href='flower-detail.php?id=". $flower->id . "'>Flower Details</a><br>";
}