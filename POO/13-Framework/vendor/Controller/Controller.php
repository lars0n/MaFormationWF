<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 28/07/2017
 * Time: 10:17
 */

namespace Controller;

use Model;

class Controller
{
    protected $model; // Contiendra un objet model correspondant au controller dans lequel je suis. (ex : ArticleController ---> ArticleModel)

    public function getModel(){
        // get_called_class() = Controller\ArticleController
        //Article
        //new Model\ArticleModel

        $class = 'Model\\' . str_replace(['Controller\\', 'Controller'], '', get_called_class()) . 'Model';
        // La ligne ci-dessus à transformé "Controller\ArticleController" en "Model\ArticleModel"

        $this->model = new $class;
        //$this-> model = new Model\ArticleModel;

        return $this->model;
    }

    public function render($layout, $view, array $params){
        $dirView = __DIR__ . '/../../src/View/';
        $dirFile = str_replace(['Controler\\', 'Controller'], '', get_called_class());
        // La ligne ci-dessus prend le nom du controller dans lequel je suis (ex : Controller\ArticleController)
        // et le transforme pour obtenir le nom de mon entité (ex : Article) et donc le dossier ou se trouvent mes vues.

        $path_view = $dirView . $dirFile . '/' . $view ;
        //c://xampp/htdocs/PHPoo/13-framework/src/view/Article/boutique.html

        $path_layout = $dirView . $layout ;
        //c://xampp/htdocs/PHPoo/13-framework/src/view/layout.html

        extract($params);
        // grace a ce extract(), les indices de mon array $params deviennent des variables dans ma vue

        //------------------------------------
        ob_start(); // Cela enclenche la temporisation de sortie. C'est à dire que la ligne qui suit ne va pas être exécutée mais retenue en mémoire tampon.
        require $path_view;

        $content = ob_get_clean(); // Ca va mettre dans la variable $ content ce qui a été précédement retenu (le require de ma vue)

        ob_start();
        require $path_layout;

        return ob_end_flush(); // retourne tout ce qui a été retenue en memoire. Il éteint la temporisation.
    }
}