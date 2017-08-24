<?php
//06-surcharge-abstraction-finalisation-interface--trait/surcharge.php

// Surcharge (Override) : Permet de modifier le comportement d'une méthode héritée et d'y appoerter des traitements supplémentaires.
// Surcharge != redéfinition

class A 
{
    public function calcul(){
        return 10;
    }
}

class B extends A
{
    public function calcule(){
        // returne 15 ()

        // return $this->calcul() + 5; // Cela est récursif, car en utilisant $this->la fonction fait donc appel à elle-même.
        //return self::calcul() + 5; // FAUX

        return parent::calcule() + 5;
        //return A::calcule() + 5; // un peu ambigue
        // Avec les deux proposition ci-dessus, on fait réellement appel à la méthode ne NOTRE PARENT (class A) 

    }
}

/* 
Commentaires :
    La surcharge est trés utile dans le cadre de l'héritage, car permet d'ajouter (modifier) des traitements dans une méthode héritée.
    Par exemple, lorsque l'on travaille sur un CMS ou un FRAMEWORK, on n'a pas le droit de toucher au fichiers du coueur de l'application, mais on peut hériter de certaines classe, et potentiellement modifier les traitements de certaines méthodes.
 */