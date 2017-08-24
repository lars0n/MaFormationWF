<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 27/07/2017
 * Time: 12:07
 */

use Manager\Application;

session_start();
require_once __DIR__ . '/../vendor/autoload.php';

// Lancement de l'application (interupteur) :
$app = new Application;
$app -> run();

//TEST 1 : Entity
//$article = new Entity\Article();
//$article -> setTitre('Mon super article');
//echo $article->getTitre();

//TEST 2 : PDOManager
//$pdom = Manager\PDOManager::getInstance();
//$resultat = $pdom -> getPdo()->query("SELECT * FROM article");
//$articles = $resultat->fetchAll(PDO::FETCH_ASSOC);

//echo '<pre>';
//print_r($articles);
//echo '</pre>';

//TEST 3 : Model
//$model      = new \Model\Model();
/*$infos = [
    'couleur' => 'blanc',
    'sexe'  => 'f'
];
//$model->update(1,$infos);
//$model->delete(4);
$articles = $model->findAll();
$article = $model->find(2);

echo '<pre>';
print_r($articles);
echo '</pre>';*/

//TEST 4 : ArticleModel
/*
$am = new Model\ArticleModel();

$produits    = $am->getAllArticles();
$produit     = $am->getArticleById(6);
$categories  = $am->getAllCategories();
$produit2    = $am->getAllArticlesByCategorie('chaussure');


echo '<pre>';
print_r($produit2);
echo '</pre>';
*/

//TEST 5 : ArticleControlleur
//$ac = new \Controller\ArticleController();
//$ac->afficheAll();
//$ac->affiche(9);
//$ac->categorie('chaussure');

