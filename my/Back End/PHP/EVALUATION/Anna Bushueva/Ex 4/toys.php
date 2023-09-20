<?php
require_once 'nav.html';
$db=mysqli_connect('db','root','root','christmas_shop');
$query="SELECT * FROM toys";
$result=mysqli_query($db,$query);
$all_toys=mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($db);
foreach ($all_toys as $toy): ?>
    <div class="about_toy">
        <div class="content">
            <p class="capital"><?=$toy['name']?></p>
            <p><strong>Type: </strong><?=$toy['type']?></p>                    
        </div>
        <p><strong>Price: </strong><?=$toy['price']?> €</p>
        <img src=<?=$toy['photo']?> alt="" style="width:30%">
        <p><?php 
            if (strlen($toy['description'])>30) {
                echo substr($toy['description'],0,30).'...';
             }else echo $toy['description']?>
        </p>     
    </div>
    <?php endforeach;
?>