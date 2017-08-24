<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 03/08/2017
 * Time: 16:31
 */

namespace Repository;


use Entity\Article;
use Entity\Category;

class ArticleRepository extends RepositoryAbstract
{
    protected function getTable()
    {
        return 'article';
    }

    public function findAll($limit = null){

        if($limit == null){
            $query = "SELECT a.*, c.name FROM article a JOIN category c ON a.category_id = c.id ORDER BY a.id DESC ";
        }else{
            $query = "SELECT a.*, c.name FROM article a JOIN category c ON a.category_id = c.id ORDER BY a.id DESC LIMIT " . $limit;
        }

        $dbArticles = $this->db->fetchAll($query);

        $articles = [];

        foreach ($dbArticles as $dbArticle){
            $article = $this->buildEntity($dbArticle);
            $articles[] = $article;
        }

        return $articles;
    }

    public function find($id, $limit = null){

        $query = "SELECT a.*, c.name FROM article a JOIN category c ON a.category_id = c.id WHERE a.id = :id";

        $dbarticle = $this->db->fetchAssoc(
            $query,
            [
                ':id' => $id
            ]
        );

        if(!empty($dbarticle)){
            return $this->buildEntity($dbarticle);
        }
    }

    public function findArticleByCategory($category, $limit = null){

        if($limit == null) {
            $query = "SELECT a.*, c.name FROM article a JOIN category c ON a.category_id = c.id WHERE c.name = :category";
        }else{
            $query = "SELECT a.*, c.name FROM article a JOIN category c ON a.category_id = c.id WHERE c.name = :category ORDER BY a.id DESC LIMIT " . $limit;
        }


        $dbArticles = $this->db->fetchAll(
            $query,
            [
                ':category' => $category
            ]
        );

        $articles = [];

        foreach ($dbArticles as $dbArticle){
            $article = $this->buildEntity($dbArticle);
            $articles[] = $article;
        }

        return $articles;
    }

    public function save(Article $article){
        // les données à enregistrer en bdd
        $data = [
            'title' => $article->getTitle(),
            'header' => $article->getHeader(),
            'content' => $article->getContent(),
            'category_id' => $article->getCategoryId()
        ];

        // si la catégorie a un id, on est en update
        // sinon en insert
        $where = !empty($article->getId())? ['id' => $article->getId()] : null ;

        // appel à la méthode de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);

        // on set l'id quand on est en insert
        if (empty($article->getId())){
            $article->setId($this->db->lastInsertId());
        }
    }

    public function delete(Article $article){
        $this->db->delete('article',
            [
                'id' => $article->getId()
            ]
        );
    }

    private function buildEntity(array $data)
    {

        $category = new Category();

        $category
            ->setId($data['category_id'])
            ->setName($data['name'])
        ;

        $article = new Article();

        $article
            ->setId($data['id'])
            ->setTitle($data['title'])
            ->setHeader($data['header'])
            ->setContent($data['content'])
            ->setCategory($category)
        ;

        return $article;
    }
}