<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 31/07/2017
 * Time: 16:05
 */

namespace Controller;

use Silex\Application;


/**
 * Class DemoController
 * @package Controller
 */
class DemoController
{
    /**
     * @param Application $app
     * @return mixed
     */
    public function helloWorldAction(Application $app) {
        return $app['twig']->render('helloworld.html.twig', ['hello' => 'Hello World']);
    }

    /**
     * Le paramètre $name correspond à ce que contient {name} dans la route
     *
     * @param Application $app l'instance de Silex\Application
     * @param string $name La variable venant de l'url
     * @return mixed
     */
    public function helloAction(Application $app, $name) {
        return $app['twig']->render('hello.html.twig', ['name' => $name]);
    }

}