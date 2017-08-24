<?php

// changement du nom de la base de donne et activation du mode erreur de PDO
$db = new PDO('mysql:host=localhost;dbname=exo1_userslist;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8 ');