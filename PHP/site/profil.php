<?php
//--------- Import init -------// 
require('inc/init.inc.php');

// vérification si l'utilisateur est connecté sinon on le redirige sur connexion
if(!utilisateur_est_connecte())
{
  header('location:connexion.php');
}

//--------- Import du Header et du nav -------//
// l'affichage html commence ici 
include('inc/header.inc.php');
include('inc/nav.inc.php');
//----------------------------------------//

?>

<div class="container">

  <div class="starter-template">
    <h1>Profil(<?= ($_SESSION['utilisateur']['statut'] == 1) ? 'Admin' : 'Membre'; ?>)</h1>
    <?= $message; // messages destinés à l'utilisateur ?>  
  </div>

  <div class="row">
    <div class="col-sm-12 profil">
      <div class="col-sm-12 profil-background">   
      </div>
      <div>
        <div class="profil-image">
          <img class="img-thumbnail img-responsive" src="http://cdn3-femina.ladmedia.fr/var/femina/storage/images/psychologie/psycho/comment-devenir-une-personne-solaire-839705/5559293-1-fre-FR/Comment-devenir-une-personne-solaire.jpg" alt="">
        </div><!-- /.profil-image -->
        <div class="col-sm-8 ">
          <h2><?= $_SESSION['utilisateur']['nom'] . ' ' . $_SESSION['utilisateur']['prenom']; ?></h2>
          <h3><?= $_SESSION['utilisateur']['pseudo'] ?></h3>
          <h3><?= $_SESSION['utilisateur']['email'] ?></h3>
          <h3><?= ($_SESSION['utilisateur']['sexe'] == 'm') ? 'Homme' : 'Femme' ?></h3>
          <h3><?= $_SESSION['utilisateur']['ville'] ?></h3>
          <h3><?= $_SESSION['utilisateur']['cp'] ?></h3>
          <h3><?= $_SESSION['utilisateur']['adresse'] ?></h3>
        </div><!-- /.section -->
      </div>
    </div><!-- /.profil -->
  </div><!-- /.row -->




</div><!-- /.container -->

<?php
//---------  Import footer site -------------//
include('inc/footer.inc.php');
