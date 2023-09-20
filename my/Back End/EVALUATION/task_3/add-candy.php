<?php
require_once 'candyTable.php';
//if submit check some things and add new candy
if (isset($_POST['sbtn'])) {
    if (empty($_POST['name'])){
        $err['name']='Candyname is mandatory!';
        };
    if (empty($_POST['price'])){
        $err['price']='Price is mandatory!';
        }else if ($_POST['price']==0){
            $err['price']='You want to give candys away for free??';
        };
    if (empty($err)) {
        $content=array(
            'name'=> $_POST['name'],
            'categ'=> $_POST['categ'],
            'price'=> $_POST['price'],
        );
        $newCandy=new CandyTable();    
        $res=$newCandy->addCandy($content);
        if($res) $error='<h3>New candy was registered successffully</h3>';
        else $error='<h3>Connection failed. Try later again.</h3>';
}
}
    
?>
<html>
<main>
    <!-- form for adding candy -->
    <?php require_once 'navbar.html'?>
    <form method="POST" class='section'>
        <div>
            <label for="name">Candy Name: </label>
            <input type="text" name="name" value="<? if (isset($_POST['name'])) echo $_POST['name']?>">
            <? if (!empty($err['name'])) echo $err['name']?>
        </div>
        <div>
            <label for="categ">Choose category: </label>
            <select name="categ">
                <option value="1">Gummies</option>
                <option value="2">Lollipop</option>
                <option value="3">Caramel</option>
            </select>
            <? if (!empty($err['categ'])) echo $err['categ']?>
        </div>
        <div>
            <label for="price">Price: </label>
            <input type="number" name="price" step="0.01" value="<? if (isset($_POST['price'])) echo $_POST['price']?>"> eur
            <? if (!empty($err['price'])) echo $err['price']?>
        </div>
        <input type="submit" name='sbtn' value="add">
        <?if (!empty($error)) echo $error?>
    </form>
</main>
</html>