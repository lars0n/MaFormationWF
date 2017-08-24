<?php
//06-surcharge-abstraction-finalisation-interface--trait/finalisation.php

final class Application
{
    public function run(){
        return 'L\'aplication se lance';
    }
}

//-------------------------------------------
$app = new Application;
echo $app->run();

//class Extension extends Application{} // Une class finale ne peut être héritée !

//-------------
//-------------
class Application2
{
    final public function run2(){
        return 'L\'aplication se lance';
    }
}

class Extension2 extends Application2
{
    public function run2(){} // Une méthode finale ne peut pas être redéfinie, ni surchargée.
}


/* 
Commentaires :
    - Une classe finale ne peut pas être héritée
    - Une classe finale peut être instanciée

    - Une méthode finale peut être présente dans une classe normale
    - Une méthode finale ne peut être surchargée, ni redéfinie. 
 */