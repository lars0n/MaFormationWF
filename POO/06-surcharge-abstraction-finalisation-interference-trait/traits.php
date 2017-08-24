<?php
//06-surcharge-abstraction-finalisation-interface--trait/traits.php

// Attention : Les traits ne fonctionnent que depuis php 5.4

trait TPanier
{
    public function affichageProduit(){
        return 'Voici les produits dans le panier !';
    }
}

trait TPanier
{
    public function affichageMembre(){
        return 'Voici le Membre !';
    }
}

class Site
{
    use TPanier;
    use TMembre;
    // use TPanier, TMembre
    // Cela importe le code présent dans TPanier, TMembre

}

/* 
Commentaires :
    - Les traits ont été inventés pour repousser l'héritage non multiple du PHP
    - Une classe peut hérité d'une seule classe, mais elle peut importer plusieurs traits.
    - Un trait peut importer un autre trait.
 */