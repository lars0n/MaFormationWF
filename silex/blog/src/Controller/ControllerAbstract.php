<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 02/08/2017
 * Time: 10:52
 */

namespace Controller;


use Silex\Application;

abstract class ControllerAbstract
{

    /**
     * @var Application
     */
    protected $app;

    /**
     * @var \Twig_Environement
     */
    protected $twig;

    /**
     * @var Symfony\Component\HttpFoundation\Session\Session
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
    public function render ($view, array $parameters = []){
        return $this->twig->render($view, $parameters);
    }

    public function redirectRoute($routeName, array $parameters = []){
        return $this->app->redirect(
            $this->app['url_generator']->generate($routeName, $parameters));
    }

    public function addFlashMessage($message, $type = 'success'){
        $this->session->getFlashBag()->add($type, $message);
    }
}