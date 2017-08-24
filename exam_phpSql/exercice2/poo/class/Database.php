<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 08/08/2017
 * Time: 16:32

 */

class Database
{
    private $db;


    /**
     * Database constructor.
     */
    public function __construct($dbname, $username, $password = '', $host = 'localhost', $devmode = true)
    {
        $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        if($devmode){
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8 ');
        }
    }

    public function query($statement, $attr = []){
        if($attr){
            $req = $this->db->prepare($statement);
            $req->execute($attr);
        }else{
            $req = $this->db->prepare($statement);
        }

        return $req;
    }
}