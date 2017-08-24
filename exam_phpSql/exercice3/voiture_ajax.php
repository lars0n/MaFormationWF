<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 08/08/2017
 * Time: 14:39
 */


// conexion a la base de donnée
$db = new PDO('mysql:host=localhost;dbname=exo3_menage;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8 ');

//tableau vide d'erreur, de reponse
$errors = [];
$response = [];
$isinsert = '';

// verification du formulaire
if(!empty($_POST)){

    if(empty($_POST['marque'])){
        $errors[] = "le champs marque est obligatoire";
    }

    if(empty($_POST['modele'])){
        $errors[] = "le champs modele est obligatoire";
    }

    if(empty($_POST['annee'])){
        $errors[] = "l' année est obligatoire";
    }

    if(empty($_POST['couleur'])){
        $errors[] = "le champs couleur est obligatoire";
    }
}

// si il n'y a pas d'erreur on execute la reque sinon on envoit un message d'erreur
if(empty($errors)){

    $insertvehicule = $db->prepare("INSERT INTO vehicule (marque, modele, annee, couleur) VALUE (?, ?, ?, ?)");
    $isinsert = $insertvehicule->execute([$_POST['marque'], $_POST['modele'], $_POST['annee'], $_POST['couleur']]);

    // si la base de donné ne renvoie pas d'erreur on affiche un success
    if($isinsert){
        $response['statut'] = 'success';
        $response['message'] = 'le vehicule a bien été enregistrer';
    }else{
        $response['statut'] = 'errors';
        $response['message'] = "un probleme c'est produit lors de l'enregistrement <br>";
    }

}else{
    $response['statut'] = 'errors';
    $response['message'] = "un probleme c\'est produit voici les erreurs :<br>";
    $response['message'] .= implode('<br>', $errors);
}



echo json_encode($response);
