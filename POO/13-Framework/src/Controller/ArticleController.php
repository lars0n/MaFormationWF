<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 28/07/2017
 * Time: 10:35
 */

namespace Controller;


class ArticleController extends Controller
{
    // Via l'héritage avec controller j'ai accès à getmodel() et à render().

    // Affichage de la page boutique
    public function afficheAll(){
        //1 : Recupérer tous les produits
        //2 : Recupérer toutes les categories
        //3 : Envoyer la  vue boutique.html

        $articles = $this->getModel()->getAllArticles();
        $categories = $this->getModel()->getAllCategories();

        $params = ['articles' => $articles, 'categories' => $categories, 'title' => 'Home | Mon site'];

        return $this->render('layout.html','boutique.html', $params);
    }

    // Affichage d'une page article
    public function affiche($id){
        //1 : Récupérer le article
        //1.2 : récupérer toutes les suggestions
        //2 : afficher la vue fiche_article.html

        $article = $this->getModel()->getArticleById($id);

        $params = ['article' => $article, 'title' => $article->getTitre() . ' | Mon site'];

        return $this->render('layout.html','fiche_article.html', $params);
    }

    // Affichage des articles d'une categorie:
    public function categorie($categorie){
        //1 : Récupérer tous les articles d'une categorie
        //2 : Recupérer toutes les categories
        //3 : Envoyer la  vue boutique.html

        $articles = $this->getModel()->getAllArticlesByCategorie($categorie);
        $categories = $this->getModel()->getAllCategories();

        $params = ['articles' => $articles, 'categories' => $categories, 'title' => $categorie . ' | Mon site'];

        return $this->render('layout.html','boutique.html', $params);
    }
}