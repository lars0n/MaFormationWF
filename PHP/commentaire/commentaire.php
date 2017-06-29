<?php
include('assets/layout/header.inc.php');
include('assets/layout/nav.inc.php');
//----------------------------------------//
// ici nous allons voir un formulaire permettant à l'utilisateur d'écrire un commentaire. il faudra enregistrer ce commentaire en BDD pour l'afficher ensuite dans la page.
// 1 - faire un formulaire avec ces champs:
    // pseudo (type text)
    // commentaire (textarea)
// 2 -récupération des saisies et affichage sur la meme page
// 3 - insertion des donées dans la bdd
// 4 - Affichage des commentaires dans la page (récuperation depuis la bdd + traitement)
// 5 - afficher les dernier commentaires (enregistrés) en premier dans la page
// 6 - Afficher le nombre de commentaires
// 7 - afficher la date l'heure du commentaires en français
// 8 - stylisé en css
?>

<?php

  $pdo = new PDO('mysql:host=localhost;dbname=commentaire', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

  if(!empty($_POST['pseudo']) && !empty($_POST['commentaire'])) {
    // htmlentites() permet d'eviter l'injection de code (sql,css,xss etc) cette fonction transporme les caracteres tels que < > & .. en entites html, cela permet d'avoir un code source propre et de bloquer les injection.
    // le deuxième argument ENT_QUOTES permet la prise en charge égalemnt des " et des '
    $pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES);
    $message = htmlentities($_POST['commentaire'], ENT_QUOTES);
    
    $req = $pdo->prepare("INSERT INTO commentaire (pseudo, message, date) VALUES (:pseudo, :message, NOW())");
    $req->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
    $req->bindParam(":message", $message, PDO::PARAM_STR);

    $req->execute();

    // header fonction prédefini nuos permettant de rediriger vers une url
    // /!\ cette fonction doit etre exécutée avant le moindre affichage dans la page.
    // header("lacation:commentaire.php");
    echo '<script>window.location = "commentaire.php"; </script>';
  }

  $messagebdd = $pdo->query("SELECT id_commentaire, pseudo, message, DATE_FORMAT(date, '%d/%m/%Y à %H:%m:%s') AS date FROM commentaire ORDER BY id_commentaire DESC");


  
?>

<div class="container">

  <div class="starter-template">
    <h1>Commentaire</h1>  
  </div>

    <div class="row">
      <form method="post">
        <div class="form-group">
          <label for="">Pseudo</label>
          <input type="text" name="pseudo" class="form-control">
        </div>
        <div class="form-group">
          <label for="commentaire">Commentaire</label>
          <textarea name="commentaire" id="commentaire" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <button class="btn btn-success col-sm-12">Poster</button>
      </form>
    </div> <!-- ./row-->

    <div class="row">
      <h2>Commentaires (<?= $messagebdd->rowCount(); ?>)</h2>

      <div class="alert alert-default">
      <?php
        WHILE($commentaire = $messagebdd->fetch(PDO::FETCH_ASSOC))
        { $hash = md5($commentaire['pseudo']);
        ?>
        <div>
          <h3 ><?= $commentaire['pseudo'] . "<small> le " . $commentaire['date'] . '</small>'; ?></h3>
          <?= '<img src="https://www.gravatar.com/avatar/' . $hash . '?s=60&d=identicon" />' ?>
            <blockquote style="display: inline-block; margin-left: 10px; padding: 16px 20px;">
              <p><?= $commentaire['message']; ?></p>
            </blockquote>
        </div>
      <?php }
      ?>
      </div>
    </div><!-- ./row -->

  </div>

</div><!-- /.container -->

<?php
include('assets/layout/footer.inc.php');
