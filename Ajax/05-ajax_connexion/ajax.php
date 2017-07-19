<?php 
require("inc/init.inc.php"); 

    // récuperation des arguments dans post fournis via notre requete ajax (variable params)
    // écriture en ternaire
    $pseudo = (isset($_POST['pseudo'])) ? $_POST['pseudo'] : "";
    $mdp = (isset($_POST['mdp'])) ? $_POST['mdp'] : "";

    // ecriture classique
    /*
        if(isset($_POST['pseudo']))
        {
            $pseudo = $_POST['pseudo'];
        }else
        {
            $pseudo = '';
        }
    */

    // déclaration d'un tableau array qui contiendra notre réponse à la requete ajax
    $tab = [];
    // déclaration de l'indice dans le tableau array qui contiendra la reponse, c'est cet indice que l'on appelle dans l'évenement on readystatechange:
    $tab['resultat'] = "";

    // EXERCICE:
    // faire le contrôle si le pseudo et le mot de passe correspond à une entré de la bdd
    // s'il ya une erreur: renvoyer une chaine de caractères annonçant l'erreur à l'utilisateur
    //si le pseudo et le mdp sont ok envoyer un du type "vous étes connecté, vous etes pseudo de sexe (masculin /feminin), votre adresse mail est: maildelabdd@mail.fr 

    $req = $pdo->prepare("SELECT * FROM utilisateur WHERE pseudo = ? AND mdp = ?");
    $req->execute([$pseudo, $mdp]);

    $utilisateur = $req->fetch(PDO::FETCH_ASSOC);
    $sexe = ($utilisateur['sexe'] == 'm') ? "Masculin" : "Feminin";


    if($utilisateur)
    {
        $tab['resultat'] .= '<div class="alert alert-success"> vous étes connecté, vous etes ' . $utilisateur['pseudo']  . ' de sexe ' . $sexe . ', votre adresse mail est: ' . $utilisateur['email'] . '<div>';
    }else
    {
         $tab['resultat'] .= '<div class="alert alert-danger"> Erreur sur le pseudo ou le mot de passe.<Br> Veuillez recommencer !<div>';
    }

    echo json_encode($tab);
?>