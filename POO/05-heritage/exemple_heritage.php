<?php
//05-heritage/exemple_heritage.php

class Membre
{
    public $id_membre;
    public $pseudo;
    public $email;

    public function seConnecter() {
        return 'je me connecte!';
    }

    public function inscription() {
        return 'je m\' inscris !';
    }

}

//--------------------------------

class Admin extends Membre // La  classe Admin hérite de la classe Membre
{
    // c'est comme ci, tout le code de Membre était présent ici!
    
    public function accesBackOffice(){
        return 'j\'ai accès au BO !';
    }
}

//--------------
$admin = new Admin;
echo $admin -> seConnecter() . '<br/>';
echo $admin -> inscription() . '<br/>';
echo $admin -> accesBackOffice() . '<br/>';

/*
Commentaires :
    dans notre site, un admin c'est avant tout un Membre, avec une fonctionnalité supplémentaire : L'accès au backOffice.
    Il est donc naturel que la classe Admin extends la classe Membre et qu'on ne ré-écrive pas tout le code deux fois !
*/
