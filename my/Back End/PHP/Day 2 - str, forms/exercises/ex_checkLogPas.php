<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution Form Ex 2</title>
</head>

<body>
    
    <form method="post" style="background-color:lightblue; margin:20px 20%; padding:20px; border-radius:20px; text-align:center;box-shadow:0 0 20px blue;display:flex; flex-direction:column;justify-content:center; align-items:center;gap:20px">
    <h1>Welcome to our agressive site!!!! </h1>
        <input type="email" name="email" placeholder="E-mail">
        <?php
        if(isset($mes)) echo $mes;
        ?>
        <input type="password" name="password" placeholder="Password">
        <?php
        if(isset($mes)) echo $mes;
        ?>
        <input type="submit" name="signinBtn" value="Signin">
    </form>
    <?php
    //Make sure button is clicked
    if (isset($_POST['signinBtn'])) {
        $message = "<h1>Go out, bastard!</h1>";
        $mes="";
        $err=1;
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

        $email = $_POST['email'];
        $password = $_POST['password'];
        foreach ($users as $us){
            if($email==$us['email'] and $password==$us['password']) {
                $message="<h1>Welcome to our fighting club!</h1>";
                $err=0;
            } else if($email!=$us['email']){
                $mes="Your e-mail is NOT GOOD!";
            } else $mes="your password - we DON`T LIKE it!";
                  
    }
    echo $message;
    echo $mes;
}
    ?>
</body>

</html>