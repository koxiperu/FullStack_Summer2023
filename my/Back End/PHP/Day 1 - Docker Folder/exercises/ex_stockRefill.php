<?php
$stock=[
    'T-shirts' => 20,
    'Caps'=>10,
    'Shoes'=>5
];
echo '<pre>';
var_dump($stock);
echo '</pre><br>';
echo '
<h1>Caps are ' .$stock["Caps"].' </h1>';

$stock["Caps"]+=5;
$stock["Shoes"]+=20;
echo '<pre>';
var_dump($stock);
echo '</pre><br>';
echo '
<h1>Shoes are ' .$stock["Shoes"].' </h1>';
 ?>