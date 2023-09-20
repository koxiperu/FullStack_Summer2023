<?php
/*
Exercise for SONGS.PHP : 

    Using the "spotify" database, create a "songs.php" where we retrieve X songs per page.
    With navigation buttons to switch from one page to another.

    Step 1:
        Decide how many elements to display on the page.

    Step 2:
        Check if you have a URI parameter.
        For example : songs.php?page=1
    
     Step 3:
        Thanks to the page number, you can change the query.
        SELECT * FROM songs LIMIT X, songsPerPage

        You just have to figure out the X value.

        --- Links (navigate throught the pages)

     Step 4: 
        Create two links/buttons 'previous' / 'next'.
        Previous : currentpage - 1
        Next : currentpage + 1

     Step 5.:
        Make sure that on the first page, 'previous' is disabled.
        Make sure that on the last page, 'next' is disabled.

        To do that, you have to count how many songs are in the table.
        Divide that number by the number of songs per page.




*/
?>
/////////////////////////////home page -- index.php///////////////////////////////////

<?php
require_once 'navbar.html';
?>
<div style="margin:0 5%; padding:20px 5%; border-radius:20px; background-color:lightsalmon">
<h2>The latest songs</h2>
<?php
$db=mysqli_connect('db','root','root','spotify');
$qSongs='SELECT title, release_date 
FROM `songs` 
ORDER BY release_date DESC';
$result=mysqli_query($db,$qSongs);
$bsongs=mysqli_fetch_all($result, MYSQLI_ASSOC);

for ($i=0;$i<3;$i++){
    $bestSongs[$i]=$bsongs[$i];
}

foreach ($bestSongs as $b)
:?>
<div style="background-color:rgb(233, 199, 243); border-radius:10px; padding:10px; margin:5px 50% 5px 0">
<p>
    <strong> <?= $b['title'];?></strong> 
</p>
<p>
    <?= $b['release_date'];?>
</p>

</div>



<?php endforeach;
mysqli_close($db);

?>
</div>
/////////////////////////////songs page -- songs.php///////////////////////////////////
<?php
require_once 'navbar.html';
?>
<div style="margin:0 5%; padding:20px 5%; border-radius:20px; background-color:lightsalmon">
<h2>All songs</h2>
<form method="POST">
    <label for="number">Number of songs per page: </label>
    <input type="text" name="number" value="<?php echo empty($songsNumber)?'':$songsNumber?>" id="">
    <input type="submit" name="sbtn" value="SET">    
</form>
<button style="margin:20px"><a href="http://localhost:8000/songs.php/?page=1" style="text-decoration:none;color:darkgreen;font-weight:900;margin:20px;">Show</a></button>
<?php

if (isset($_GET['page'])){
    $nbPage=$_GET['page'];
}else $nbPage=0;
?>

<?php

if ($nbPage>=1){ 
    if (isset($_POST['sbtn'])) {
        $songsNumber=$_POST['number'];
    } else {
        $songsNumber=3;
    }
    $db=mysqli_connect('db','root','root','spotify');    
    $qSongs="SELECT COUNT(*) as nbSongs FROM songs";
    $result=mysqli_query($db,$qSongs);
    $tN=mysqli_fetch_assoc($result); //one line
    $end=(ceil($tN['nbSongs']/$songsNumber)); 
    
    //echo "Total number of songs is $totalNumber.<br> Pages $end.<br>"; 
    
    $start=($nbPage-1)*$songsNumber;    
    //echo $start. ' start position<br>';
    $qSongs="SELECT title FROM songs LIMIT $start,$songsNumber"; 
    $result=mysqli_query($db,$qSongs);
    $songs=mysqli_fetch_all($result, MYSQLI_ASSOC);
    for ($i=0; $i<$songsNumber;$i++){
        if (!empty($songs[$i])) {
          $s=$songs[$i]['title'];
        echo "<div style='background-color:rgb(233, 199, 243); border-radius:10px; padding:10px; margin:5px 50% 5px 0;'><p><strong> $s </strong></p></div>";  
        }else{
            echo "<div style='background-color:rgb(233, 199, 243); border-radius:10px; padding:10px; margin:5px 50% 5px 0; color:rgb(233, 199, 243)'><p><strong>$s</strong></p></div>";   
        }
        
    }
    mysqli_close($db);
};
?>
<div>
    <?php  if ($nbPage!=0) echo 'Page ' .$nbPage;?> 
    <button disabled="<?php echo ($nbPage<=1)?'true':'false'?>">
    <?php
    if ($nbPage<=1) echo "Back";
    else {
        $cp=$nbPage-1;
        echo "<a href='?page=$cp' style='color:darkgreen;font-weight:900; text-decoration:none'>Back</a>";
        
        };
        //echo $nbPage;
    ?>
    </button>
    
    <button disabled="<?php echo ($nbPage==$end)?'true':'false'?>">
    <?php 
    if ($nbPage==0)  echo "Next";
    else if ($nbPage==$end) echo "Next";
        else {
            $cp=$nbPage+1;
            echo "<a href='?page=$cp' style='color:darkgreen;font-weight:900;text-decoration:none'>Next</a>";
            
        };
        //echo $nbPage;
    ?>
    </button>
    
</div>
/////////////////////////////artist page -- artists.php///////////////////////////////////


<?php
require_once 'navbar.html';
?>
<div style="margin:0 5%; padding:20px 5%; border-radius:20px; background-color:lightsalmon">
<h2>Artists</h2>
<?php
$db=mysqli_connect('db','root','root','spotify');
$qArt='SELECT * FROM artists';
$result=mysqli_query($db,$qArt);
$artists=mysqli_fetch_all($result, MYSQLI_ASSOC);
//echo "<img src='" .$artists[1]['poster']. "'>";
foreach ($artists as $a)
:?>
<div style="background-color:rgb(233, 199, 243); border-radius:10px; padding:10px; margin:5px 50% 5px 0; display:flex; flex-direction:row; justify-content:space-between">
    <p>
        <strong> <?= $a['name'];?> </strong> 
    </p>
    <p>
    <img src=<?= $a['poster']?> alt="" style="height:100px">     
    </p>
</div><?php endforeach;
mysqli_close($db);

?>
</div>

/////////////////////////////////navbar.html////////////////////////////////////////////////
<nav style="display: flex; flex-direction: row; justify-content: space-between; margin:20px 10%">
    <div style="display: flex; flex-direction: row;">
        
        <img src="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg" alt="" style="height:100px;">
        <h1 style="color:orangered">Spotify</h1>
    </div>
    
    <ul style="list-style:none; display:flex;flex-direction: row;gap:20px; font-size: 25px;">
        <li><a style="text-decoration: none;" href="index.php">Home</a></li>
        <li><a style="text-decoration: none;" href="artists.php">Artists</a></li>
        <li><a style="text-decoration: none;" href="songs.php">Songs</a></li>
    </ul>
</nav>