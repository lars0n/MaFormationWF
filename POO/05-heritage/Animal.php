<?php
//05-heritage/Animal.php

class Animal
{
    protected function deplacement(){
        return 'je me déplace';
    }

    public function manger(){
        return 'je mange';
    }
}

//--------------------------

class Elephant extends Animal
{
    public function quiSuisJe(){
        return 'je suis un éléphant et ' . $this-> deplacement() . ' !';
        // Je peux appeler la méthode deplacement avec $this -> car on hérite également des méthodes protected.
    }
}


class Chat extends Animal
{
     public function quiSuisJe(){
        return 'je suis un chat !';
    }

    public function manger(){
        return 'je mange peu... car je suis un chat!';
        // la fonction manger() existe déja dans la  classe mère (Animal)... mais puisque mon entité Chat a des caractéristiques particulieres (manger peu) on pzut REDEFINIR une méthode hérité.
    }
}

$eleph = new Elephant;
echo 'elephant : ' . $eleph -> quiSuisJe() . '<br>';
echo 'elephant : ' . $eleph -> manger() . '<hr>';

$chat = new Chat;
echo 'chat : ' . $chat -> quiSuisJe() . '<br>';
echo 'chat : ' . $chat -> manger() . '<hr>';


/*
Commentaire : 
    L'héritage est un des fondements de la programation orientée objet.
    Lorsqu'une classe hérite d'une autre classe, elle importe tout le code. les éléments sont donc appelés avec $this -> (à l'intérieur de la classe).

    redéfinition : Une classe enfant (héritière) peut modifier ENTIEREMENT le comportement d'une méthode dont elle a héritée. lors de l'éxécution, l'interpreteur va dans un premier temps regarder dans la classe enfant si la methode existe... puis dans la classe mere. 

    REDEFINITION != SURCHARGE (voir chapitre 6)
*/
