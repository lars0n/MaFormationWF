<?php
    // inclusion du fichier contenant la connexion a la bdd ainsi que le lancement d'une session
    require("inc/init.inc.php");

    $tab = [];
    $tab['resultat'] = "";
    // rajout d'un indice dans le tableau array qui sera renvoyé nous permettan de faire un controle sur la disponibilité du pseudo.
    $tab['pseudo'] = true;

    // varaible de controle en cas d'erreur.
    $erreur = false;

    $pseudo             = (isset($_POST['pseudo'])) ? $_POST['pseudo'] : "";
    $sexe               = (isset($_POST['sexe'])) ? $_POST['sexe'] : "";
    $ville              = (isset($_POST['ville'])) ? $_POST['ville'] : "";
    $date_de_naissance  = (isset($_POST['date_de_naissance'])) ? $_POST['date_de_naissance'] : "";

    // requete en bdd pour vérifier si le pseudo existe déja.
    $resultat = $pdo->prepare("SELECT * FROM membre WHERE pseudo = ?");
    $resultat->execute([$pseudo]);
    // fetch
    $membre = $resultat->fetch(PDO::FETCH_ASSOC);

    // vérification si le pseudo existe déja:
    if(!$membre)
    {
        // ici le pseudo existe pas
        $inscription = $pdo->prepare("INSERT INTO membre (pseudo, sexe, ville, date_de_naissance, ip, date_connexion) VALUES  (?, ?, ?, ?, ?, NOW())");
        $inscription->execute([$pseudo, $sexe, $ville, $date_de_naissance, $_SERVER['REMOTE_ADDR']]);
        // $_SERVER['REMOTE_ADDR'] adresse ip de l'utiliateur

        // on récupère l'id inséré pour le placer dans un deuxieme temps dans la session
        $id_membre = $pdo->lastInsertId();
    }
    elseif($membre && $membre['ip'] == $_SERVER['REMOTE_ADDR']) {
        // si rowcount > 0 alors le pseudo existe mais il est possible que ce soit la même personne. On compare donc l'adresse ip en cours ($_SERVER['REMOTE_ADDR']) avec l'adresse ip enregistrée dans la bdd ($membre['id'])
        $id_membre = $membre['id_membre'];
        // on met donc à jour la date de connexion
        $pdo->query("UPDATE membre SET date_connexion = NOW() WHERE id_membre = $id_membre");
    }
    else {
        // si on rentre dans ce else, le pseudo existe déjà et l'adresse ip n'est pas la même que celle pré-enregistrée

        // on envoie un message d'erreur'
        $tab['resultat'] = '<p class="text-danger">Ce pseudo est déja utilisée, veuillez en choisir un autre !</p>';
        // on change la valeur de la variable $erreur nous permettant de tester dans ce script s'il y a eu une erreur'
        $erreur = true;
        // on change la valeur de $tab['pseudo'] afin de savoir s'il y a une erreur via javascript sur index.php
        $tab['pseudo'] = false;
    }

    // vérification s'il n'ya pas eu d'erreur au préalable:
    if(!$erreur) // si erreur est égal à false
    {
        // on inscrit dans la session des informations sur l'utilisateur
        $_SESSION['utilisateur'] = [];
        $_SESSION['utilisateur']['pseudo'] = $pseudo;
        $_SESSION['utilisateur']['sexe'] = $sexe;
        $_SESSION['utilisateur']['id_membre'] = $id_membre;

        // création d'un fichier pour inscrire les utilisateur présent sur le tchat
        $f = fopen("pseudo.txt", "a");
        if(filesize("pseudo.txt") === 0 ) // avant d'enregistrer l'information, on regarde si le fichier à une taille = 0, si c'est le cas alors c'est la première ligne du fichier
        {
            fwrite($f, $pseudo);
        }else 
        {
            // sin on rentre ici alors des pseudo sont déjà inscrit donc on commence par sauter une ligne.
            fwrite($f, "\n" . $pseudo);
        }
    }

    echo json_encode($tab);