<?php
include('layout/header_form.inc.php');
include('layout/nav_form.inc.php');
?>

<?php

  if(isset($_POST['pseudo']) && isset($_POST['email']))
  {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    if(!empty($pseudo) && !empty($email))
    {
      // enregistrement des ces onformations sur un fichier crée dynamiquement grace à php
      // fonction fopen
      $f = fopen("liste.txt", "a");// fopen(nomdufichier, mode)
      // pour les différents mode disponible:
      // http://php.net/manual/fr/function.fopen.php
      fwrite($f, $pseudo . ' - ');
      fwrite($f, $email. "\n");// le \n permet le retour à la ligne dans le fichier cible
      fclose($f); // fclose() qui n'est pas obligatoire permet de fermer le fichier et de libérer de la ressource sur le serveur.
    }else {
      echo '<div class="alert alert-danger col-sm-6 col-sm-offset-3" role="alert">Attention, le pseudo et le mail sont obligatoires<br> Veuillez recommencer</div>';
    }

    /*echo '<pre>'; print_r($_POST); echo '</pre>';*/
  }

?>

<div class="container">

  <div class="starter-template">
    <h1>enregistrement contact</h1>  
  </div>

  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <form action="" method="post">
      
        <div class="form-group">
          <label for="pseudo">Pseudo</label>
          <input type="text" name="pseudo" id="pseudo" class="form-control">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control">
        </div>

          <button type="submit" class="form-control btn btn-success">Valider <i class="glyphicon glyphicon-send"></i></button>    
      </form>
    </div>
  </div>

</div><!-- /.container -->

<?php
include('layout/header_form.inc.php'); 
