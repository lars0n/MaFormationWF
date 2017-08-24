<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 02/08/2017
 * Time: 10:46
 */

namespace Controller;


class IndexController extends ControllerAbstract
{
    public function indexAction(){
        $articles = $this->app['article.repository']->findAll();
        $categories = $this->app['category.repository']->findAll();

        return $this->render('index.html.twig',
            [
                'articles' => $articles,
                'categories' => $categories
            ]
        );
    }

    public function articleAction($id){
        $article = $this->app['article.repository']->find($id);
        $articles = $this->app['article.repository']->findArticleByCategory($article->getCategoryName(), 5);

        return $this->render('article/article.html.twig',
            [
                'article' => $article,
                'articles' => $articles
            ]
        );
    }

}