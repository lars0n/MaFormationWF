<?php
//--------- Import init -------// 
require('inc/init.inc.php');


// systeme de recherche
/*if(!empty($_POST['recherche']))
{
  $req_recherche = $pdo->prepare("SELECT * FROM article WHERE titre LIKE :titre");
  $req_recherche->bindValue(":titre", '%' . $_POST['recherche'] . '%', PDO::PARAM_STR);
  $req_recherche->execute();

  $rep = $req_recherche->fetchAll(PDO::FETCH_ASSOC);
}*/

//pre($rep);

//--------- Import du Header et du nav -------//
// l'affichage html commence ici 
include('inc/header.inc.php');
include('inc/nav.inc.php');
//----------------------------------------//

// je récupere les catégorie et la couleur et la taille depuis la BDD
$requ_categorie = $pdo->query("SELECT DISTINCT categorie FROM article ");
$categorie = $requ_categorie->fetchall(PDO::FETCH_ASSOC);
// couleur
$requ_couleur = $pdo->query("SELECT DISTINCT couleur FROM article ");
$couleur = $requ_couleur->fetchall(PDO::FETCH_ASSOC);
// taille
$requ_taille = $pdo->query("SELECT DISTINCT taille FROM article ");
$taille = $requ_taille->fetchall(PDO::FETCH_ASSOC);

// créé un tableau pour avec les categorie
$i = 0;
foreach ($categorie as $value) {
  $categorie_verif[$i] = $value['categorie'];
  $i++;
}

// je récupere les article depuis la BDD
if($_POST)
{
  if(!empty($_POST['recherche'])) 
  {
    $recherche = $_POST['recherche'];
    $requete_articles = $pdo->prepare("SELECT * FROM article WHERE titre LIKE :recherche OR description LIKE :recherche");
    $requete_articles->bindValue(":recherche", '%' . $recherche . '%', PDO::PARAM_STR);
    $requete_articles->execute();
  }elseif(!empty($_POST['couleur']))
  {
    $couleur_post = $_POST['couleur'];
    $requete_articles = $pdo->prepare("SELECT * FROM article WHERE couleur = :couleur");
    $requete_articles->bindParam(":couleur", $couleur_post , PDO::PARAM_STR);
    $requete_articles->execute();
  }

} elseif(isset($_GET['categorie']) && in_array($_GET['categorie'], $categorie_verif)) {
  $requete_articles = $pdo->prepare("SELECT * FROM article WHERE categorie = ?");
  $requete_articles->execute([$_GET['categorie']]);

} else 
{
  $requete_articles = $pdo->query("SELECT * FROM article");
}
$articles = $requete_articles->fetchall(PDO::FETCH_OBJ);

?>

<div class="jumbotron">
  <div class="container">
    <h1 style="color: white;">Ma boutique</h1>
    <p style="color: white;" >Retrouvez les derniere tendance et marque prestigieuse, sur notre boutique.</p>
  </div>
</div>

<div class="container">

  <!--<div class="starter-template">
    <h1>Article</h1>
    <?= $message; // messages destinés à l'utilisateur ?>  
  </div>-->


  <div class="row">
  <div class="col-sm-2">
    <div class="list-group">
      <div class="list-group-item active">Categorie</div>
      <a href="boutique.php" class="list-group-item">Tout les articles</a>  
      <?php foreach ($categorie as $value) { ?>
      <a href="?categorie=<?= $value['categorie']; ?>" class="list-group-item"><?= $value['categorie']; ?></a>       
      <?php } ?>
    </div><!-- /.list-group -->
    <form action="" method="post">
    <!-- affichage couleur-->
      <div class="form-group">
        <label for="" class='list-group-item active'>Couleur</label>
        <select class="form-control" name="couleur" id="">
          <?php foreach($couleur as $value): ?>
            <option ><?= $value['couleur']; ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <!-- affichage taille-->
      <div class="form-group">
        <label for="" class='list-group-item active'>Taille</label>
        <select class="form-control" name="taille" id="">
          <?php foreach($taille as $value): ?>
            <option ><?= $value['taille']; ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Rechercher</button>
    </form>
  </div><!-- /. col-2-->
  <div class="col-sm-10">
    <form method="post" action="">
      <div class="form-group col-md-11">
        <input type="text" name="recherche" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-primary col-md-1"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
    </form>
  <?php foreach ($articles as $value) { ?>  
    <figure class="snip1492">
      <img src="<?= URL . 'assets/photo/' . $value->photo; ?>" alt="sample85" />
    <figcaption>
    <h3><?= $value->titre; ?></h3>
    <p><?= substr($value->description, 0, 80); ?>...</p>
    <div class="price">
      <?= $value->prix; ?> &euro;
    </div>
    </figcaption><i class="ion-plus-round"></i>
      <a href="<?= URL ?>article.php?id_article=<?= $value->id_article; ?>"></a>
    </figure>
  <?php } ?>
  </div><!-- /. col-10-->
  </div><!-- /.row -->


</div><!-- /.container -->

<?php
//---------  Import footer site -------------//
include('inc/footer.inc.php');
