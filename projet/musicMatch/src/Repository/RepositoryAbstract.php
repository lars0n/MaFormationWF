<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Repository;

use Doctrine\DBAL\Portability\Connection;
use Silex\Application;

/**
 * Description of RepositoryAbstract
 *
 * @author Hello
 */
abstract class RepositoryAbstract {
     /**
     *
     * @var Connection
     */
    protected $db;
    
    
    protected $app;


    /**
     * 
     * @param Application $app
     */
    public function __construct(Application $app) 
    {
        $this->app = $app;
        $this->db = $app['db'];
    }

     public function findAll()
    {
        $dbresults = $this->db->fetchAll("SELECT * FROM " . $this->getTable());
        
        $arrays = [];
        
        foreach ($dbresults as $dbresult)
        {
            /* Ce code est passé dans la méthode buildEntity()
            $category = new Category();
            
            $category
                ->setId($dbCategory['id'])
                ->setName($dbCategory['name'])
            ;
            */
            
            $array = $this->buildEntity($dbresult);
            
            $arrays[] = $array;
        }
        
        return $arrays;
    }
    
    public function find($id)
    {
        $dbresult = $this->db->fetchAssoc(
            'SELECT * FROM ' . $this->getTable() .  ' WHERE id = :id',
            [
                ':id' => $id
            ]
        );
        
        if(!empty($dbresult))
        {
            return $this->buildEntity($dbresult);
        }
    }
     
    public function save($entity, array $data){
        // Si la catégorie a un id, on est en update
        // sinon, en insert
        $where = !empty($entity->getId())
            ? ['id' => $entity->getId()]
                : null
        ;
        
        // Appel à la méthide de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);
        
        // On set l'id quand on est en insert
        if(empty($entity->getId())) {
            $entity->setId($this->db->lastInsertid());
        }
    }
    
    public function delete($Entity)
    {
        $this->db->delete(
        $this->getTable(),
            ['id' => $Entity->getId()]
        );
    }

    public function persist(array $data, array $where = null)
    {
        if(is_null($where))
        {
            $this->db->insert($this->getTable(), $data);
        } else {
            $this->db->update($this->getTable(), $data, $where);
        }
    }
    
    public function getTable(){
        $class = get_called_class();
        
        $class = explode('\\', $class);
        $class = end($class);
        $table = strtolower(str_replace('Repository', '', $class)) . 's';
        return $table;
    }
    
    //abstract protected function buildEntity(array $data, array $data2 = []);
}
