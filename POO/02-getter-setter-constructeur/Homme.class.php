<?php

//02-getter-setter-constructeur/Homme.class.php

class Homme
{
    private $prenom; // propriété private
    private $nom; // propriété private

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($arg){
        if(!empty($arg) && strlen($arg) > 3 && strlen($arg) && is_string($arg))
        {
            $this->prenom = $arg;
        }else {
            return false;
        }
    }
}


//--------------------------
$homme = new  Homme;
// $homme->prenom = "lahcen"; // ERREUR : La propriété $prenom est private, je n'ai pas accès à l'exterieur de la classe.
$_POST['prenom'] = "lahcen";
$homme->setPrenom($_POST['prenom']);
echo 'prenom : ' . $homme->getPrenom();

/*
Commentaires :
    Pourquoi faire des getter et des setter ?
        - Le PHP est un langage qui ne type pas ses variables. il faut donc constament vérifier l'intégrite de celles-ci. Donc mettre une propriété en private, et créer les getter et setter,, permet de vérifier une seule fois l'intégrité des données.
        - Tout dev qui voudra affecter une  valeur DEVRA OBLIGATOIREMENT passer par le setter !
        ==> CECI EST UNE BONNE CONTRAINETE !

    $this représente l'objet en cours de manipulation.

    Setter : Affecter une valeur
    Getter : Récupérer la valeur

    Nous aurons autant de Getter/setter que de propriété private !
*/