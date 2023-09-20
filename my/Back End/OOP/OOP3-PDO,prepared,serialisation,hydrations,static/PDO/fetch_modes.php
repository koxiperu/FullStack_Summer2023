<?php
$pdo = new PDO('', '', '');
/*
It is possible to specify a different fetch mode.
*/
$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//By default PDO use associative array
/*
Fetch modes
http://php.net/manual/en/pdostatement.fetch.php

PDO::FETCH_OBK returns in an object
PDO::FETCH_CLASS and FETCH_INTO place results in object class that we can specify
PDO::FETCH_ASSOC returns in an associative array
PDO::FETCH_BOTH returns a combined array (associative and numeric)
*/
?>