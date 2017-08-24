<?php

//02-getter-setter-constructeur/Etudiant.class.php

class Etudiant
{
    private $prenom;

    public function __construct($prenom) {
        $this->setPrenom($prenom);
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
}

//-----------------------------------------
$etudiant = new Etudiant('lahcen');
echo $etudiant->getPrenom();

/*
Commentaire :
    - La methode magique __construct() s'execute automatiquement au moment de l'instanciation.
    - il n'est pas obligatoire de la déclarer, en théorie on ne la déclare que si on a besoin d'automatiser un traitement.
    - On l'utilise souvent pour déployer automatiquement notre application (instance sans héritage par exemple, voir chapitre 5).
    - Toutes les methodes magiques s'ecrivent avec le double underscore (__)
*/