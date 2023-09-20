<?php
/*
PDO has 3 error modes. According to the arguments you give, It'll display or not errors, returned by our DB:
- PDO::ERRMDE_SILENT
Default value. PDO displays nothing, you have to check the error yourself $pdo->errorInfo()

- PDO::ERMODE_WARNING
Display PHP warnings

- PDO::ERRMODE_EXEPTION
Uses exceptions.
*/

//$pdo = new PDO(/*connection*/);
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);