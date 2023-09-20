<?php

/*

-- SPOTIFY Exercise : 

Use the provided spotify_new.sql to import the database in phpMyAdmin for this exercise.

- Part 1 :

Create a 'songs.php' page where you display all the songs with : title

- Part 2 :

Add a new attribute to "artists" table.
This attribute is "poster" (we will save url/path to picture).

Create an "artists.php" page to display : name / picture

- Part 3 :

Create a navigation menu to navigate to the different pages.
Use "include" or "require" on every pages to include the navbar.

- Part 4 : 

Create a "index.php" page (home) to display latest 3 songs (release_date)

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
<button style="margin:20px"><a href="http://localhost:8000/songs.php/?page=1" style="text-decoration:none;color:darkgreen;font-weight:900;margin:20px;">Show</a></button>
<?php

if (isset($_GET['page'])){
    $nbPage=$_GET['page'];
}else $nbPage=0;
?>

<?php

if ($nbPage>=1){   
    $disable=false; 
    $songsNumber=2;//$songsNumber=$_POST['number'];
    $db=mysqli_connect('db','root','root','spotify');    
    $qSongs="SELECT title FROM songs";
    $result=mysqli_query($db,$qSongs);
    $songs=mysqli_fetch_all($result, MYSQLI_ASSOC); 
    $totalNumber=count($songs);
    $end=(ceil($totalNumber/$songsNumber)); 
    
    //echo "Total number of songs is $totalNumber.<br> Pages $end.<br>"; 
    
    $start=($nbPage-1)*$songsNumber;    
    //echo $start. ' start position<br>';
    $qSongs="SELECT title FROM songs LIMIT ".$start.', '.$songsNumber; 
    $result=mysqli_query($db,$qSongs);
    $songs=mysqli_fetch_all($result, MYSQLI_ASSOC);
    for ($i=0; $i<$songsNumber;$i++){
        $s=$songs[$i]['title'];
        echo "<div style='background-color:rgb(233, 199, 243); border-radius:10px; padding:10px; margin:5px 50% 5px 0;'><p><strong> $s </strong></p></div>";
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
        $cp=$nbPage;
        $cp-=1;
        echo "<a href='http://localhost:8000/songs.php/?page=" .$cp. "' style='color:darkgreen;font-weight:900; text-decoration:none'>Back</a>";
        
        };
        //echo $nbPage;
    ?>
    </button>
    
    <button disabled="<?php echo ($nbPage==$end)?'true':'false'?>">
    <?php 
    if ($nbPage==0)  echo "Next";
    else if ($nbPage==$end) echo "Next";
        else {
            $cp=$nbPage;
            $cp+=1;
            echo "<a href='http://localhost:8000/songs.php/?page=" .$cp. "' style='color:darkgreen;font-weight:900;text-decoration:none'>Next</a>";
            
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