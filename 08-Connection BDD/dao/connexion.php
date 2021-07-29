<?php

$dsn = 'mysql:host=localhost:3306;dbname=eni';
$option = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];
try {
    $pdo = new PDO($dsn, 'root', '', $option);

} catch (PDOException $e) {
    $msg = "code : {$e->getCode()} message : {$e->getMessage()}";
    die($msg); //arret de code
}