<?php
//06-surcharge-abstraction-finalisation-interface--trait/interface.php

interface Mouvement {
    public function star();

    public function turnLeft();

    public function turnRight();
}

class Bateau implements Mouvement
{
    public function star(){
        //traitement de la méthode
    }

    public function turnLeft(){
        //traitement de la méthode
    }

    public function turnRight(){
        //traitement de la méthode
    }
}

class Avion implements Mouvement
{
    public function star(){
        //traitement de la méthode
    }

    public function turnLeft(){
        //traitement de la méthode
    }

    public function turnRight(){
        //traitement de la méthode
    }
}

/* 
    - Une interface est une liste de méthodes (sans contenu) qui permet de garantir que toutes les classes qui implements l'interface contiennent les mêmes méthodes. cela garentit les convention de nommage. c'est une sortre  de contrat passé entre le développeur maitre de l'application, et les autres dev.

    - une interface n'est pas instanciable. 
    - Par exemple : Bateau et Avion, apparttiennent au groupe "Véhicule", et partagent un point commun  "Mouvement" (implements).

    - Il est possible d'implémenter plusieurs interfaces (class H impléments I,J)
    - une classe peut hérité d'une autre classe et en même temps implémenter une ou plusieurs interface(s).
    - Les méthodes d'une interface sont forcement public, sinon elles ne pourraient pas être redéfinies.  
*/