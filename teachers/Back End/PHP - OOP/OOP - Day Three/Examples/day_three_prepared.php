<?php

/*
    PREPARED STATEMENTS

    We use prepared statements for two main reasons : more secure (prevent SQL injection) and faster to execute().
*/

if(isset($_POST['submitBtn'])) {

    $date = $_POST['release_date'];

    //Connect to the DB

    $pdo = new PDO('mysql:host=db;dbname=database','root', 'root');
    $query = "SELECT *
              FROM movies
              WHERE release_date > :date
              AND director = :directorName";
    
    //Prepare the query
    $preparedQuery= $pdo->prepare($query);
    // Bind values to the placeholders
    $preparedQuery->bindValue(':date', $date);
    $preparedQuery->bindValue(":directorName", 'Director Z');

    // Execute the query
    $preparedQuery->execute();
    // Fetch the results
    $movies = $preparedQuery->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    var_dump($movies);
    echo "</pre>";

    //Close Connection
    $pdo= null;
}

?>

<form method="post">
    <input type="date" name="release_date">
    <input type="submit" value="Submit" name="submitBtn">
</form>