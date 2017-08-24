<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 27/07/2017
 * Time: 10:22
 */

class Config
{
    protected $parameters;

    public function  __construct()
    {
        require __DIR__ . '/Config/parameters.php';
        $this->parameters = $parameters;
        // Au moment ou j'instancierai ma classer config, je récupere les parameters du site pour les stocker dans la propriété $parameters.
    }

    public function getParametersConnect(){
        return $this->parameters['connect'];
        //Cette fonction me retourne seulement la partie connexion des paramètre. Ell sera utile à PDOManager.
    }
}

//$config = new Config();
//echo '<pre>';
//print_r($config->getParametersConnect());
//echo '</pre>';