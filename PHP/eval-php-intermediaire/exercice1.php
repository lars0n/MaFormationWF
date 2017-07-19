<?php 

    // création d'un tableau info
    $info = [
        'prenom'            => 'Lahcen',
        'nom'               => 'Ait',
        'adresse'           => 'rue poissy',
        'cp'                => 78300,
        'ville'             => 'Poissy',
        'email'             => 'larson920@gmail.com',
        'tel'               => 0636404272,
        'date_naissance'    => new DateTime('1990-05-02'), // je crée une nouvelle date en php avec la classe DateTime
    ];

    require('inc/header.inc.php');
?>

    <div class="container">
        <ul class="list-group col-sm-6 col-sm-offset-3">
            <li class="list-group-item active">Infos</li>
            <!-- je parcours mon tableau $info avec une boucle-->
            <?php foreach($info AS $key => $value): ?>
                <!-- si $key vaut date de naissance alors j'execute le code qui me permet de formater la date avec la methode format de l'objet date-->
                <?php if($key == 'date_naissance'):?>
                    <li class="list-group-item"><?= $key  . ' : ' .  $value->format('d/m/Y') ?></li>
                <?php else: ?>
                    <!-- j'affiche les info de mon tableau dans des li-->
                    <li class="list-group-item"><?= $key  . ' : ' .  $value ?></li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </div>

<?php 
    require('inc/footer.inc.php');