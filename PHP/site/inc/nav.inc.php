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
            <li><a href="boutique.php">Accueil</a></li>
            <li><a href="panier.php">Panier</a></li>
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
                echo '<li><a href="' .  URL . 'admin/gestion_commande">Gestion Commande</a></li>';
                echo '<li role="separator" class="divider"></li>';
                echo '<li><a href="' .  URL . 'admin/gestion_utilisateur.php">Gestion Utilisateur</a></li>';

                echo '</ul></li>';
              }
            ?>

          </ul><!-- /.navbar-nav navbar-right -->
        </div><!--/.nav-collapse -->
      </div><!-- /.container -->
    </nav>