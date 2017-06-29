<?php
//--------- Import init -------// 
require('../inc/init.inc.php');
// restriction d'acces, si l'utilisateur n'est pas admin alors il ne doit pas accéder à cette page.'
if(!utilisateur_est_admin())
{
  header("location:../connexion");
  exit();// permet d'arreter l'exécution du site(au cas où une personne malveillante ferait des injections via GET)
}

//----- déclaration des variable ------//
$idarticle    = '';
$reference    = '';
$categorie    = '';
$titre        = '';
$description  = '';
$couleur      = '';
$taille       = '';
$sexe         = '';
$prix         = '';
$stock        = '';
$photo_bdd    = '';

//----- Traitement du formulaire ------//
if(isset($_POST['id_article']) && isset($_POST['reference']) && isset($_POST['categorie']) && isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['couleur']) && isset($_POST['taille']) && isset($_POST['sexe']) && isset($_POST['prix']) && isset($_POST['stock']))
{
  $idarticle    = $_POST['id_article'];
  $reference    = $_POST['reference'];
  $categorie    = $_POST['categorie'];
  $titre        = $_POST['titre'];
  $description  = $_POST['description'];
  $couleur      = $_POST['couleur'];
  $taille       = $_POST['taille'];
  $sexe         = $_POST['sexe'];
  $prix         = $_POST['prix'];
  $stock        = $_POST['stock'];
  $erreur       = false;

  //vérifie que le champs reference est fournie.
  if(empty($reference))
  {
    $message .= '<div class="alert alert-danger">La référence du produit doit être renseigner</div>';
    $erreur = true;
  }

  //vérifie que le champs titre est fournie.
  if(empty($titre))
  {
    $message .= '<div class="alert alert-danger">Le titre du produit doit être renseigner</div>';
    $erreur = true;
  }

  // vérification si l'utilisateur a chargé une image
  if(!empty($_FILES['photo']['name']))
  {
    // si ce n'est pas vide alors un fichier a bien été chargé via le formulaire.
    
    // on concatène la référence sur le titre afin de ne jamais avoir un fichier avec un nom déja existant sur le serveur.
    $photo_bdd = $reference . '_'  . $_FILES['photo']['name'];

    // vérification de l'extention de l'image (extension acceptées: jpg, jpeg, png, gif)
    $extension = strrchr($_FILES['photo']['name'], '.');// cette fonction prédéfine permet de découper une chaine selon un caractére fournie en 2eme argument (ici le .) Attention, cette fonction découpera la chaine à partir de la derniere occurence du 2eme argument (donc nous renvoie la chaine comprise après le dernier ponit trouvbé)
    // exemple: maphoto.jpg => on récupère.jpeg
    // exemple: maphoto.photo.png => on récupere .png
    // var_dump($extension) 

    // on transforme $extension afin que tous les caracteres soient en minuscule
    $extension = strtolower($extension); 
    // on enlève le .
    $extension = substr($extension, 1); // exemple: .jpg => jpg
    // les extentions acceptées
    $tab_extension_valide = ["jpg", "jpeg", "png", "gif"];
    // nous pouvons donc vérifier si $extention fait partie des valeur autorisé dans $tab_extention_valide.
    $verif_extension = in_array($extension, $tab_extension_valide);

    if($verif_extension && !$erreur)
    {
      // si $verif_extention est égal à true et que $erreur n'est pas egale a true (il n'y a pas eu d'erreur au préalable)
      $photo_dossier = RACINE_SERVEUR . 'assets/photo/' . $photo_bdd;

      copy($_FILES['photo']['tmp_name'], $photo_dossier);
      // copy() permet de copier un fichier depuis un emplacement fourni en premier argument vers un autre emplacement fourni en deuxieme argument.
    }
    elseif(!$verif_extension) {
      echo 'not boucle';
      $message .= '<div class="alert alert-danger">Attention, la photo n\' a pas une extension valide (extension acceptées: jpg/ jpeg/ png/ gif)</div>';
      $erreur = true;
    }
  }

  //si il n'a pas d'erreur on passe au traitement BDD
  if(!$erreur){

    //vérifice s'il n'y'a pas 2 produit identique
    $article_unique = $pdo->prepare("SELECT * FROM article WHERE reference = :reference");
    $article_unique->bindParam(':reference', $reference, PDO::PARAM_STR);
    $article_unique->execute();

    if(!$article_unique->fetch()){

      //insertion dans  la bdd de l'article
      $req_article = $pdo->prepare("INSERT INTO article (reference, categorie, titre, description, couleur, taille, sexe, prix, stock, photo) VALUES (:reference, :categorie, :titre, :description, :couleur, :taille, :sexe, :prix, :stock, :photo)");
      
      $req_article->bindParam(':reference',   $reference,   PDO::PARAM_STR);
      $req_article->bindParam(':categorie',   $categorie,   PDO::PARAM_STR);
      $req_article->bindParam(':titre',       $titre,       PDO::PARAM_STR);
      $req_article->bindParam(':description', $description, PDO::PARAM_STR);
      $req_article->bindParam(':couleur',     $couleur,     PDO::PARAM_STR);
      $req_article->bindParam(':taille',      $taille,      PDO::PARAM_STR);
      $req_article->bindParam(':sexe',        $sexe,        PDO::PARAM_STR);
      $req_article->bindParam(':prix',        $prix,        PDO::PARAM_STR);
      $req_article->bindParam(':stock',       $stock,       PDO::PARAM_STR);
      $req_article->bindParam(':photo',       $photo_bdd,   PDO::PARAM_STR);

      $req_article->execute();  

    }else
    {
      $message .= '<div class="alert alert-danger">Ce produit est déja présent dans la Base de donnée</div>';
    }// fin de la condition qui vérifie que l'article est unqiue
  }// fin condition erreur
}//fin condition du traitement formulaire

//-------  code Teste pour traiter le formulaire----------//
$article = [];

$tablepdo = $pdo->query("SELECT * FROM article");
$colcount = $tablepdo->columnCount();

for ($i=0; $i < $colcount; $i++) { 

  $tablemeta = $tablepdo->getColumnMeta($i);
  $champ = $tablemeta['name'];
  if(isset($_POST[$champ])) {
    $article[$champ] = $_POST[$champ];
  } 
}

pre($article);

//------ affichage des tous les produit dans un tablea html ----------//

/*$articles = $pdo->query("SELECT * FROM article");
$col_article = $articles->columnCount();*/


//-----------------------------------------------//

//-------------------------------------------------//

//--------- Import du Header et du nav -------//
// l'affichage html commence ici 
include('../inc/header.inc.php');
include('../inc/nav.inc.php');
//----------------------------------------//

?>

<div class="container">

  <div class="starter-template">
    <h1>Gestion Boutique</h1>
    <?= $message; // messages destinés à l'utilisateur ?> 
    <a href="?action=ajout" class="btn btn-warning">Ajouter un produit</a> 
    <a href="?action=affichage" class="btn btn-primary">Afficher un produit</a> 
  </div>

<?php if(isset($_GET['action']) && $_GET['action'] == 'ajout') { ?>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 well">
      <form action="" method="post" enctype="multipart/form-data">

        <input class="form-control" type="hidden" name="id_article" id="" value="<?= $idarticle?>">
        
        <div class="form-group">
          <label for="reference">Réference produit <span class="text-danger">*</span></label>
          <input class="form-control" type="text" name="reference" id="reference" value="<?= $reference?>">
        </div>

        <div class="form-group">
          <label for="categorie">Categorie</label>
          <select class="form-control" name="categorie" id="categorie">
            <option value="t_shirt">T-Shirt</option>
            <option value="pantalon" <?php if($categorie == 'pantalon') { echo 'selected';} ?>>Pantalon</option>
            <option value="chaussure" <?php if($categorie == 'chaussure') { echo 'selected';} ?>>Chaussure</option>
            <option value="robe" <?php if($categorie == 'robe') { echo 'selected';} ?>>Robe</option>
            <option value="veste" <?php if($categorie == 'veste') { echo 'selected';} ?>>Veste</option>
          </select>
        </div>

        <div class="form-group">
          <label for="titre">Titre du produit : <span class="text-danger">*</span></label>
          <input class="form-control" type="text" name="titre" id="titre" value="<?= $titre?>">
        </div>

        <div class="form-group">
          <label for="description">Déscriprtion du Produit :</label>
          <textarea class='form-control' name="description" id="description" cols="30" rows="5"><?= $description?></textarea>
        </div>

        <div class="form-group">
          <label for="couleur">Couleur</label>
          <select class="form-control" name="couleur" id="couleur">
            <option value="noir">Noir</option>
            <option value="rouge" <?php if($couleur == 'rouge') { echo 'selected';} ?>>Rouge</option>
            <option value="bleu" <?php if($couleur == 'bleu') { echo 'selected';} ?>>Bleu</option>
            <option value="blanc" <?php if($couleur == 'blanc') { echo 'selected';} ?>>Blanc</option>
          </select>
        </div>

        <div class="form-group">
        <label class="title-checkbox">Taille</label>
          <div class="radio">
            <label class="radio-inline">
              <input type="radio" id="inlineCheckbox1" name="taille" value="xs" <?php if($taille == 'xs' OR !$taille) { echo 'checked';} ?>> XS
            </label>
            <label class="radio-inline">
              <input type="radio" id="inlineCheckbox2" name="taille" value="s" <?php if($taille == 's') { echo 'checked';} ?>> S
            </label>
            <label class="radio-inline">
              <input type="radio" id="inlineCheckbox3" name="taille" value="m" <?php if($taille == 'm') { echo 'checked';} ?>> M
            </label>
            <label class="radio-inline">
              <input type="radio" id="inlineCheckbox3" name="taille" value="l" <?php if($taille == 'l') { echo 'checked';} ?>> L
            </label>
            <label class="radio-inline">
              <input type="radio" id="inlineCheckbox3" name="taille" value="xl" <?php if($taille == 'xl') { echo 'checked';} ?>> XL
            </label>
          </div><!-- /.radio-->
        </div><!-- /.form-group-->

        <div class="form-group">
          <label for="sexe">Sexe</label>
          <select class="form-control" name="sexe" id="sexe">
            <option value="m">Homme</option>
            <option value="f" <?php if($sexe == 'f') { echo 'selected';} ?>> Femme</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputFile">Image</label>
          <input type="file" name="photo" id="exampleInputFile">
          <!--<p class="help-block">Example block-level help text here.</p>-->
        </div>

        <div class="form-group">
          <label for="prix">Prix :</label>
          <div class="input-group">
            <input class="form-control" type="text" name="prix" id="prix" value="<?= $prix?>">
            <div class="input-group-addon">	&euro;</div>
          </div>
        </div>

        <div class="form-group">
          <label for="stock">Stock :</label>
          <input class="form-control" type="text" name="stock" id="stock" value="<?= $stock?>">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Enregistré</button>
       
      </form> 
    </div><!-- /.col-sm-4 -->
  </div><!-- /.row -->
<?php } // accolade correspondante à la condition sur l'affichage de formulaire
        // if(isset($_GET['action']) && $_GET['action'] == 'ajout')
?>

  <div class="row">
    <table class="table table-hover">
<?php if(isset($_GET['action']) && $_GET['action'] == 'affichage') { 
      
      $articles = $pdo->query("SELECT * FROM article");
      $col_article = $articles->columnCount();

      echo '<thead><tr>';
      for ($i=0;$i < $col_article; $i++){ 
        $articlemeta = $articles->getColumnMeta($i);

        echo '<th>' . $articlemeta['name'] . '</th>';

      }
      echo '</tr></thead>';

      echo '<tbody>';
      while($article = $articles->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>';
          foreach ($article as $key => $value) {
           if ($key == 'description') {
              echo '<td>' . substr($value, 0, 15) . '</td>';
            }elseif ($key == 'photo')
            {
              echo '<td><img width=80 src="'. URL . 'assets/photo/' . $value .'"></td>';
            }else
            {
              echo '<td>' . $value . '</td>';
            }
          }
        echo '</tr>';
      }
      echo '</tbody>';
?>
   </table>
  </div><!-- /.row-->
<?php } // accolade correspondante à la condition sur l'affichage de formulaire
        // if(isset($_GET['action']) && $_GET['action'] == 'affichage')
?>

</div><!-- /.container -->

<?php
//---------  Import footer site -------------//
include('../inc/footer.inc.php');
