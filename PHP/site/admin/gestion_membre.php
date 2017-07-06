<?php
    //--------- Import init -------// 
    require('../inc/init.inc.php');

    // restriction d'acces, si l'utilisateur n'est pas admin alors il ne doit pas accéder à cette page.'
    if(!utilisateur_est_admin())
    {
    header("location:../connexion");
    exit();// permet d'arreter l'exécution du site(au cas où une personne malveillante ferait des injections via GET)
    }

    // requete pour récuperer les membre et le nombre de colonne dans la tables
    $membres = $pdo->query("SELECT * FROM membre");
    $membre_col = $membres->columnCount();

    // requete pour recupérer un membre avec un id
    if(isset($_GET['action']) && $_GET['action'] == 'profil' && is_numeric($_GET['id_membre'])) {
        $id_membre = $_GET['id_membre'];
        $membre_req = $pdo->prepare("SELECT * FROM membre WHERE id_membre = ?");
        $membre_req->execute([$id_membre]);

        $membre = $membre_req->fetch(PDO::FETCH_OBJ);
    }

    // requete pour supprimer un membre de la BDD
    if(isset($_GET['action']) && $_GET['action'] == 'supprimer' && is_numeric($_GET['id_membre'])) 
    {
        $id_membre = $_GET['id_membre'];
        $membre_req = $pdo->prepare("DELETE membre WHERE id_membre = ?");
        $membre_req->execute([$id_membre]);

        $_SESSION['message'] = '<div class="alert alert-success">Le membre a été supprimé de la BDD</div>';
        header('location:gestion_membre.php');
        exit();
    }

    // passer un membre admin
    if(isset($_GET['action']) && $_GET['action'] == 'admin' && is_numeric($_GET['id_membre']))
    {
        $id_membre = $_GET['id_membre'];
        $membre_req = $pdo->prepare("UPDATE membre SET statut = 1 WHERE id_membre = ?");
        $membre_req->execute([$id_membre]);
        $_SESSION['message'] = '<div class="alert alert-success">Le Membre est devenu Admin</div>';
        header('location:gestion_membre.php');
        exit();
    } 

    //--------- Import du Header et du nav -------//
    // l'affichage html commence ici 
    include('../inc/header.inc.php');
    include('../inc/nav.inc.php');
    //----------------------------------------//
   
?>

    <div class="container">

        <div class="starter-template">
            <h1>Gestion Membre</h1>
            <?= $message; // messages destinés à l'utilisateur ?> 
            <?php if(!empty($_SESSION['message']))
                {
                    echo $_SESSION['message'];
                    $_SESSION['message'] = '';
                }
            ?>
            <a href="?action=afficher" class="btn btn-warning">Afficher les membre</a> 
            <!--<a href="?action=affichage" class="btn btn-primary">Afficher un produit</a>--> 
        </div>

        <?php if(empty($_GET['action']) || $_GET['action'] == 'afficher'): ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <!-- affiche la colonne -->
                    <?php for($i = 0; $i < $membre_col; $i++): ?>
                        <th><?= $membres->getColumnMeta($i)['name'] ?></th>
                    <?php endfor ?>
                        <th>Voir profil</th> 
                </tr>
            </thead>
            <tbody>
                <!-- parcoure la table membre-->
                <?php while($membre = $membres->fetch(PDO::FETCH_OBJ)): ?>
                    <tr>
                        <!-- affiche les membre dans chaque ligne du tableau-->
                        <?php foreach ($membre as$value): ?>
                            <td><?= $value ?></td>
                        <?php endforeach ?>
                            <td><a href="?action=profil&id_membre=<?= $membre->id_membre ?>" class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <?php endif ?>

        <?php if(isset($_GET['action']) && $_GET['action'] == 'profil' && is_numeric($_GET['id_membre']) && $membre ): ?>
            <div class="col-sm-offset-2 col-sm-7">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sheena Shrestha</h3>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                            </div>
                            <div class=" col-md-9 col-lg-9 "> 
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>ID :</td>
                                            <td><?= $membre->id_membre ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pseudo :</td>
                                            <td><?= $membre->pseudo ?></td>
                                        </tr>
                                        <tr>
                                            <td>nom :</td>
                                            <td><?= $membre->nom ?></td>
                                        </tr>
                                        <tr>
                                            <td>Prenom :</td>
                                            <td><?= $membre->prenom ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><a href="mailto:info@support.com"><?= $membre->email ?></a></td>
                                        </tr>
                                        <tr>
                                            <td>Sexe :</td>
                                            <td><?php if($membre->sexe == "m") { echo 'Homme'; } else { echo 'Femme'; } ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ville :</td>
                                            <td><?= $membre->ville ?></td>
                                        </tr>
                                        <tr>
                                            <td>Code Postal :</td>
                                            <td><?= $membre->cp ?></td>
                                        </tr>
                                        <tr>
                                            <td>Adresse :</td>
                                            <td><?= $membre->adresse ?></td>
                                        </tr>
                                        <tr>
                                            <td>Statue :</td>
                                            <td><?php if($membre->statut == 1) { echo 'Admin'; } else { echo 'Membre'; } ?></td>     
                                        </tr>     
                                    </tbody>
                                </table>      
                                <!--<a href="#" class="btn btn-primary>Faire passer le membre Admin</a>-->
                            </div><!-- /.col-md-9 col-lg-9 -->
                        </div><!-- /.row -->
                    </div><!-- /.panel-body -->
                    <div class="panel-footer">
                        <a type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <?php if($membre->statut == 0): ?>
                                <a href="?action=admin&id_membre=<?= $membre->id_membre ?>" class="btn btn-primary">Faire passer le membre Admin</a>
                            <?php endif ?>
                            <a  type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <button type="button" class="btn btn-sm btn-danger" data-target="#myModal" data-toggle="modal"><i class="glyphicon glyphicon-remove"></i></button>
                        </span>
                    </div><!-- /.panel-footer -->
                </div><!-- /.panel-info-->
            </div>
        <?php endif ?>

    </div><!-- /.container-->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header alert alert-danger">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Supprimer un Membre ?</h4>
                </div>
                <div class="modal-body">
                    <p>Voulez vous vraiment supprimer <strong><?= $membre->prenom ?></strong> avec l'ID : <?= $membre->id_membre ?> de la BDD ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                    <a href="?action=supprimer&id_membre=<?= $membre->id_membre ?>" type="button" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>

<?php
    //---------  Import footer site -------------//
    include('../inc/footer.inc.php');