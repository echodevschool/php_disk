<?php
function getConnection()
{
    $host = 'databasephp_disk';
    $port = '3306';
    $db = 'php_disk';
    $user = 'root';
    $pass = 'secret';
    $charset = 'utf8';
    $dsn = "mysql:host=$host; port=$port; dbname=$db; charset=$charset";

    return new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);   
}