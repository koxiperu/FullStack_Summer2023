<?php

require_once 'flowers_manager_class.php';
$manager = new FlowerManager();
$flowers = $manager->findAll();
$theOne = $manager->findId(4);

// foreach ( $flowers as $flower ) {
//     echo $flower['name'] .' costs '.$flower['price']. '$<br>
// 	<a href="flowers_detail.php?page=' .$flower['id']. '">See more details</a>';
// 	echo '<br>***********<br>';
// }
foreach ( $flowers as $flower ) {
    echo $flower->name .' costs '.$flower->price. '$<br> 
	<a href="flowers_detail.php?page=' .$flower->id. '">See more details</a>';
	echo '<br>***********<br>';
}
echo '<br>------------<br>';
echo 'My favourite flower is '.$theOne[0]['name'];

?>