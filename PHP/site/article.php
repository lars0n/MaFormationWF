<?php
//--------- Import init -------// 
require('inc/init.inc.php');

// on vérifie si l'indice id_article existe dans GET ou s'il n'est pas vide
if(isset($_GET['id_article']) && is_numeric($_GET['id_article']))
{
  $requete_article = $pdo->prepare("SELECT * FROM article WHERE id_article = ?");
  $requete_article->execute([$_GET['id_article']]);
  $article = $requete_article->fetch(PDO::FETCH_OBJ);
}else {
    header('location:boutique.php');
}

if(!$article) {
    header('location:boutique.php');
}

// je récupere tous mes articles
$requ_articles = $pdo->query("SELECT * FROM article");

//--------- Import du Header et du nav -------//
// l'affichage html commence ici 
include('inc/header.inc.php');
include('inc/nav.inc.php');
//----------------------------------------//

?>

<div class="container">

  <div class="starter-template">
    <?= $message; // messages destinés à l'utilisateur ?>  
  </div>

  <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">
            <div class="row">
                <a href="boutique.php?categorie=<?= $article->categorie;?>" class="btn btn-primary" style="margin: 10px 30px;"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Retour</a>
            </div>	
				<div class="col-md-5">
					<div class="product col-md-8 service-image-left">
                    
						<center>
							<img data-action="zoom" id="item-display" src="<?= URL; ?>assets/photo/<?= $article->photo; ?>" alt=""></img>
						</center>
					</div>
					
					<div class="container service1-items col-sm-2 col-md-2 pull-left">
						<center>
							<a id="item-1" class="service1-item">
								<img src="<?= URL; ?>assets/photo/<?= $article->photo; ?>" alt=""></img>
							</a>
							<a id="item-2" class="service1-item">
								<img src="<?= URL; ?>assets/photo/<?= $article->photo; ?>" alt=""></img>
							</a>
							<a id="item-3" class="service1-item">
								<img src="<?= URL; ?>assets/photo/<?= $article->photo; ?>" alt=""></img>
							</a>
						</center>
					</div>
				</div>
					
				<div class="col-md-7">
					<div class="product-title"><?= $article->titre; ?></div>
					<div class="product-desc"><?= $article->description; ?></div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
					<div class="product-price">$ <?= $article->prix; ?></div>
					<div class="product-stock"><?php if($article->stock > 0){ echo 'En stock';} else { echo '<span class="text-danger">Rupture de stock<span>';}  ?></div>
					<hr>
                        <form action="panier.php" method="post">
                            <input type="hidden" name="id_article" value="<?= $article->id_article; ?>">
                            <div class="row">
                                <div class="form-group col-sm-3">
                                    <label for="">Quantite :</label>
                                    <select name="quantite" class="form-control" id="" <?php if($article->stock <= 0){ echo 'disabled';} ?> >
                                        <!--faire un champ select pour le choix de la quantité selon la quantité disponible du produiut avec  une sécurité pour afficher maximum 7 si la quantité est supérieur (2eme condition d'entrée dans la boucle ($i<8)-->
                                        <?php for($i=1; $i <= $article->stock && $i < 8; $i++) { ?>
                                            <option ><?= $i;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div><!-- /.row-->
                        <hr>
                            <div class="btn-group cart">
                                <button name="ajout_panier" type="submit" class="btn btn-success" <?php if($article->stock <= 0){ echo 'disabled="disabled"';} ?> >
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Ajouter au Panier 
                                </button>
                            </div>
                            <div class="btn-group wishlist">
                                <button type="button" class="btn btn-danger" <?php if($article->stock <= 0){ echo 'disabled="disabled"';} ?> >
                                    <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> Ajouter à la liste de shouait 
                                </button>
                            </div>
                        </form>
				</div><!-- /. col-md-7 -->
			</div> 
		</div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<!--<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>-->
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">

                            <section class="container product-info">
                                <?= $article->description; ?>
                            </section>

							<!--<section class="container product-info">
								The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.

								<h3>Corsair Gaming Series GS600 Features:</h3>
								<li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
								<li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise level by varying fan speed in response to temperature</li>
								<li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to 100% load)</li>
								<li>0.99 Active Power Factor Correction provides clean and reliable power</li>
								<li>Universal AC input from 90~264V — no more hassle of flipping that tiny red switch to select the voltage input!</li>
								<li>Extra long fully-sleeved cables support full tower chassis</li>
								<li>A three year warranty and lifetime access to Corsair’s legendary technical support and customer service</li>
								<li>Over Current/Voltage/Power Protection, Under Voltage Protection and Short Circuit Protection provide complete component safety</li>
								<li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
								<li>MTBF: 100,000 hours</li>
								<li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC, C-tick</li>
							</section>-->
										  
						</div>
					    <div class="tab-pane fade" id="service-two">
						
						<section class="container">
								
						</section>
						
					    </div>
                        <div class="tab-pane fade" id="service-three">
                                                    
                        </div>
				</div>
				<hr>
			</div>
		</div>
	</div>

    <!-- *************  new arrival  **************** -->

    <!--Item slider text-->
    <!--<div class="container">-->
        <div class="row" id="slider-text">
            <div class="col-md-6" >
            <h2>NEW COLLECTION</h2>
            </div>
        </div>
    <!--</div>-->

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                <div class="carousel-inner">

                    <div class="item active">
                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <a href="<?= URL ?>article.php?id_article=<?= $article->id_article; ?>"><img src="<?= URL; ?>assets/photo/<?= $article->photo; ?>" class="img-responsive center-block"></a>
                            <h4 class="text-center"><?= $article->titre; ?></h4>
                            <h5 class="text-center"><?= $article->prix; ?> &euro;</h5>
                        </div>
                    </div>

                   <?php while($articles = $requ_articles->fetch(PDO::FETCH_OBJ)) { ?>

                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <a href="<?= URL ?>article.php?id_article=<?= $articles->id_article; ?>"><img src="<?= URL; ?>assets/photo/<?= $articles->photo; ?>" class="img-responsive center-block"></a>
                            <h4 class="text-center"><?= $articles->titre; ?></h4>
                            <h5 class="text-center"><?= $articles->prix; ?> &euros;</h5>
                        </div>
                    </div>

                   <?php } ?>

                </div>
                <div id="slider-control">
                    <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
                    <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.container -->

<?php
    //---------  Import footer site -------------//
    include('inc/footer.inc.php');
