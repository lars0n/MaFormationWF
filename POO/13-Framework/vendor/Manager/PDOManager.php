<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 27/07/2017
 * Time: 12:36
 */

namespace Manager;


use PDO; // On a besoin d'utilisaer PDO qui existe dans l'espace GLOBAL de PHP et non dans ce namespace Manager.

class PDOManager
{
    private static $instance = NULL;
    private  $pdo; // Contiendra notre connexion a la BDD

    private function __construct(){}
    private function __clone(){}

    public  static  function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getPdo()
    {
        //require_once dirname(__DIR__, 3) . '/app/Config.php';
        require_once __DIR__ . '/../../app/Config.php';
        $config = new \Config;
        $connect = $config->getParametersConnect();
        $this->pdo = new PDO('mysql:host=' . $connect['host'] . ';dbname=' . $connect['dbname'], $connect['login'], $connect['password'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        return $this->pdo;
    }
}