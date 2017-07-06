<?php 
  
  (isset($_SESSION['panier']))? $taille_tableau = count($_SESSION['panier']['id_article']) : $taille_tableau = 0; 

  // retirer un article de la session
  if(isset($_GET['action']) && $_GET['action'] == 'retirer' && is_numeric($_GET['id_article']))
  {
      retirer_article_du_panier($_GET['id_article']);
  }
?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="boutique.php">Ma Boutique</a>
        </div><!--/.navbar-header -->

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?= URL?>boutique.php">Accueil</a></li>
            
            <li class="dropdown">
              <a class="dropdown-toggle" <?php if($taille_tableau > 0) { echo 'data-toggle="dropdown"'; } ?> role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> <?php if(isset($_SESSION['panier'])){ echo array_sum($_SESSION['panier']['quantite']); } ?> - Article(s)<span class="caret"></span></a>
              <?php if($taille_tableau > 0):?>
              <ul class="dropdown-menu dropdown-cart" role="menu">
                  <?php for ($i=0; $i < $taille_tableau ; $i++): ?>
                    <li>
                        <span class="item">
                          <span class="item-left">
                              <img data-action="zoom" src="<?= URL . 'assets/photo/' . $_SESSION['panier']['photo'][$i] ?>" alt="" width="50" />
                              <span class="item-info">
                                  <span><?= $_SESSION['panier']['titre'][$i] ?></span>
                                  <span class="pull-left"><?= $_SESSION['panier']['prix'][$i] ?> &euro; &nbsp;</span>
                                  <span>x <?= $_SESSION['panier']['quantite'][$i] ?></span>
                              </span>
                          </span>
                          <span class="item-right">
                              <a href="?action=retirer&id_article=<?= $_SESSION['panier']['id_article'][$i] ?>" class="btn btn-xs btn-danger pull-right">x</a>
                          </span>
                        </span>
                    </li>
                  <?php endfor ?>
                  <li class="divider"></li>
                  <li><a class="text-center" href="<?= URL?>panier.php">View Cart</a></li>
                </ul>
                <?php endif ?>
            </li><!-- /. dropdawn -->

          </ul><!-- /.navbar-nav -->

          <ul class="nav navbar-nav navbar-right">
            <?php 
              if(!utilisateur_est_connecte())
              {
            ?>

            <li><a href="<?= URL?>inscription.php">Inscription</a></li>
            <li><a href="<?= URL?>connexion.php">Login</a></li>

             <?php   
              }
              else {
            ?>
            <li><a href="<?= URL?>profil.php">Profil</a></li>
            <li><a href="<?= URL?>connexion.php?action=deconnexion">Déconnexion</a></li>
            <?php 
              }

              // rajout des liens d'administration si l'utilisateur est admin
              if(utilisateur_est_admin())
              {
                echo '<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caret"></span></a>
          <ul class="dropdown-menu">';

                echo '<li><a href="' .  URL . 'admin/gestion_boutique.php">Gestion Boutique</a></li>';
                echo '<li role="separator" class="divider"></li>';
                echo '<li><a href="' .  URL . 'admin/gestion_commande.php">Gestion Commande</a></li>';
                echo '<li role="separator" class="divider"></li>';
                echo '<li><a href="' .  URL . 'admin/gestion_membre.php">Gestion Membre</a></li>';

                echo '</ul></li>';
              }
            ?>

          </ul><!-- /.navbar-nav navbar-right -->
        </div><!--/.nav-collapse -->
      </div><!-- /.container -->
    </nav>