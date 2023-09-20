<?php
// DATABASE
// 1. Connect to the DB
// mysqli_connect(host, user, password, database)
$db = mysqli_connect('db', 'root', 'root', 'exercise2_db');

if($db)
    echo "Great success my friend !<br>";

// 2. Prepare the query
$query = "INSERT INTO users(id, username, email, password) VALUES(id, 'Tony Danza', 'tony.danza1337@yahoo.com', 't0nyD@anz3r')";

// 3. Send the query to the DB
// mysqli_query(connection, query)
$result = mysqli_query($db, $query);

// 4. Check if insert was successful
if ($result)
    echo "Great success !";
else
    echo "MEEP MEEP SOMETHING WRONG";


// 5. Close the connection
mysqli_close($db);
?>
