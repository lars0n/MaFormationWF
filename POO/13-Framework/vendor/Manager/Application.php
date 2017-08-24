<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 28/07/2017
 * Time: 16:06
 */

namespace Manager;


final class Application
{
    private $controller;
    private $action;
    private $argument;

    // la fonction construct() va récupérer les infos dans l'url et les stocker
    //index.php?controller=article&action=afficheall
    //index.php?controller=article&action=affiche&id=6
    //index.php?controller=membre&action=inscription

    public function __construct()
    {
        if(isset($_GET['controller'])){
            if(file_exists(__DIR__ . '/../../src/Controller/' . ucfirst($_GET['controller']) . 'Controller.php')){
                $this->controller = 'Controller\\' . ucfirst($_GET['controller']) . 'Controller';
                // Si le controller existe bien dans mon dossier controller alors je stock son "nom" dans ma propriété $controller
            }else {
                require __DIR__ . '/../../src/View/404.html';
            }
        }else {
            $this -> controller = 'Controller\ArticleController';
            $this->action = 'afficheAll';
            // cela correspond finalement à notre homepage
        }

        if(isset($_GET['action'])){
            $this->action = $_GET['action'];
            // s'il y a une action dans l'URL alors je stock son "nom" dans la propriété $action.
        }else {
            $this -> controller = 'Controller\ArticleController';
            $this->action = 'afficheAll';
            // cela correspond finalement à notre homepage
        }

        // récupération de l'ID s'il y en a un :
        if(isset($_GET['id']) && !empty($_GET['id'])) {
            $this ->argument = (int) $_GET['id'];
        }

        // récupération de la catégorie s'il y a une:
        if(isset($_GET['cat']) && !empty($_GET['cat'])) {
            $this ->argument = (string) $_GET['cat'];
        }

        // recupérer du terme de recherche passé en post :
        if(isset($_POST['recherche']) && !empty($_POST['search'])) {
            // "recherche" sera le name de notre input type submit
            // "search" sera le name de notre input type text ou search
            $this -> controller = 'Controller\ArticleController';
            $this->action = 'recherche';
            $this->argument = $_POST['search'];
        }

    }

    // la fonction run() va instancier le bon controller, et lancer la bonne action (méthode)
    public function run(){
        if(!is_null($this->controller)){
            $a = new $this->controller;
            // j'instancie le controleur demandé dont on avait stocké le "nom" dans $this->>controller

            if(!is_null($this->action) && method_exists($a, $this->action)){
                //Si $this->action n'est pas null et que la méthode existe dans mon objet $a

                $action = $this->action;
                if(!is_null($this->argument)){
                    $a->$action($this->argument);
                    //$a->affiche(6)
                    //$a->categorie(chemise)
                }else {
                    $a->$action();
                    //$a->afficheall();
                }

            }else {
                require __DIR__ . '/../../src/View/404.html';
            }
        }else {
            require __DIR__ . '/../../src/View/404.html';
        }
    }
}