<?php
//--------- Import init -------// 
require('inc/init.inc.php');

// si l'utilisateur est connecté on le redirige sur profil
if(utilisateur_est_connecte())
{
  header('location:profil.php');
}

//----- Déclaration des Variable Membre pour affichage dans les values du formulaire----//
$pseudo   = '';
$mdp      = '';
$nom      = '';
$prenom   = '';
$email    = '';
$sexe     = '';
$ville    = '';
$cp       = '';
$adresse  = '';

//--------------------------------- Traitement du formulaire soumis ----------------------//

// controle sur l'existence de tous les champs provenant du formulaire (sauf le bouton de validation)
if(isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['sexe']) && isset($_POST['ville']) &&isset($_POST['cp']) && isset($_POST['adresse'])) 
{
  // si le formulaire a été validé, on place dasn ces variables les saisies correspondantes.
  $pseudo   = $_POST['pseudo'];
  $mdp      = $_POST['mdp'];
  $nom      = $_POST['nom'];
  $prenom   = $_POST['prenom'];
  $email    = $_POST['email'];
  $sexe     = $_POST['sexe'];
  $ville    = $_POST['ville'];
  $cp       = $_POST['cp'];
  $adresse  = $_POST['adresse'];

  // variable de controle des erreurs
  $erreur   = "";

  // controle sur la taille du pseudo (entre 4 et 14 caractères inclus)
  $taille_pseudo = iconv_strlen($pseudo);
  if($taille_pseudo < 4 || $taille_pseudo > 14) 
  {
    $message .= '<div class="alert alert-danger" role="alert" style="margin-top:20px;"> Attention, la taille du pseudo est incorrecte.<br/>En effet, le pseudo doit avoir entre 4 et 14 caractères inclus</div>';
    $erreur = true; // si l'on rentre dans cette condition alors il y a une erreur
  }

  // contrôle des caractères dans le pseudo (autorisés: a-z A-Z 0-9 _ - .)
  $verif_caracteres = preg_match('#^[a-zA-Z0-9._-]+$#', $pseudo);
  /*
    // preg_match() va vérifier les caractères contenus dans la variable pseudo
    selon une expression régulière fournie en 1er argument.
    // renvoie 1 si tout est ok sinon 0

    // expression:
    #   => permet d'indiquer le début et la fin de l'expression
    ^   => indique que la chaine ($pseudo) ne peut que commencer par ces caractères.
    $   => indique que la chaine ($pseudo) ne peut que finir par ces caractères.
    +   => indique que les caractères autorisés peuvent apparaitre plusieurs fois.
    []  => 
  */

  if(!$verif_caracteres && !empty($pseudo)) 
  {
    // on rentre dans cette condition si $verif_caracteres contient 0 dans s'il y a des caractères non autorisés.
    $message .= '<div class="alert alert-danger" role="alert" style="margin-top:20px;"> Attention, caractères non autorisés dans le pseudo.<br/>Caractères autorisés: A-Z et 0-9</div>';
    $erreur = true; // si l'on rentre dans cette condition alors il y a une erreur
  }

  // controle sur la validité du mail
  if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
    $message .= '<div class="alert alert-danger" role="alert" style="margin-top:20px;"> Attention, l\'Email n\'est pas valide.<br/>Merci de rentrer une email valide</div>';
    $erreur = true; // si l'on rentre dans cette condition alors il y a une erreur
  }

  // controle sur la disponibilité du pseudo en BDD
  $verif_pseudo = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
  $verif_pseudo->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
  $verif_pseudo->execute();

  if($verif_pseudo->rowCount() > 0)
  {
    // si l'on obtient au mopins 1 ligne de resultat alors le pseudo est déja pris
    $message .= '<div class="alert alert-danger" role="alert" style="margin-top:20px;"> Attention, le pseudo n\'est pas disponible.<br/>Veuillez vérifier vos saisies</div>';
    $erreur = true; // si l'on rentre dans cette condition alors il y a une erreur
  }
  // insertion dans la BDD 
  if($erreur !== true) // si $erreur est différent de true alors les controles préalabes sont OK !
  {
    // pour cryptet (hashage) le mdp 
    // $mdp = password_hash($mdp, PASSWORD_DEFAULT);
    // pour voir la gestion du mdp lors de la connexion, voir le fichier connexion_avec_mdp_hash.php

    $enregistrement = $pdo->prepare("INSERT INTO membre (pseudo, mdp, nom, prenom, email, sexe, ville, cp, adresse, statut) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :sexe, :ville, :cp, :adresse, 0)");

    $enregistrement->bindParam(":pseudo",   $pseudo,  PDO::PARAM_STR);
    $enregistrement->bindParam(":mdp",      $mdp,     PDO::PARAM_STR);
    $enregistrement->bindParam(":nom",      $nom,     PDO::PARAM_STR);
    $enregistrement->bindParam(":prenom",   $prenom,  PDO::PARAM_STR);
    $enregistrement->bindParam(":email",    $email,   PDO::PARAM_STR);
    $enregistrement->bindParam(":sexe",     $sexe,    PDO::PARAM_STR);
    $enregistrement->bindParam(":ville",    $ville,   PDO::PARAM_STR);
    $enregistrement->bindParam(":cp",       $cp,      PDO::PARAM_STR);
    $enregistrement->bindParam(":adresse",  $adresse, PDO::PARAM_STR);

    $enregistrement->execute();
    // on redirige sur la page connexion.php
    header("location:connexion.php");

  }

}

//--------- Import du Header et du nav -------//
// l'affichage html commence ici
include('inc/header.inc.php');
include('inc/nav.inc.php');
//----------------------------------------//

?>

<div class="container">

  <div class="starter-template">
    <h1><span class="glyphicon glyphicon-user text-primary" aria-hidden="true"></span> Inscription</h1>
    <?= $message; // messages destinés à l'utilisateur ?>  
  </div>

  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 well">
      <form action="" method="post">

        <div class="form-group">
          <label for="pseudo">Pseudo :</label>
          <input class="form-control" type="text" name="pseudo" id="pseudo" value="<?= $pseudo?>">
        </div>

        <div class="form-group">
          <label for="mdp">Mot de Passe :</label>
          <input class="form-control" type="password" name="mdp" id="mdp" value="<?= $mdp?>">
        </div>

        <div class="form-group">
          <label for="nom">Nom :</label>
          <input class="form-control" type="text" name="nom" id="nom" value="<?= $nom?>">
        </div>

        <div class="form-group">
          <label for="prenom">Prenom :</label>
          <input class="form-control" type="text" name="prenom" id="prenom" value="<?= $prenom?>">
        </div>

        <div class="form-group">
          <label for="email">Votre Email :</label>
          <input class="form-control" type="text" name="email" id="email" value="<?= $email?>">
        </div>

        <div class="form-group">
          <label for="sexe">Sexe</label>
          <select class="form-control" name="sexe" id="sexe">
            <option value="m">Homme</option>
            <option value="f" <?php if($sexe == 'f') { echo 'selected';} ?>> Femme</option>
          </select>
        </div>

        <div class="form-group">
          <label for="ville">Ville</label>
          <input class="form-control" type="text" name="ville" id="ville" value="<?= $ville?>">
        </div>

        <div class="form-group">
          <label for="cp">Code Postal</label>
          <input class="form-control" type="text" name="cp" id="cp" value="<?= $cp?>">
        </div>

        <div class="form-group">
          <label for="adresse">Adresse :</label>
          <textarea class='form-control' name="adresse" id="adresse" cols="30" rows="5"><?= $adresse?></textarea>
        </div>

        <div class="g-recaptcha" data-sitekey="6LcMeicUAAAAAOApHqk0UIlx0aSofm8Bp2SVNSa2"></div>

        <button type="submit" class="btn btn-primary btn-block">Inscription</button>
       
      </form> 
    </div><!-- /.col-sm-4 -->
  </div><!-- /.row -->

</div><!-- /.container -->

<?php
//---------  Import footer site -------------//
include('inc/footer.inc.php');
