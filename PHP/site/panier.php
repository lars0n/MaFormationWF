<?php
//--------- Import init -------// 
require('inc/init.inc.php');
$erreur = '';

// viderv le panier
if(isset($_GET['action']) && $_GET['action'] == 'vider_panier')
{
    unset($_SESSION['panier']);// permet de vider le panier de la session
    
}

// retirer un article de la session
if(isset($_GET['action']) && $_GET['action'] == 'retirer' && is_numeric($_GET['id_article']))
{
    retirer_article_du_panier($_GET['id_article']);  
}

// VALIDATION DU PAIEMENT DU PANIER
if(isset($_GET['action']) && $_GET['action'] == 'payer' && !empty($_SESSION['panier']['prix']))
{
    // si l'utilisateur clic sue le boutton "payer le panier'
    // 1ere action: vérification du stock disponible en comparaison des quantités demandées
    //$taille_panier = count($_SESSION['panier']['titre']);
    for ($i=0; $i < count($_SESSION['panier']['titre']) ; $i++) 
    { 
        $resultat = $pdo->query("SELECT * FROM article WHERE id_article =" . $_SESSION['panier']['id_article'][$i]);
        $verif_stock = $resultat->fetch(PDO::FETCH_ASSOC);

        if($verif_stock['stock'] < $_SESSION['panier']['quantite'][$i])
        {
            // si on rentre dans cette condition alors il y a un stock ingférieur à la quantité demandée.
            // 2 possibilité: stock à 0 ou stock > mais inférieur à la quantité
            if($verif_stock['stock'] > 0)
            {
                // il reste du stock alors on affecte directement le stock restant pour la quantité demandée.
                $_SESSION['panier']['quantite'][$i] = $verif_stock['stock'];
                $message .= '<div class="alert alert-danger" role="alert" style="margin-top: 20px;">Attention, la quantité de l\' article "' . $_SESSION['panier']['titre'][$i] . '" a été modifié car notre stock est insuffisant ! <br/> Veuillez vérifier votre commande.</div>';
            }
            else {
                // si le stock est à 0 alors on enlève l'article du panier.
                $message .= '<div class="alert alert-danger" role="alert" style="margin-top: 20px;">Attention, l\' article "' . $_SESSION['panier']['titre'][$i] . '" a été supprimé de votre panier car nous sommes en rupture de stock pour ce produit ! <br/> Veuillez vérifier votre commande.</div>';
                retirer_article_du_panier($_SESSION['panier']['id_article'][$i]);
                $i--; // si nous enlevons un article du panier, il est necessaire de décrémenter (-1) la variable $i car avec array_splice les indice sont réordonnés
            }
            $erreur = true;
        }
    }
    if(!$erreur) // ou if($erreur != true)
    {
        $id_membre = $_SESSION['utilisateur']['id_membre'];
        $montant_commande = montant_total();
        $pdo->query("INSERT INTO commande (id_membre, montant, date) VALUES ($id_membre, $montant_commande, NOW())");
        $id_commande = $pdo->lastInsertId(); // on récuopre l'id inséré par la derniere requete

        $nb_tout_panier = sizeof($_SESSION['panier']['titre']);
        for ($i=0; $i < $nb_tout_panier ; $i++) {
            $id_article_commande = $_SESSION['panier']['id_article'][$i]; 
            $quantite_commande = $_SESSION['panier']['quantite'][$i]; 
            $prix_commande = $_SESSION['panier']['prix'][$i]; 
            $pdo->query("INSERT INTO details_commande (id_commande, id_article, quantite, prix) VALUES ($id_commande, $id_article_commande, $quantite_commande, $prix_commande)");

            // mise à jour du stock
            $pdo->query("UPDATE article SET stock = stock - $quantite_commande where id_article = $id_article_commande ");
        }
        unset($_SESSION['panier']);
    }
}

//creation panier
creation_panier();

if(isset($_POST['ajout_panier']))
{
    // si l'indice existe dans post alors l'utilisateur a cliqué sur le bouton ajouter au panier (depuis la page fiche_article.php)
    $info_article = $pdo->prepare("SELECT * FROM article WHERE id_article = :id_article");
    $info_article->bindParam(":id_article", $_POST['id_article'], PDO::PARAM_STR);
    $info_article->execute();

    $article = $info_article->fetch(PDO::FETCH_ASSOC);

    //ajout de la tva sur le prix
    $article['prix'] *= 1.2; 

    // on ajoute l'article dans le panier via cette fonction (voir dans function.inc.php)
    ajouter_un_article_au_panier($_POST['id_article'], $article['prix'], $_POST['quantite'], $article['titre'], $article['photo']);
}

//$total = montant_total(); 

//--------- Import du Header et du nav -------//
// l'affichage html commence ici 
include('inc/header.inc.php');
include('inc/nav.inc.php');
//----------------------------------------//

//pre($article);
//pre($_SESSION);

?>

<div class="container">
    <?= $message ?>
    <div class="row">
        <br>
        <div class="col-md-12">
            <div class="col-md-4 col-sm-6 col-xs-12 col-md-push-8 col-sm-push-6">
                <!--REVIEW ORDER-->
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4>Récapitulatif de Votre Commande</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <strong>SousTotal <span class="label label-default"><?= array_sum($_SESSION['panier']['quantite']) ?> Article(s)<span></strong>
                            <div class="pull-right"><span><?= number_format(montant_total(), 2, ',', ' ') ?></span> &euro;</div>
                        </div>
                        <div class="col-md-12">
                            <strong>Tax</strong><span> (20%)</span>
                            <div class="pull-right"><span><?= number_format((montant_total() * 0.2), 2, ',', ' ') ?></span> &euro;</div>
                        </div>
                        <div class="col-md-12">
                            <small>Délais de livraison</small>
                            <div class="pull-right"><span>2 jours</span></div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <strong>Total de la Commande</strong>
                            <div class="pull-right"><span><?= number_format((montant_total() * 1.2), 2, ',', ' ') ?></span> &euro;</div>
                            <hr>
                        </div>
                        
                        <a href="?action=payer" class="btn btn-primary btn-lg col-sm-12 btn-block <?php if(!utilisateur_est_connecte()) { echo 'disabled' ;} ?> " >Payer</a>
                        <a href="?action=vider_panier" class='btn btn-success btn-lg col-sm-12 btn-block'>Vider le Panier</a>
                        <div style="clear:both; margin-bottom: 5px;"></div>     
                        <?php if(!utilisateur_est_connecte()) { echo '<div class="alert alert-info">Afin de valider votre commande, veuillez vous <a href="connexion.php"><strong>connecter</strong></a> ou vous <a href="inscription.php"><strong>inscrire</strong></a></div>'; } ?>
                    </div><!-- /.panel-body -->
                </div>
                <!--REVIEW ORDER END-->

                <!--adresse-->
                <?php if(utilisateur_est_connecte()): ?>
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h4>Adresse</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <strong>Adresse :</strong>
                            <div class="pull-right"><?= $_SESSION['utilisateur']['adresse']?></div>
                            <br><br>
                        </div>
                        <div class="col-md-12">
                            <strong>Code Postal :</strong>
                            <div class="pull-right"><?= $_SESSION['utilisateur']['cp']?></div><br><br>
                        </div>
                        <div class="col-md-12">
                            <strong>Ville :</strong>
                            <div class="pull-right"><?= $_SESSION['utilisateur']['ville']?></div><br><br>
                        </div>
                    </div><!-- /.panel-body -->
                </div>
                <?php endif ?>
                <!--adresse END-->

            </div><!-- /.col-md-4 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6 -->
            <div class="col-md-8 col-sm-6 col-xs-12 col-md-pull-4 col-sm-pull-6">
                <!--SHIPPING METHOD-->
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h4>Votre Panier</h4></div>
                    <div class="panel-body">
                        <table class="table borderless">
                            <thead>
                                <tr>
                                    <th colspan="5"><strong>Votre panier: <?= $taille_tableau ?> Article(s)</strong></th>  
                                </tr>
                            </thead>
                            <tbody>
                                <!--vérification si le panier est vide sur n'importe quel tableau array dernnier niveau(id_article /prix / quantite ou titre)-->
                                <?php if(empty($_SESSION['panier']['id_article'])) {                           
                                    echo '<tr><td class="text-center text-danger">Aucun article dans votre panier.</td></tr>';
                                }
                                else {
                                    // sinon on affiche tous les produits dans un tableau html
                                    for ($i=0; $i < $taille_tableau ; $i++) { ?>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <tr>
                                    <td class="col-md-3">
                                        <div class="media">
                                            <a class=" pull-left" href=""> <img class="media-object" src="<?= URL . 'assets/photo/' . $_SESSION['panier']['photo'][$i] ?>" style="width: 72px; height: 72px;"> </a>
                                            <div class="media-body">
                                                <h5 class="media-heading"> <?= $_SESSION['panier']['titre'][$i] ?></h5>
                                                <h5 class="media-heading"> <?= $_SESSION['panier']['id_article'][$i] ?></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"><?= $_SESSION['panier']['prix'][$i] ?> &euro;</td>
                                    <td class="text-center"><?= $_SESSION['panier']['quantite'][$i] ?></td>
                                    <td class="text-right"><?= $_SESSION['panier']['prix'][$i] * $_SESSION['panier']['quantite'][$i]  ?> &euro;</td>
                                    <td class="text-right" style="width: 32%;">
                                        <a href="article.php?id_article=<?= $_SESSION['panier']['id_article'][$i] ?>" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Voir l'Article</a>
                                        <a href="?action=retirer&id_article=<?= $_SESSION['panier']['id_article'][$i] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Retirer</a>
                                    </td>
                                </tr>
               
                                <?php    }
                                    //rajouter une ligne du tableau qui affiche un lien a href (?action=payer) pour payer le panier si l'utilisateur est connecté. sinon afficher un text pour proposer à l'utilisateur de s'incrire ou de se connecter

                                    // rajouter une ligne du tableau qui affiche un bouton vider le panier uniquement si le panier n'est pas vide. Et faire le traitement afin que si on clic sur le bouiton, il faut vider le panier
                                }
                                ?>
                                
                            </tbody>
                        </table> 
                    </div><!-- /.panel-body -->
                </div><!-- /.panel-default -->
                <!--SHIPPING METHOD END-->
            </div><!-- /.col-md-8 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6 -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
</div><!-- /.container -->

<?php
//---------  Import footer site -------------//
include('inc/footer.inc.php');