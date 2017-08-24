<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

/* FRONT */

$app->get('/', 'index.controller:indexAction')
->bind('homepage')
;


$app->get('/article/{id}', 'index.controller:articleAction')
    ->assert('id', '\d+') // id doit etre un nombre
    ->bind('article')
;

// category
$app->get('/categorie/{category}', 'category.controller:showAction')
    ->bind('category')
;

$app->get('/rubrique/liste', 'category.controller:listAction')
    ->bind('category_list')
;


// utilisateur
$app->match('/utilisateur/inscription', 'user.controller:registerAction')
    ->bind('user_register')
    ;

$app->match('/utilisateur/connexion', 'user.controller:loginAction')
    ->bind('user_login')
    ;

$app->match('/utilisateur/deconnexion', 'user.controller:logoutAction')
    ->bind('user_logout')
;

/* BACK */

// crée un groupe de routes
$admin = $app['controllers_factory'];

// pour toutes les routes du groupe admin,
// si on n'est pas connecté en admin, on se prend une 403
$admin->before(function () use ($app){
    if (!$app['user.manager']->isAdmin()) {
        $app->abort(403, 'accès refusé');
    }
});

// category route

$admin
    ->get('/rubriques', 'admin.category.controller:listAction')
    ->bind('admin_categories')
;

// la route match à la fois /rubrique/edition et /rubrique/edition/1
$admin
    ->match('/rubrique/edition/{id}', 'admin.category.controller:editAction')
    ->value('id', null) // valeur par défault pour l'id
    ->bind('admin_category_edit')
;

$admin
    ->get('/rubrique/suppression/{id}', 'admin.category.controller:deleteAction')
    ->assert('id', '\d+') // id doit etre un nombre
    ->bind('admin_category_delete')
;

// ARticle Route

$admin
    ->get('/articles', 'admin.article.controller:listAction')
    ->bind('admin_articles')
;

$admin
    ->match('/article/edition/{id}', 'admin.article.controller:editAction')
    ->value('id', null) // valeur par défault pour l'id
    ->bind('admin_article_edit')
;

$admin
    ->get('/article/suppression/{id}', 'admin.article.controller:deleteAction')
    ->assert('id', '\d+') // id doit etre un nombre
    ->bind('admin_article_delete')
;

// toutes les routes définies par $admin
// auront une URL commençant par /admin sans avoir à l'ajouter dans chaque route
$app->mount('/admin', $admin);


/*
 * Créer la partie admin pour les articles :
 * - Crér le controleur Admin\ArticleControlle qui hérite de controlleAbstract
 * - le définir en service dans src/app.php
 * - y ajouter la méthode listeAction() qui va rendre la vue admin/article/list.html.twig
 * - créer la vue
 * - créer la route qui pointe sur l'action de controleur
 * - ajouter un lien vers cette route dans la navbar admin
 * - créer l'entity Article et le repository ArticleRepository qu hérite de RepositoryAbstract
 * - déclarer le repository en service dans
 * - remplir la méthode listAction() en utilisant ArticleRepository
 * - faire l'affichage en tableau HTML dans la vue
 */


/* Gestion Erreur */

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
