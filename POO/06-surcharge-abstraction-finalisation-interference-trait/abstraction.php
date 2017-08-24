<?php
//06-surcharge-abstraction-finalisation-interface--trait/abstraction.php


abstract class Joueur
{
    public function seConnecter(){
        return $this -> etreMajeur();
    }

    abstract public function etreMajeur(); // une fonction abstraite n'a pas de corps !
}
//----------------------------

class JoueurFR extends Joueur
{
    public function etreMajeur(){
        return 18;
    }
}

//--------------------------

class JoueurUS extends Joueur
{
    public function etreMajeur(){
        return 21;
    }
}

/*
Commentaires:
    - une classe abstraite ne peut pas être instanciée
    - Les methodes abstraites n'ont pas de contenu
    - les methodes abstraites sont OBLIGATOIREMENT dans une classe abstraite
    - Lorsqu'on hérite d'une classe abstraite on DOIT OBLIGATOIREMENT redéfinir les méthodes abstraites
    - Une classe abstraite peut contenir des methodes normales.

    Le développeur qui écrit une classe abstraite est souvent au coeur de l'application. il va obliger les autre dev' à redéfinir des méthodes. CECI EST UNE BONNE CONTRAINTE !

*/