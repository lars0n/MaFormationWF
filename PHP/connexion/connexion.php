<?php
include('assets/layout/header.inc.php');
include('assets/layout/nav.inc.php');
//----------------------------------------//

  echo '<pre>'; print_r($_POST); echo '</pre>';

  // connexion à la bdd
  $pdo = new PDO('mysql:host=localhost;dbname=connexion', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

  if(isset($_POST['pseudo']) && isset($_POST['mdp']))
  {
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    // récupération des informations en ajoutant la fonction prédéfinie addslashes() pour gérer les quotes et guillemets.
    //$pseudo = addslashes($_POST['pseudo']);
    //$mdp = addslashes($_POST['mdp']);
    echo '<div class="alert alert-success">';// pour styliser, peut etre supprimer

    echo '<b>Pseudo: </b>' . $pseudo . '<br/>';
    echo '<b>Mot de passe: </b>' . $mdp . '<br/>';

    $req = "SELECT * FROM utilisateur WHERE pseudo = '$pseudo' AND mdp = '$mdp'";
    echo '<b>Requète: </b>' . $req . '<br/>'; // affichage de la requete pour comprendre les injections

    echo '</div>';// /.alert alert-success

    // execution de la requete
    //$resultat = $pdo->query($req);
    // la ligne au dessus permet l'injection de code via le formulaire(injection sql notamment), pour sécuriser, il nous suffit d'utiliser prepare + execute
    
    $resultat = $pdo->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo AND mdp = :mdp");
    $resultat->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
    $resultat->bindParam(":mdp", $mdp, PDO::PARAM_STR);
    $resultat->execute();

    $membre = $resultat->fetch(PDO::FETCH_ASSOC);

    if(!empty($membre)) // si nous récupérons qq chose de la bdd
    {
      // alors le pseudo et le mdp son correct
      echo '<h1>vous êtes connecté</h1>';
      echo '<b>Vos information:</b><br />';
      echo '<b>id_utilisateur:</b>' . $membre['id_utilisateur'] . '<br/>';
      echo '<b>Pseudo:</b>' . $membre['pseudo'] . '<br/>';
      echo '<b>Mot de pass:</b>' . $membre['mdp'] . '<br/>';
      echo '<b>Sexe:</b>' . $membre['sexe'] . '<br/>';
      echo '<b>Email:</b>' . $membre['email'] . '<br/>';
      echo '<b>Adresse:</b>' . $membre['adresse'] . '<br/>';
    } else 
    {
      echo '<h1 class="bg-danger">Erreur sur le pseudo ou le mot de passe<br/>Veuillez recommencer</h1>';
    }
    
  }

?>

<div class="container">

  <div class="starter-template">
    <h1>Connexion</h1>  
  </div>

    <form method="post">
      <div class="form-group">
        <label for="">Pseudo</label>
        <input type="text" name="pseudo" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="text" name="mdp" class="form-control">
      </div>
      <button class="btn btn-success col-sm-12">Se Logger</button>
    </form>

  </div>

</div><!-- /.container -->

<?php
include('assets/layout/footer.inc.php');
