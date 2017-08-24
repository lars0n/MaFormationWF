<?php 
//03-manipulation-type-argument/exercice3.php

class Vehicule
{
    private $litreEssence;
    private $reservoire; // capacité max de reservoir

    public function getLitreEssence() {
        return $this->litreEssence;
    }
    public function setLitreEssence($littre) {
        $this->litreEssence = $littre;
    }

    public function getReservoire() {
        return $this->reservoire;
    }
    public function setReservoire($littre) {
        $this->reservoire = $littre;
    }
}

class Pompe
{
    private $litreEssence; // 800 contenu à un instant T

    public function getLitreEssence() {
        return $this->litreEssence;
    }
    public function setLitreEssence($littre) {
        if($littre <= 0 ){
            $this->litreEssence = 'la station est a sec, revenez plus tard';
        }else{
            $this->litreEssence = $littre;
        }
    }

    /*// Fonction pour la consigne 8...
    public function faitLePlein(Vehicule $voiture) {
        // on stock dans une variable la quantité nécessaire pour faire le plein dans le véhicule (soit 50 - ce qu'il ya déja')
        $besoin = $voiture->getReservoire() - $voiture->getLitreEssence();
        //Modifier le contenu de ma pompe passant de 800 à 755 L (soit 800 - ce qu'a besoin le vehicule')
        $this->setLitreEssence($this->getLitreEssence() - $besoin);

        //Modifier le contenu de mon véhicule passant de 5 à 50 (soit ce qu'il ya déja plus la capacité max moins ce qu'il a déja)
        $voiture->setLitreEssence($voiture->getLitreEssence() + $besoin);
    }*/

    // Fonction pour la consigne 8...
    public function faitLePlein(Vehicule $voiture) {
        // on stock dans une variable la quantité nécessaire pour faire le plein dans le véhicule (soit 50 - ce qu'il ya déja')
        $besoin = $voiture->getReservoire() - $voiture->getLitreEssence();
        //Modifier le contenu de ma pompe passant de 800 à 755 L (soit 800 - ce qu'a besoin le vehicule')
        $this->setLitreEssence( $this->getLitreEssence() - $besoin );
        
        //Modifier le contenu de mon véhicule passant de 5 à 50 (soit ce qu'il ya déja plus la capacité max moins ce qu'il a déja)
        $voiture->setLitreEssence($voiture->getReservoire());
    }
}

//---------------------

$clio = new Vehicule;

$clio->setLitreEssence(5);
echo 'La voiture à : ' . $clio->getLitreEssence() . ' Litres d\'essence.<br>';
$clio->setReservoire(50);

$shell = new Pompe();
$shell->setLitreEssence(40);
echo 'La Pompe à : ' . $shell->getLitreEssence() . ' Litres d\'essence.<hr>';

$shell->faitLePlein($clio);
echo 'je fais le plein <hr>';
echo 'La voiture à : ' . $clio->getLitreEssence() . ' Litres d\'essence.<br>';
echo 'La Pompe à : ' . $shell->getLitreEssence() . ' Litres d\'essence.<br>';
