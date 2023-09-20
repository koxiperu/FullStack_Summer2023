<?php

/*
    -- Exercise : 
    
        - Part 1 :
               Create a page "login.php", with the following fields:
    - E-mail
    - Password

        - Part 2 :

            Given this array :
            $users = [
                0 => [
                    'email' => 'simon@gmail.fr',
                    'password' => 1234
                ],
                1 => [
                    'email' => 'alfonso@gmail.com',
                    'password' => 6549
                ]
            ];

            When the user submit the form, you have to check if email match one of the user of the array.
            Also check if password match.
        
    */

$users = [
    0 => [
        'email' => 'simon@gmail.com',
        'password' => 1234
    ],
    1 => [
        'email' => 'alfonso@gmail.com',
        'password' => 6549
    ]
];

if (isset($_POST['btn'])) {

    $email = $_POST['usr'];
    $password = $_POST['pwd'];
    $validCredentials = false;

    foreach ($users as $user) {
        if ($email == $user['email'] and $password == $user['password'])
            $validCredentials = true;
    }

    if ($validCredentials)
        echo "Welcome to our website";
    else
        echo "Cannot log in. Check your username and password";
}
?>

<form method="POST">
    <input type="email" name="usr" placeholder="Email">
    <input type="password" name="pwd" placeholder="Password">
    <input type="submit" name="btn">
</form>