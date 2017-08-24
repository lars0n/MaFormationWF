<?php

//01-classes-objet-instance-visibilite/Panier.class.php
/* En objet :
    Variable = Propriété
    Fonction = Méthode
*/

class Panier 
{
    public $nbProduit; // Propriété (défaut : NULL)

    // echo 'Bonjour !'; // ERREUR, tout le code des classes doit être ancapsulé dans des methodes (fonctions)

    public function ajouterProduit() {
        // Traitements de ma méthode
        return 'Le produit a été ajouté au panier !';
    }

    protected function retirerProduit() {
        return 'Le produit a été retiré au panier !';
    } 

    private function affichagePanier() {
        return 'Voici les produits dans le panier !';
    }
}

//---------------------------------------------------------

$panier = new Panier;
echo '<pre>';
var_dump($panier);
var_dump(get_class_methods($panier));
echo '</pre>';

$panier->nbProduit = 5; // J'affecte la valeur 5 à la propriété $nbProduit;
echo 'le nombre de produit dans le panier est : ' . $panier->nbProduit . '! <br />'; // Me retourne la valeur affectée dans la propriété $nbProduit de mon objet

echo 'Panier : ' . $panier->ajouterProduit() . '<br/>';

//echo 'Panier : ' . $panier->retirerProduit() . '<br/>';
//echo 'Panier : ' . $panier->affichagePanier() . '<br/>';
// En l'état, seuls les éléments public sont accessibles... 

$panier2 = new Panier;
echo '<pre>';
var_dump($panier2);
var_dump(get_class_methods($panier2));
echo '</pre>';
// La propriété nbProrduit de panier2 est NULL, alors que celle de panier contient la valeur 5.

/*
Commentaires :
    - new est un mot clé qui permet de créer un objet d'une classe. On parle d'instanciation.

    - On peur créer plusieurs objets d'une même classe.

    - Niveau de visibilité :
        --> public : les élements sont accessibles de partout
        --> protected : Les éléments sont accessible à l'interieur de class ou ils on ete déclarées et à l'interieur des classes héritières
        --> private : les éléments sont accessibles UNIQUEMENT à l'interieur de la classes ou ils sont déclarés
*/