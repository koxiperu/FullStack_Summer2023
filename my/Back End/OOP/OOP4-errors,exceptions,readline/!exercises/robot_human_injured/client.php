<?php

require_once 'IWorker.php';
require_once 'Robot.php';
require_once 'LivingBeing.php';
require_once 'Human.php';

$simon = new Human('Simon', 'brown', 'Male', 1.79);
$camel = new Human('Camel', 'brown', 'Male', 1.90);
$natalia = new Human('Natalia', 'brown', 'Female', 1.72);
$r1d1=new Robot('r1d1', 'blue');
$r2d2=new Robot('r2d2', 'red');

$workers = array(
    $simon,
    $camel,
    $natalia,
    $r1d1,
    $r2d2
);

$injuredWorkers = [];

foreach ($workers as $key => $worker) {
    // Try to make everyone work!
    try{
        $worker -> work();
    } catch (Exception $e)
    {
        echo $e->getMessage();
        unset($workers[$key]);
        $injuredWorkers[] = $worker;
    }
}

echo "<pre>";
var_dump($workers);
echo "</pre>";

echo '<hr>';

echo "<pre>";
var_dump($injuredWorkers);
echo "</pre>";

?>