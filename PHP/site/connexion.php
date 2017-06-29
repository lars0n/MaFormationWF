<?php
//--------- Import init -------// 
require('inc/init.inc.php');

// deconnexion de l'utilisateur
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion')
{   
    $_SESSION['utilisateur'] = false;
    session_destroy();
    //exit();
}

// si l'utilisateur est connecté on le redirige sur profil
if(utilisateur_est_connecte())
{
  header('location:profil.php');
}

//------------ Traitement du formulaire de connexion --------------//

// vérification de l'existance des indices du formulaire
if(isset($_POST['pseudo']) && isset($_POST['mdp']))
{
  $pseudo = $_POST['pseudo'];
  $mdp    = $_POST['mdp'];

  $verif_connexion = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo AND mdp = :mdp");
  $verif_connexion->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
  $verif_connexion->bindParam(":mdp", $mdp, PDO::PARAM_STR);
  $verif_connexion->execute();

  if($verif_connexion->rowCount() > 0)
  {
    // si nous avons 1 ligne alors le pseudo et le mdp sont corrects
    $info_utilisateur = $verif_connexion->fetch(PDO::FETCH_ASSOC);
    $_SESSION['utilisateur'] = [];
    $_SESSION['utilisateur']['id_membre'] = $info_utilisateur['id_membre'];
    $_SESSION['utilisateur']['pseudo']    = $info_utilisateur['pseudo'];
    $_SESSION['utilisateur']['email']     = $info_utilisateur['email'];
    $_SESSION['utilisateur']['nom']       = $info_utilisateur['nom'];
    $_SESSION['utilisateur']['prenom']    = $info_utilisateur['prenom'];
    $_SESSION['utilisateur']['sexe']      = $info_utilisateur['sexe'];
    $_SESSION['utilisateur']['ville']     = $info_utilisateur['ville'];
    $_SESSION['utilisateur']['cp']        = $info_utilisateur['cp'];
    $_SESSION['utilisateur']['adresse']   = $info_utilisateur['adresse'];
    $_SESSION['utilisateur']['statut']    = $info_utilisateur['statut'];

    // on redirige sur profil
    header("location:profil.php");

    // même chose avec un foreach
    /*$_SESSION['utilisateur'] = [];
    foreach($info_utilisateur AS $indice => $valeur)
    {
      if($indice != 'mdp') {
        $_SESSION['utilisateur'][$indice] = $valeur;
      }
    }*/

  }else {
    $message .= '<div class="alert alert-danger" role="alert" style="margin-top:20px;"> Attention, erreur sur le pseudo ou le mot de passe.<br/>Veuillez recommencer</div>';
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
    <h1><span class="glyphicon glyphicon-envelope text-primary" aria-hidden="true"></span> Connexion</h1>
    <?= $message; // messages destinés à l'utilisateur ?>  
  </div>

  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 well">
      <form action="" method="post">
        <div class="form-group">
          <label for="pseudo">Pseudo</label>
          <input type="text" class="form-control" name="pseudo" id="pseudo" value="">
        </div>

        <div class="form-group">
          <label for="mdp">Mot de passe</label>
          <input type="text" class="form-control" name="mdp" id="mdp" value="">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
      </form>
    </div><!-- /.col-sm-6 -->
  </div><!-- /.row -->
 

</div><!-- /.container -->

<?php
//---------  Import footer site -------------//
include('inc/footer.inc.php');
