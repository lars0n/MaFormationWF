<?php
    $pdo = new PDO('mysql:host=localhost;dbname=tchat', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

    // on lace une session
    session_start();