<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 02/08/2017
 * Time: 14:31
 */

namespace Repository;

use Entity\Category;

class CategoryRepository extends RepositoryAbstract
{

    protected function getTable()
    {
        return 'category';
    }

    /**
     * @return array Un tableau d'objet Entity\Category
     */
    public function findAll(){
        $dbCategories = $this->db->fetchAll('SELECT * FROM category');

        $categories = [];

        foreach ($dbCategories as $dbCategory){
            $category = $this->buildEntity($dbCategory);
            $categories[] = $category;
        }

        return $categories;
    }

    /**
     * @param $id
     * @return Category|null
     */
    public function find($id){
        $dbCategory = $this->db->fetchAssoc(
            "SELECT * FROM category WHERE id = :id",
            [
                ':id' => $id
            ]
        );

        if(!empty($dbCategory)){
            return $this->buildEntity($dbCategory);
        }
    }


    public function save(Category $category){
        // les données à enregistrer en bdd
        $data = ['name' => $category->getName()];

        // si la catégorie a un id, on est en update
        // sinon en insert
        $where = !empty($category->getId())? ['id' => $category->getId()] : null ;

        // appel à la méthode de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);

        // on set l'id quand on est en insert
        if (empty($category->getId())){
            $category->setId($this->db->lastInsertId());
        }
    }

    public function delete(Category $category){
        $this->db->delete( $this->getTable() , ['id' => $category->getId()]);
    }

    /**
     * Crée un objet Entity\Category
     * à partir d'un tableau de données venant d ela bdd
     *
     * @param array $data
     * @return Category
     */
    private function buildEntity(array $data)
    {
        $category = new Category();

        $category
            ->setId($data['id'])
            ->setName($data['name'])
        ;

        return $category;
    }
}