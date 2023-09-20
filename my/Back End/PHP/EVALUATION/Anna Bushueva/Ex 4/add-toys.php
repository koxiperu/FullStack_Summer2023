<?php
if (isset($_POST['sbtn'])) {
    $errors = [];
    if (empty($_POST['name'])) $errors['name'] = 'Name is mandatory!';
    else $name=$_POST['name'];
    if (empty($_POST['price'])) $errors['price'] = 'Price is mandatory!';
    else if ($_POST['price']==0) $errors['price']='Price must be grater 0!';
        else $price=(double)$_POST['price'];
    if (empty($_POST['type'])) $errors['type'] = 'Type is mandatory!';
    else $type=$_POST['type'];
    $photo=$_POST['photo'];
    $description=$_POST['description'];

    if (empty($errors)) {
        $db=mysqli_connect('db','root','root','christmas_shop');
        $newToy="INSERT INTO `toys`(`name`, `price`, `type`, `photo`, `description`) VALUES ('$name',$price,'$type', '$photo', '$description')";
        mysqli_query($db,$newToy);
        mysqli_close($db); 
        $mes='<h2 style="color:green">New toy was added!</h2>';   
        $name='';
        $price='';
        $type='';
        $photo='';
        $description='';   
    }
};

require_once 'nav.html'; 
if (isset($mes)) echo $mes;
?>
<div class="newToy">
    <h1>Add new toy</h1>
    <form method="POST" class="toyForm">
        <div class="row">
            <label for="title">Name: </label>
            <input type="text" name="name" value="<?php if (isset($name)) echo @$name?>">
        </div>
        <p><?php if (isset($errors['name']))
            echo $errors['name'];?>
        </p>        
        <div class="row">
            <label for="price">Price: </label>
            <input type="number" step="0.01" name="price" value="<?php if (isset($price)) echo @$price?>">
        </div>
        <p><?php if (isset($errors['price']))
            echo $errors['price'];?>
        </p>
        <div class="row">
            <label for="type">Choose the type: </label>
            <select name= "type">
                <option disabled selected value></option>
                <option value="dolls">Dolls</option>
                <option value="mechanic">Mechanic</option>
                <option value="puzzle">Puzzle</option>
            </select> 
        </div>
        <p><?php if (isset($errors['type']))
            echo $errors['type'];?>
        </p>
        <div class="row">
            <label for="photo">Photo: </label>
            <input type="photo" name="photo" value="<?php if (isset($photo)) echo @$photo?>">
        </div>
        <p></p>
        <div class="row">
            <label for="description">Text: </label>
            <textarea name="description">
                <?php if (isset($description)) echo @$description;?>
            </textarea>
        </div> 
        <p><?php if (isset($errors['text']))
            echo $errors['text']. '<br>';?>
        </p>
        <input type="submit" id="addnew" value="add" name="sbtn">
    </form>
</div>

