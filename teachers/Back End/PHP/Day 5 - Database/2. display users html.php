<?php
// DATABASE
// 1. Connect to the DB
// mysqli_connect(host, user, password, database)
$db = mysqli_connect('db', 'root', 'root', 'exercise2_db');

if($db)
    echo "Great success my friend !<br>";

// 2. Prepare the query
$query = "SELECT * FROM users";

// 3. Send the query to the DB
// mysqli_query(connection, query)
$result = mysqli_query($db, $query);

// 4. Fetch the results
// mysqli_fetch_all(result, format)
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
// MYSQLI_ASSOC is the format that we'll use
// it converts the result as an associative array

foreach($users as $user) : ?>
<p>
    <strong>Username : </strong> <?= $user['username']; ?>
</p>
<p>
    <strong>Email : </strong><?= $user['email']; ?>
</p><hr> <?php endforeach;

// 5. Close the connection
mysqli_close($db);
?>
