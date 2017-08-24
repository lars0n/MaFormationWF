<?php

use Controller\BibliothequeController;
use Controller\DemoController;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\FormServiceProvider;
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

    return $twig;
});

/*
 * ajout de doctrine dbal au projet($app['db']
 *
 * nécessite l'installation par composer:
 * composer require doctrine/dbal: ~2.2
 * en ligne de commande dans le repertoire de l'application
 */

$app->register(new DoctrineServiceProvider(),
    [
        'db.options' => [
            'driver'    => 'pdo_mysql',
            'host'      => 'localhost',
            'dbname'    => 'wf3_bibliotheque',
            'user'      => 'root',
            'password'  => '',
            'charset'   => 'utf8'
        ]
    ]
);
$app->register(new FormServiceProvider());

// ajout du controleur au conteneur de service
$app['demo.controller'] = function (){
  return new DemoController();
};

// ajout du controleur au conteneur de service
$app['bibliotheque.controller'] = function() {
    return new BibliothequeController();
};

return $app;
