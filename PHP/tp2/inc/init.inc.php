<?php 
    $dsn = 'mysql:dbname=repertoire;host=localhost';
    $user = 'root';
    $password = '';

    $pdo = new PDO($dsn, $user, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

    $message_flash = '';

    require ('function.inc.php');

    