<?php 
    require_once("inc/init.inc.php");

    $tab = [];
    $tab['resultat'] = "";

    $arg    = isset($_POST['arg'])    ? $_POST['arg'] : "";
    $mode   = isset($_POST['mode'])   ? $_POST['mode'] : "";

    if($mode == 'liste_membre_connecte' && !empty($arg) && $arg == "retirer")
    {
        // si on rentre ici, nous devons retirer un pseudo du fichier pseudo.txt // attention au sens entre cette condition et la suivante car la valeur de $mode est la meme pour les deux.

        // on récupere le contenu de pseudo.txt
        $contenu = file_get_contents("pseudo.txt");

        // on remplace dans la chaine de caracteres representée par $contenu le pseudo par rien (pour le supprimer)
        $contenu = str_replace($_SESSION['utilisateur']['pseudo'], '', $contenu);

        // on remet le contenu modifieé dans le fichier
        file_put_contents('pseudo.txt', $contenu);
    }
    elseif($mode == 'liste_membre_connecte'){
        // si on rentre ici, nous récupérer la liste  des membre sur le fichier pseudo.txt puis la renvoyer
        $fichier = file('pseudo.txt');
        if(!empty($fichier)){
            $tab['resultat'] .= '<p>' . implode('<p></p>', $fichier) . '</p>';
        }
    }elseif($mode == "postMessage")
    {
        // si la valeur est égal à postMessage alors nous devons enregistrer le messsage de l'utilisateur en BDD
        if(!empty($arg)) // $arg est censé contenir le message à enregistrer, donc s'il n'est pas vide on l'enregistre'
        {
            $id = $_SESSION['utilisateur']['id_membre'];
            $enregistrement = $pdo->prepare("INSERT INTO dialogue (id_membre, message, date_dialogue) VALUES ($id, :message, NOW())");
            $enregistrement->bindParam(":message", $arg, PDO::PARAM_STR);
            $enregistrement->execute();

            $tab['resultat'] .= '<br><p>Message enregistré</p>';
        }
    }elseif($mode == "message_tchat")
    {
        // Exercice: récupérer tous les messages de la bdd ainsi que les pseudos correspondant
        // les renvoyer dans $tab['resultat']
        // chaque message  doit etre affiché sous la forme: pseudo > message
        // faire en sorte que les message postés par hommes en bleu femme en rose
        $messages = $pdo->query("SELECT dialogue.id_membre, dialogue.message, membre.pseudo, membre.sexe FROM dialogue, membre WHERE dialogue.id_membre = membre.id_membre ORDER BY date_dialogue");

        while($message = $messages->fetch(PDO::FETCH_OBJ))
        {
            $couleur = ($message->sexe == 'm') ? "bleu" : "rose" ;
            $moi = ($message->id_membre == $_SESSION['utilisateur']['id_membre']) ? "(moi)": null;
            $tab['resultat'] .= '<p><span class="' . $couleur . '">' . $message->pseudo . '</span> ' . $moi . ' > ' . $message->message . '</p><div class="clear"></div>';
        }
    }



    echo json_encode($tab);