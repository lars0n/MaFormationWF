<?php
    require('inc/init.inc.php');

    $info_user = [];
    $error     = false;

    $info_user = getChamp("annuaire", $pdo);

    if(champ_isset($info_user))
    {

        $info_user = getUser($info_user, $_POST);

        if(empty($info_user['nom']) && !is_numeric($info_user['telephone']) && !is_numeric($info_user['codepostale']))
        {
            $error = true;
        } 

        if(!$error) 
        {
            if(isset($_GET['action']) && $_GET['action'] == 'modification') 
            {
                $query = "UPDATE annuaire SET nom = ?, prenom = ?, telephone = ?, profession = ?, ville = ?, codepostale = ?, adresse = ?, date_de_naissance = ?, sexe = ?, description = ? WHERE id_annuaire = ?";
                update_user_db($query,$info_user, $pdo);

            }else {
                add_user_db($info_user, $pdo);
            }

        }else {
            $message_flash .= '<div class="alert alert-danger"><strong>Attention</strong>, Vérifier vos champs .</div>';
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 'modification') 
    {
        $req_info_user = $pdo->prepare("SELECT * FROM annuaire WHERE id_annuaire = ?");
        $req_info_user->execute([$_GET['id']]);

        $resultat_info_user = $req_info_user->fetch(PDO::FETCH_ASSOC); 
  
        $info_user = getChamp("annuaire", $pdo);
        $info_user = getUser($info_user, $resultat_info_user);
    }

    //echo '<pre>'; print_r($info_user); echo '</pre>';
    //echo '<pre>'; print_r($_POST); echo '</pre>';

    //-------------- import la vue html de la page ----------------//
    require('vue/formulaire.vue.php');

