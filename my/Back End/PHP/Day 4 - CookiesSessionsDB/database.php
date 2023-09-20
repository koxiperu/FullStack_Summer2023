////////////////////get the data/////////////////////////7
<?php
//DATABASE
//1. Connect to the DB
$db = mysqli_connect('db','root','root','exercise2_db'); //psw, user from compose.yaml
if($db) echo "Great success!<br>";

//2. prepare the query
$query='SELECT * FROM users';

//3. send the query to the db
//mysqli_query (connection, query)
$result=mysqli_query($db, $query);

//4.fetch the results - (result, format)
$users=mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($users as $user) :?>
<p>
    <strong>Username: </strong> <?= $user['username'];?>
</p>
<p>
<strong>Email: </strong> <?= $user['email'];?>
</p>
<hr><?php endforeach;
//5. close the connection
mysqli_close($db);
?>

////////////////add new row/////////////////////////////
<?php
//DATABASE
//1. Connect to the DB
$db = mysqli_connect('db','root','root','exercise2_db'); //psw, user from compose.yaml
if($db) echo "Great success!<br>";

//2. prepare the query
$query="INSERT INTO users(id, username, email, password) VALUES (id, 'Tony Danza', 'tony.danza1337@yahoo.com', 't0nyD@nz')";

//3. send the query to the db
//mysqli_query (connection, query)
$result=mysqli_query($db, $query);

//4.check if insert was successful
if ($result) echo "Great success<br>";
else echo "Smth wrong<br>";
//5. close the connection
mysqli_close($db);

?>
