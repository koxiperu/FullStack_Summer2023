<?php
/* PREPARED STATEMENTS
We use prepared statement for two main reasons: more secure (prevent SQL injection) and faster to execute().
*/
if (isset($_POST['sbtn'])) {
    $date=$_POST['release_date'];
    $pdo = new PDO('mysql:host=db;dbname=database', 'root', 'root');
    $query="SELECT * 
            FROM movies 
            WHERE release_date > :date
            AND director = :directorName";
    $preparedQuery = $pdo->prepare($query); //prepare the query
    $preparedQuery->bindValue(':date', $date); //bind values to the placeholder
    $preparedQuery->bindValue('directorName', 'Sarah Lee');
    $preparedQuery->execute();
    $movies = $preparedQuery->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    var_dump($movies);
    echo '</pre>';
}
?>
<form method='post'>
    <input type="date" name="release_date">
    <input type="submit" value="Submit" name="sbtn">
</form>
