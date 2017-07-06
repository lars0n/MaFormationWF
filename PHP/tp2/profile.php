<?php
    require('inc/init.inc.php');

    if(isset($_GET['id']) && is_numeric($_GET['id']))
    {
        $req_info_user = $pdo->prepare("SELECT * FROM annuaire WHERE id_annuaire = ?");
        $req_info_user->execute([$_GET['id']]);

        $info_user = $req_info_user->fetch(PDO::FETCH_OBJ); 
    }

    //-------------- import la vue html de la page ----------------//
    require('vue/profile.vue.php');