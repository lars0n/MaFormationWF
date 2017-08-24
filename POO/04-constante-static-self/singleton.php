<?php
//04-constante-static-self/singletonphp

// Design Pattern (patron de conception) : c'est une réponse trouvée par d'autres développeur à un probleme rencontré par la communauté.

// Singleton : c'est la réponse à la question suivante : Comment fiare pour créer une classe qui ne peut être instanciable qu'UNE SEULE ET UNIQUE FOIS ?

class Singleton
{
    private static $instance = NULL;
    private function __construct(){} // Fonction private, donc la classe ne peut être instanciée..
    private function __clone(){} // Fonction private, donc l'objet de la classe ne pourra pas être cloné
    
    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new Singleton;
            // self::$instance = new self;
        }
        return self::$instance;
    }


}


//---------
//$singleton = new Singleton; // IMPOSSIBLE!!!

$objet = Singleton::getInstance();
echo '<pre>';
var_dump($objet);
echo '</pre>';