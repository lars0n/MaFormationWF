<?php     
    //-------------- importe le header ----------------------------//
    include('inc/header.inc.php');
?>

<div class="container">

      <div class="starter-template">
        <h1>Formulaire PHP</h1>
      </div>

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 well">
            <form action="" method="post">
            <legend>Information</legend>

                <input type="hidden" name='id_annuaire' id="id_annuaire" value="<?= $info_user['id_annuaire']; ?>">

                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input class="form-control" type="text" name="nom" id="nom" value="<?= $info_user['nom']; ?>">
                </div>

                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input class="form-control" type="text" name="prenom" id="prenom" value="<?= $info_user['prenom']; ?>">
                </div>

                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input class="form-control" type="text" name="telephone" id="telephone" value="<?= $info_user['telephone']; ?>">
                </div>

                <div class="form-group">
                    <label for="profession">Profession</label>
                    <input class="form-control" type="text" name="profession" id="profession" value="<?= $info_user['profession']; ?>">
                </div>

                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input class="form-control" type="text" name="ville" id="ville" value="<?= $info_user['ville']; ?>">
                </div>

                <div class="form-group">
                    <label for="codepostale">Code Postale</label>
                    <input class="form-control" type="text" name="codepostale" id="cp" value="<?= $info_user['codepostale']; ?>">
                </div>

                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <textarea class="form-control" name="adresse" id="adresse" cols="30" rows="5"><?= $info_user['adresse']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="date_de_naissance">Date de naissance</label>
                    <input class="form-control" type="text" name="date_de_naissance" id="datepicker" value="<?= $info_user['date_de_naissance']; ?>">
                </div>
                

                <div class="form-group">
                    <label for="sexe"></label>
                    <select class="form-control" name="sexe" id="sexe">
                        <option value="m">Homme</option>
                        <option value="f" <?php if($info_user['sexe'] == 'f') { echo 'selected'; } ?>>Femme</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="5"><?= $info_user['description']; ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Enregistrement</button>
            </form>
        </div><!--/.col-sm-8 -->
      </div><!-- /.row-->

    </div><!-- /.container -->

<?php

    //-------------- import le footer -----------------------------//
    require('inc/footer.inc.php');