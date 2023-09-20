<?php
/*
EXERCISE 3

CRUD = Create, Read, Update, Delete.
Using classes!

1. Create a database in MySQL with a table named "users". 
The table should have the following columns: 
- id (auto-increment)
- username
- email
- password

2. Create "index.php" and display a list of all data in the "users" table.

3. Add a form in "index.php" to create a new user.
The inputs should match the properties of the "users" table.

4. When recieving the form data, sanitize all values and validate the email using the appropriate filter.
The password field MUST be hashed before being inserted into the database.

5. If all the input values are valid, use them to create a new user in the table.

6. Add a button to each row in the user list that allows to edit or delete the different users.

7. When the edit button is clicked, the user should be taken to a new PHP file named "edit.php" 
that allows them to edit the username, email, and password.

8. When the delete button is clicked, the user should be deleted from the "users" table.

 */