<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 02/08/2017
 * Time: 12:45
 */

namespace Controller;

use Symfony\Component\HttpFoundation\Response;

class CategoryController extends  ControllerAbstract
{
    public function listAction()
    {
        // appel à la methode findAll() de la classe  Repository\CategoryRepository
        // nécessite qu'elle ait été déclarée en service dans src/app.php
        $categories = $this->app['category.repository']->findAll();

        return $this->render('category/list.html.twig',
            [
                'categories' => $categories
            ]
        );
    }

    public function showAction($category){
       $articles = $this->app['article.repository']->findArticleByCategory($category);
       $categories = $this->app['category.repository']->findAll();

       return $this->render('category/listcategory.html.twig',
           [
               'articles' => $articles,
               'categories' => $categories
           ]
       );
    }

}