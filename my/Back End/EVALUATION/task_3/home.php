<?php
//just display all
require_once 'candyTable.php';
require_once 'navbar.html';
$newCandy=new CandyTable();
$candys=$newCandy->getAll();
    foreach ($candys as $c)
    :?>
    <div class="object">
        <div class="section">
            <p><strong><?=$c->name?></strong></p>
            <p><em><?=$c->categ?></em></p>
        </div>    
        <p class='section'><?=$c->price?> eur</p>        
    </div>
 <?php endforeach;
?>
    