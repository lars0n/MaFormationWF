<?php

use Controller\DashboardController;
use Controller\ProfileController;
use Controller\UserController;
use Repository\ProfileRepository;
use Repository\UserRepository;
use Service\UserManager;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\LocaleServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use SpotifyWebAPI\Session;
use SpotifyWebAPI\SpotifyWebAPI;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider(),
        [
            'twig.form.templates' => [
                'bootstrap_3_layout.html.twig'
            ]
        ]
    );
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...
    
    return $twig;
});

$app->register(
    new DoctrineServiceProvider(),
        [
            'db.options' => [
                'driver' => 'pdo_mysql',
                'host' => 'localhost',
                'dbname' => 'bdd_projet',
                'user' => 'root',
                'password' => '',
                'charset' => 'utf8'
            ]
        ]
);

// $app['session'] = gestionnaire de session de symfony
$app->register(new SessionServiceProvider());
$app->register(new FormServiceProvider());
$app->register(new LocaleServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new TranslationServiceProvider(), array(
/*    'translator.domains' => [
        'messages' => [
            'en' => [
                'Email' => 'email'
            ]
        ]
    ],
*/
    'locale' => 'fr'
));

// ----------------- Controller ----------------- //
            
$app['user.controller'] = function() use($app){
    return new UserController($app);
};          
     
$app['profile.controller'] = function() use($app){
    return new ProfileController($app);
};
     
$app['dashboard.controller'] = function() use($app){
    return new DashboardController($app);
};
     


// ----------------- Repository ----------------- //

$app['user.repository'] = function() use($app){
    return new UserRepository($app);
};

$app['profile.repository'] = function() use($app){
    return new ProfileRepository($app);
};

// ----------------- Manager ----------------- //

$app['user.manager'] = function() use($app){
    return new UserManager($app['session']);
};

// ----------------- Service API Spotify ----------------- //

$app['spotify.api'] = function(){
    
    $session = new Session(
    '5caab53bc299402b84905322f4f2ab39', // Clé API public
    '0e0be2067ee84c0daeb725eda774164e' // Clé API privée
    );
    
    $api = new SpotifyWebAPI();
    
    // demande acces
    $session->requestCredentialsToken();
    $accessToken = $session->getAccessToken();

    // Set the code on the API wrapper
    $api->setAccessToken($accessToken);
    
    return $api;
};



return $app;
