<?php
//04-constante-static-self/Maison.class.php

class Maison{
    public $couleur = 'blanc'; // Appartient à l'objet
    public static $espaceTerrain = '500m2';// Appartient à la classe
    private $nbPorte = 10; // Appartient à l'objet
    private static $nbPiece = 7; // Appartient à la classe
    const HAUTEUR = '10m'; //Appartient à la class

    public function getNbPorte(){
        return $this -> nbPorte;
    }

    public static function getNbPiece(){
        return self::$nbPiece;
        //return Maison::$nbPiece; // peut marcher mais pas consieller
    }

}
echo 'Terrain : ' . Maison::$espaceTerrain . '<br>';// OK ! j'accède à un élément de la classe par la classe.
echo 'Nombre de piece : ' . Maison::getNbPiece() . '<br>';// OK ! j'accède à un élément private de la classe via un getter appartenant a la classe.
echo 'Hauteur : ' . Maison::HAUTEUR . '<br>';// OK ! j'accède à un élément appartenant a la classe via la classe.


$maison = new Maison;
echo 'couleur : ' . $maison -> couleur . '<br/>'; // OK, j'accède à une propriété public via l'objet.
//echo 'Terrain : ' . $maison -> espaceTerrain . '<br/>';// ERREUR, J'essaie d'accéder à une propriété appartenant à la classe par l'objet.
//echo 'Nombre de porte :' . $maison -> nbPorte . '<br>'; // Erreur : private -> getter
echo 'Nombre de porte :' . $maison -> getNbPorte() . '<br>';// OK j'accède à un élément appartenant à l'objet, et private via un getter appartenant à l'objet.

/*
Commentaires :
    Opérateurs:
        $objet ->   : élement d'un objet à l'extérieur de la classe
        $this ->    : élément d'un objet à l'intétieur de la classe
        class::     : élément d'une classe à l'exterieur de la classe
        self::      : élément d'une classe à l'intérieur de la classe

    2 questions à se poser :
        - EST-ce que l'élément est static ?
            -> Si oui ( class:: / self:: ]
                - EST-ce que je suis à l'intérieur ou à l'exterieur de la classe ?
                    -> intérieur : self::
                    -> extérieur : Class::

            -> Si non ($objet -> / $this ->)
                -est-ce que je suis à l'intérieur ou à l'extérieur de la classe ?
                    -> intérieur : $this  ->
                    -> extérieur : $objet ->

    Static signifie qu'un élément appartiebnt à la classe. Pour y accéder on devra donc l'appeler par la classe (class:: ou self::). Une propriété static peut etre modifié, et tous les objets qui suivront auront la nouvelle valeur (exemple : singleton).

    Const signifie qu'une propriété appartient à la classe et qu'elle ne peut pas être modifiée.
*/