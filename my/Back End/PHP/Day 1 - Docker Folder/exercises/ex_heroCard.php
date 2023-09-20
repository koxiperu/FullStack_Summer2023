
<?php
// Exercise 1
//display the characteristics of the character
$first_name = 'Mary';
$last_name='BLOOD';
$attack_points=150;
$defence_points=50;

echo '<div style="text-align:center;
font-size:30px;
border:3px red solid; 
border-radius:20px;margin:20px 20%;
box-shadow:10px 10px 30px red;
background-color:black; 
color:white">
<h1>Character`s characteristics</h1>
<p> Name: <b><span style="color:red">' .$last_name. ' ' .$first_name. '</span></b></p>
<p> Attack points: <b>' .$attack_points. '</b></p>
<p> Defence points: <b>' .$defence_points. '</b></p>
</div>'
?>
<div style="text-align:center;
font-size:30px;
border:3px red solid; 
border-radius:20px;margin:20px 20%;
box-shadow:10px 10px 30px red;
background-color:black; 
color:white">
<h1>Character`s characteristics</h1>
<p> Name: <b><span style="color:red"><?php echo $last_name. ' ' .$first_name ?></span></b></p>
<p> Attack points: <b><?php echo $attack_points ?></b></p>
<p> Defence points: <b><?php echo $defence_points ?></b></p>
</div>
