<?php
    //--------- Import init -------// 
    require('../inc/init.inc.php');

    // restriction d'acces, si l'utilisateur n'est pas admin alors il ne doit pas accéder à cette page.'
    if(!utilisateur_est_admin())
    {
    header("location:../connexion");
    exit();// permet d'arreter l'exécution du site(au cas où une personne malveillante ferait des injections via GET)
    }

    // requete pour récuperer les commandes et le nombre de colonne dans la tables
    $commandes = $pdo->query("SELECT commande.id_commande, commande.id_membre, membre.prenom, commande.montant, commande.date, commande.etat FROM commande, membre WHERE commande.id_membre = membre.id_membre");
    $commande_col = $commandes->columnCount();


    // requete pour recupérer details d'une commande avec un id
    if(isset($_GET['action']) && $_GET['action'] == 'details' && is_numeric($_GET['id_commande'])) {
        $id_commande = $_GET['id_commande'];
        $details_commande = $pdo->prepare("SELECT * FROM commande, membre, details_commande, article WHERE commande.id_membre = membre.id_membre AND commande.id_commande = details_commande.id_commande AND details_commande.id_article = article.id_article  AND details_commande.id_commande = ?");
        $details_commande->execute([$id_commande]);

        $details = $details_commande->fetchAll(PDO::FETCH_ASSOC);
    }

    pre($details);

    //--------- Import du Header et du nav -------//
    // l'affichage html commence ici 
    include('../inc/header.inc.php');
    include('../inc/nav.inc.php');
    //----------------------------------------//
   
?>

    <div class="container">

        <div class="starter-template">
            <h1>Gestion Commande</h1>
            <?= $message; // messages destinés à l'utilisateur ?> 
            <?php if(!empty($_SESSION['message']))
                {
                    echo $_SESSION['message'];
                    $_SESSION['message'] = '';
                }
            ?>
            <a href="?action=afficher" class="btn btn-warning">Afficher </a> 
            <!--<a href="?action=affichage" class="btn btn-primary">Afficher un produit</a>--> 
        </div>

        <?php if(empty($_GET['action']) || $_GET['action'] == 'afficher'): ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <!-- affiche la colonne -->
                    <?php for($i = 0; $i < $commande_col; $i++): ?>
                        <th><?= $commandes->getColumnMeta($i)['name'] ?></th>
                    <?php endfor ?>
                        <th>Voir La commande</th> 
                </tr>
            </thead>
            <tbody>
                <!-- parcoure la table membre-->
                <?php while($commande = $commandes->fetch(PDO::FETCH_OBJ)): ?>
                    <tr>
                        <!-- affiche les membre dans chaque ligne du tableau-->
                        <?php foreach ($commande as$value): ?>
                            <td><?= $value ?></td>
                        <?php endforeach ?>
                            <td><a href="?action=details&id_commande=<?= $commande->id_commande ?>" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <?php endif ?>

        <?php if(!empty($_GET['action']) && $_GET['action'] == 'details'): ?>
            <div>
                <h2>Récapitulatif Commande</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <!--<th>Nombre d'article</th>-->
                            <th>montant</th>
                            <th>etat</th>
                            <th>date de la commande</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!--<td><?= $details[0]['montant'] ?></td>-->
                            <td><?= $details[0]['montant'] ?></td>
                            <td><?= $details[0]['etat'] ?></td>
                            <td><?= $details[0]['date'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>

            <h2>Liste des articles</h2>
            <?php foreach($details as $value): ?>
            <div class="panel panel-primary">
                <div class="panel-heading"><?= $value['titre'] ?></div>
                <div class="row">
                    <div class="col-sm-3">
                        <img width="200" src="<?= URL . 'assets/photo/' . $value['photo'] ?>" alt="">
                    </div>
                    <div class="panel-body col-sm-9">
                        <ul class="list-group">
                            <li class="list-group-item">Réference : <span><?= $value['reference'] ?></span></li>
                            <li class="list-group-item">Catégorie : <span><?= $value['categorie'] ?></span></li>
                            <li class="list-group-item">Titre : <span><?= $value['titre'] ?></span></li>
                            <li class="list-group-item">prix : <span><?= $value['prix'] ?></span></li>
                            <li class="list-group-item">stock : <span><?= $value['stock'] ?></span></li>
                            <li class="list-group-item">Quantite de la commande : <span><?= $value['quantite'] ?></span></li>
                            <li class="list-group-item">prix de la commande : <span><?= $value['prix'] * $value['quantite'] ?></span></li>
                        </ul>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.panel -->
            <?php endforeach ?>
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