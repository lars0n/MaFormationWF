<?php     
    //-------------- importe le header ----------------------------//
    include('inc/header.inc.php');
?>

<div class="container">

    <div class="starter-template">
        <h1>Affichage</h1>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
            <?php foreach ($champ_user as $key => $value) { ?>
                <th><?= $key; ?></th>
            <?php } ?>
                <th>Moddifié</th>
                <th>Supprimé</th>
                <th>profil</th>
            </tr>
        </thead>
        <tbody>
            <?php while($info_user = $info_users->fetch(PDO::FETCH_ASSOC)) { 
                if($info_user['sexe'] == 'm') {
                    $nbr_homme++;
                }else{
                    $nbr_femme++;
                } 
            ?>
            <tr>
                <?php foreach ($info_user as $value) { ?>
                    <td><?= $value;?></td>
                <?php } ?>
                    <td><a href="formulaire.php?action=modification&id=<?= $info_user['id_annuaire']; ?>" class="btn btn-info btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                    <td><a href="?action=suppresion&id=<?= $info_user['id_annuaire']; ?>" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                    <td><a href="profile.php?id=<?= $info_user['id_annuaire']; ?>" class="btn btn-success btn-block"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="alert alert-info" role="alert">il y'a <strong><?= $nbr_homme; ?> homme(s)</strong> et <strong><?= $nbr_femme; ?> femmes(s)</strong></div>

</div><!-- /.container -->

<?php
    include('inc/footer.inc.php');
