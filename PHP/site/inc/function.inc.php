<?php

function pre($var) {
    echo '<pre>';print_r($var); echo '</pre>';
}

// fonction pour savoir si un utilisateur est connecté
function utilisateur_est_connecte()
{
    if(isset($_SESSION['utilisateur']))
    {
        // si l'indice utilisateur existe alors l'utilisateur est connecté car il est passé par la page de connexion
        return true; // si on passe sur cette ligne, on sort de la fonction et le return false en dessous ne sera pas pris en compte.
    }
    return false; // si on rentre pas dans le if, on retourne false.
}

// fonction pour savoir si un utilisateur est connecté mais aussi a le statut administrateur.

function utilisateur_est_admin()
{
    if(utilisateur_est_connecte() && $_SESSION['utilisateur']['statut'] == 1)
    {
        return true;
    }
    return false;
}

//création du panier 
function creation_panier() 
{
    if(!isset($_SESSION['panier']))
    {
        $_SESSION['panier']                 = [];
        $_SESSION['panier']['id_article']   = [];
        $_SESSION['panier']['prix']         = [];
        $_SESSION['panier']['quantite']     = [];
        $_SESSION['panier']['titre']        = [];
    }
}

// function pour ajouter un article dans le panier
function ajouter_un_article_au_panier($id_article, $prix, $quantite, $titre, $photo) 
{
    // avant d'ajouter, on vérifie si l'article n'est pas déja présent dans le panier, si c'est le cas, on ne fait que modifier sa quantité.
    $position = array_search($id_article, $_SESSION['panier']['id_article']);
    // array_search() permet de vérifier si une valeur se trouve dans un tableau array. si c'est les cas, on récupère l'indice correspondant

    if($position !== FALSE)
    {
        $_SESSION['panier']['quantite'][$position] += $quantite; 
    }else
    {
        $_SESSION['panier']['id_article'][]   = $id_article;
        $_SESSION['panier']['prix'][]         = $prix;
        $_SESSION['panier']['quantite'][]     = $quantite;
        $_SESSION['panier']['titre'][]        = $titre;
        $_SESSION['panier']['photo'][]        = $photo;
    }
}

// retirer un article du panier

function retirer_article_du_panier($id_article) 
{
    $position = array_search($id_article, $_SESSION['panier']['id_article']);
    // on vérifie si l'article est bien présent dans le  panier et avec array_search on récupère son indice correspondant.

    if($position !== false)
    {
        array_splice($_SESSION['panier']['id_article'], $position, 1);
        array_splice($_SESSION['panier']['prix'],       $position, 1);
        array_splice($_SESSION['panier']['quantite'],   $position, 1);
        array_splice($_SESSION['panier']['titre'],      $position, 1);
        array_splice($_SESSION['panier']['photo'],      $position, 1);
        // array_splice() permet de supprimer un élement dans un tableau et surtout de réordonner les indices afin de ne pas avoir de trou dans notre tableau.
        // array_splice(le_tableau_concerné, indice_a_supprimer, nb_d_element_a_supprimer)
    }
}

function montant_total() 
{
    // calcule du montant total du panier
    $taille_tableau = count($_SESSION['panier']['titre']);
    $total = 0;
    for ($i=0; $i < $taille_tableau ; $i++) { 
                                        
        $total += $_SESSION['panier']['prix'][$i] * $_SESSION['panier']['quantite'][$i];
        $total = $total/1.2;                                   
    }

    return $total;
}