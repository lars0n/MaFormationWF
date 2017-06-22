<?php
include('layout/header_form.inc.php');
include('layout/nav_form.inc.php');
?>
<?php 
// afficher proprement les informations qui proviennent du formulaire
// avez vous pensé aux d'erreur, exemple si je viens sur cette page sans valider le formulaire, y-a t'il des erreurs php affichées. si c'est le cas => il faut corriger.

//echo 'l'expediteur est : . $_POST['expediteur']. <br/>;

/*$expe = isset($_POST['expediteur']) ? $_POST['expediteur'] : false;
$sujet = isset($_POST['sujet']) ? $_POST['sujet']: false;
$message = isset($_POST['message']) ? $_POST['message'] : false;*/


/*$sujet = $_POST['sujet'];
$$message = $_POST['message'];*/

/*if($expe | $sujet | $message) {
  echo 'l\'expediteur est :' . $expe . '<br/>';
  echo 'le sujet est :' . $sujet . '<br/>';
  echo 'le message est :' . $message . '<br/>';

  // envoie d'un mail via la fonction prédéfinie mail()
  $expe = "FROM: $expe \n"; // \n est un retour à la ligne dans un fichier. /!\ il doit être écrit dans des "" pour être bien interprété.
  $expe .= "MIME-Version: 1.0 \r\n";
  $expe .= "Content-type: text/html; charset=iso-8859-1 \r\n";

  // envoi
  // mail("destinataire", "sujet", "message", "expéditeur");
  mail("angelinajoli@gmail.com", $sujet, $message, $expe);
}*/

if(isset($_POST['expediteur'])  && isset($_POST['sujet']) && isset($_POST['message'])) {

  $expe = $_POST['expediteur']; 
  $sujet = $_POST['sujet'];
  $message = $_POST['message']; 

  echo 'l\'expediteur est :' . $expe . '<br/>';
  echo 'le sujet est :' . $sujet . '<br/>';
  echo 'le message est :' . $message . '<br/>';

  // envoie d'un mail via la fonction prédéfinie mail()
  $expe = "FROM: $expe \n"; // \n est un retour à la ligne dans un fichier. /!\ il doit être écrit dans des "" pour être bien interprété.
  $expe .= "MIME-Version: 1.0 \r\n";
  $expe .= "Content-type: text/html; charset=iso-8859-1 \r\n";

  // envoi
  // mail("destinataire", "sujet", "message", "expéditeur");
  mail("fnac@fnac.com", $sujet, $message, $expe);
}


?>
<div class="container">

  <div class="starter-template">
    <h1>Contact</h1>  
  </div>

  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <form action="" method="post">
      
        <div class="form-group">
          <label for="expediteur">Expéditeur</label>
          <input type="text" name="expediteur" id="expediteur" class="form-control">
        </div>

        <div class="form-group">
          <label for="sujet">sujet</label>
          <input type="text" name="sujet" id="sujet" class="form-control">
        </div>

        <div class="form-group">
          <label for="message">message</label>
          <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div>
          <button type="submit" class="form-control btn btn-success">Valider <i class="glyphicon glyphicon-send"></i></button>    
      </form>
    </div>
  </div>

</div><!-- /.container -->

<?php
include('layout/header_form.inc.php'); 
