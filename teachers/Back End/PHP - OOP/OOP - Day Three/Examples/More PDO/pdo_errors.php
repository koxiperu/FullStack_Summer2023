<?php
    /*
        PDO has 3 error modes.
        According to the arguments you give, It'll display, or not, errors returned by our db:

        PDO::ERRMODE_SILENT
        DEfault vlaue. PDO displays nothing.
        you have to check the error yourslef
        $pdo->errorInfo();

        POD::ERRMODE_WARNING
            Display PHP warnings

        PDO::ERRMODE_EXCEPTION
            Uses exceptions
    */

    $pdo = new PDO('','','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);