<?php
/*
Create a Simple SQL Database:

    Create a new database named user_db.
    Inside the database, create a table named users with the following columns:
        - id (auto-incrementing integer, primary key)
        - name (varchar)
        - email (varchar)
        - age (integer)
    
    PHP OOP API:

    Create a Users class which will represent one entity within the db

    Create a PHP class named UsersTable to handle interactions with the users table in the database.
    The UserTable class should have the following methods:
    The values of these gets should be returned as arrays of Users.
    - getAllUsers(): Get all users from the database.
    - getUserById($id): Get a user by their ID.
    - addUser($name, $email, $age): Add a new user to the database.
    - updateUser($id, $name, $email, $age): Update an existing user in the database.
    - deleteUser($id): Delete a user from the database by their ID.
    - Create API Endpoints:

    Implement the following API endpoints using PHP to interact with the User class:
     /users: Get all users from the database.
     /users?id=$id: Get a user by their ID.
     /users-add: Add a new user to the database.
     /users-update: Update an existing user in the database.
     /users-delete: Delete an existing user in the database.

*/
require_once "UsersTable.php";
if (isset($_POST['sbtn'])){
    $user=new UsersTable();
    $message=$user->addUser($_POST['name'], $_POST['email'], $_POST['age']); 
}
?>
<a href="users.php">Return to main page.</a>
<form method="POST">
    <label for="name">Name: </label>
    <input type="text" name="name" id="">
    <label for="email">email: </label>
    <input type="text" name="email" id="">
    <label for="age">Age</label>
    <input type="number" name="age" id="">
    <input type="submit" name="sbtn" value="Add new user">
    <hr>
    <h3><?if (isset($message)) echo $message?></h3>
</form>