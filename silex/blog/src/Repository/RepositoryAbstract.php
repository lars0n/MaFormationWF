<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 02/08/2017
 * Time: 14:45
 */

namespace Repository;


use Silex\Application;

abstract class RepositoryAbstract
{

    /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $db;

    /**
     * RepositoryAbstract constructor.
     */
    public function __construct(Application $app)
    {
        $this->db = $app['db'];
    }

    public function persist(array $data, array $where = null){
        if ($where === null){
            $this->db->insert($this->getTable(), $data);
        }else{
            $this->db->update($this->getTable(), $data, $where);
        }
    }

    /**
     * Oblige les classes à définir cette methode qui renvoie le nom de latable a laquelle elles font référence
     * @return mixed
     */
    abstract protected function getTable();
}