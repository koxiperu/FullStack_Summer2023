
<?php
require_once "CoffeeCup.php";
// $myCoffee = new CoffeeCup('Malongo', 30, 25);
// // $myCoffee->quantity=50;
// // $myCoffee->temperature=100;
// $coffeeInfo=$myCoffee->getCoffee();
// echo "<br>$coffeeInfo<br>";
// $quantityToSip = rand(1, 6);
// $rest=$myCoffee->sip($quantityToSip);
// echo "<b>$rest</b>";
// $myCoffee1 = new CoffeeCup('Malongo', 40, 25);
// $coffeeInfo=$myCoffee1->getCoffee();
// echo "<br>$coffeeInfo<br>";
// $quantityToSip = rand(1, 6);
// $rest=$myCoffee1->sip($quantityToSip);
// echo "<b>$rest</b>";
$otherCoffee = new CoffeeCup('Lavazza', 50, 15);
$coffeeInfo=$otherCoffee->getCoffee();
echo "<br>$coffeeInfo<br>";
$newVolume=$otherCoffee->getVolume();
while ($newVolume > 0) {
    echo "<br>***<br><em>Before sip: " .$otherCoffee->getVolume(). "</em>";
	$quantityToSip = rand(5, 10);
    echo "<br>***<br><em>Random sip: " .$quantityToSip. " </em>";
	$rest=$otherCoffee->sip($quantityToSip);
    echo "<br><b>Rest (new volume) - $rest</b>";
    $otherCoffee->coolDown(1.5);
    $newVolume = $otherCoffee->getVolume();
    echo "<b>New volume: $newVolume</b><br>------------<br>";
}



?>