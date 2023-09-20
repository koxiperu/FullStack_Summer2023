<?php
require_once 'flowers_manager_class.php';
if (isset($_GET['page'])){
    $nbPage = $_GET['page'];
}else $nbPage=1;

$manager = new FlowerManager();
$detailed = $manager->findId($nbPage);
echo '<div style="width:700px;margin:20px auto">
<h1>Name of flower is '.$detailed[0]['name']. ' (number ' .$nbPage. ') costs ' .$detailed[0]['price']. '$. <br>
<h3 style="color:brown;width:300px;">' .$detailed[0]['details']. '</h3><br></h1><br><h2> Do you want to buy it?</h2></div>';
?>