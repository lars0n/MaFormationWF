<?php
    require('inc/init.inc.php');

    $champ_user = [];
    $nbr_homme  = 0;
    $nbr_femme  = 0;

    $champ_user = getChamp('annuaire', $pdo);

    $info_users = $pdo->query("SELECT * FROM annuaire");

    if(isset($_GET['action']) && $_GET['action'] == 'suppresion' && is_numeric($_GET['id']))
    {
        $id_annuaire = $_GET['id'];
        $query = "DELETE FROM annuaire WHERE id_annuaire = ?";
        delete_user_db($query, $id_annuaire, $pdo);

        header("location:affichage_annuaire.php");
    }

    //-------------- import la vue html de la page ----------------//
    require('vue/affichage_annuaire.vue.php');