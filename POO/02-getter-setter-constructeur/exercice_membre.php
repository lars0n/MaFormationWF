<?php

//02-getter-setter-constructeur/Homme.class.php

// Consignes : Au regard de la classe ci-dessous, créez un membre affecter-lui un pseudo et un email et afficher les informations:

class membre
{
    private $pseudo;
    private $email;

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setPseudo($pseudo){
        if(!empty($pseudo) && strlen($pseudo) > 3 && strlen($pseudo) && is_string($pseudo))
        {
            $this->pseudo = $pseudo;
        }else {
            return false;
        }
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->email = $email;
        }else {
            return false;
        }
    }
}

$membre = new Membre;

$membre->setPseudo('larson');
$membre->setEmail('larson@mail.com');

echo 'Ton Pseudo est : ' . $membre->getPseudo() . ' et ton email est : ' . $membre->getEmail() . '! <br>';
