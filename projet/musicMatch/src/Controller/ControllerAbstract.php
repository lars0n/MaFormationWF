<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Description of ControllerAbstract
 *
 * @author Hello
 */
class ControllerAbstract {
    

    /**
     * @var Application
     */
    protected $app;

    /**
     * @var \Twig_Environement
     */
    protected $twig;

    /**
     *
     * @var Session
     */
    protected $session;
    
    /**
     * ControllerAbstract constructor.
     */
    public function __construct(Application $app)
    {
        $this->app  = $app;
        $this->twig = $app['twig'];
        $this->session = $app['session'];
    }

    /**
     * @param string $view
     * @param array $parameters
     * @return string
     */
    public function render($view, array $parameters = []){
        return $this->twig->render($view, $parameters);
    }
    
    /**
     * 
     * @param string $routeName
     * @param array $parameters
     * @return RedirectResponse
     */
    public function redirectRoute($routeName, array $parameters = [])
    {  
        return $this->app->redirect(
        $this->app['url_generator']->generate($routeName, $parameters)
        );
    }
    
    public function addFlashMessage($message, $type = 'success')
    {
        $this->session->getFlashBag()->add($type, $message);
    }
}
