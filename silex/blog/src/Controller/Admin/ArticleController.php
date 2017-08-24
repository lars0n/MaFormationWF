<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 03/08/2017
 * Time: 16:22
 */

namespace Controller\Admin;


use Controller\ControllerAbstract;
use Entity\Article;
use Entity\Category;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends ControllerAbstract
{

    public function listAction(){
        $articles = $this->app['article.repository']->findAll();
        return $this->render('admin/article/list.html.twig',
            [
                'articles' => $articles
            ]
        );
    }

    public function editAction(Request $request,$id = null){

        if($id == true){
            // on va chercher l'article en bdd
            $article = $this->app['article.repository']->find($id);

            if(!$article instanceof Article){
                $this->app->abort(404);
            }
        }else{
            // nouvelle article
            $article = new Article();
            // on créer un nouvelle category que l'on enregistre dans article($category)
            $article->setCategory(new Category());
        }

        $categories = $this->app['category.repository']->findAll();
        $errors = [];

        if($request->isMethod('POST')){
            $article->setTitle($request->request->get('title'));  // $_POST[title]
            $article->setHeader($request->request->get('header'));
            $article->setContent($request->request->get('content'));
            $article->getCategory()->setId($request->request->get('category'));

            if(empty($_POST['title'])){
                $errors['title'] = 'Le titre est obligatoire';
            }elseif(strlen($_POST['title']) > 100){
                $errors['title'] = 'Le titre ne doit pas faire plus de 100 caractères';
            }

            if(empty($_POST['header'])) {
                $errors['header'] = 'Le header est obligatoire';
            }

            if(empty($_POST['content'])) {
                $errors['content'] = 'Le Contenu est obligatoire';
            }

            if(empty($_POST['category'])) {
                $errors['category'] = 'La rubrique est obligatoire';
            }

            if(empty($errors)){
                $this->app['article.repository']->save($article);
                if($id == true){
                     $this->addFlashMessage('L\' article est modifié');
                }else{
                    $this->addFlashMessage('L\' article est enregistré');
                }
                return $this->redirectRoute('admin_articles');
            }else {
                $message = '<strong>Le formulaire contient des erreurs :</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }

        return $this->render('admin/article/edit.html.twig',
            [
                'article' => $article,
                'categories' => $categories
            ]
        );

        //return $this->render('admin/article/edit.html.twig');
    }

    public function deleteAction($id){
        // on va chercher l'article en bdd
        $article = $this->app['article.repository']->find($id);

        if(!$article instanceof Article){
            $this->app->abort(404);
        }

        $this->app['article.repository']->delete($article);

        $this->addFlashMessage('L\' article  est supprimée');

        return $this->redirectRoute('admin_articles');
    }
}