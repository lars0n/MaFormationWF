<?php

use Controller\Admin\ArticleController;
use Controller\Admin\CategoryController;
use Controller\CategoryController as AdminCategoryController;
use Controller\IndexController;
use Controller\UserController;
use Repository\ArticleRepository;
use Repository\CategoryRepository;
use Repository\UserRepository;
use Service\UserManager;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...
    //pour accéder au UserManager dans les templates twig
    $twig->addGlobal('user_manager', $app['user.manager']);

    return $twig;
});
$app->register(
    new DoctrineServiceProvider(),
    [
        'db.options' =>[
            'dbname'   => 'silex_blog',
            'password' => ''
        ]
    ]
);

/* $app['session'] = gestionnaire de session symphony */
$app->register(
    new Silex\Provider\SessionServiceProvider()
);


// CONTROLLER

// FRONT
$app['index.controller'] = function () use ($app){
  return new IndexController($app);
};

$app['category.controller'] = function () use ($app){
    return new AdminCategoryController($app);
};

$app['user.controller'] = function () use ($app){
    return new UserController($app);
};


// BACK
$app['admin.category.controller'] = function () use ($app){
    return new CategoryController($app);
};

$app['admin.article.controller'] = function () use ($app){
    return new ArticleController($app);
};

// REPOSITORY
$app['category.repository'] = function () use ($app){
  return new CategoryRepository($app);
};

$app['article.repository'] = function () use ($app){
    return new ArticleRepository($app) ;
};

$app['user.repository'] = function () use ($app){
    return new UserRepository($app) ;
};

/* Autre SERVICE */

$app['user.manager'] = function () use ($app){
    return new UserManager($app['session']);
};

return $app;
