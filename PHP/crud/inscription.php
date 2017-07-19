<?php
    require_once('inc/init.inc.php');

    $membre = array('');
    

    if($_POST)
    {
        $erreur = '';
        // exercice : controler les champs pseudo, nom, prenom taille max: 20 caractère, taille min: 4;
        // controller que le pseudo n'est pas présent en bdd
        if(isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['civilite']) && isset($_POST['ville']) && isset($_POST['code_postal']) && isset($_POST['adresse'])) 
        {
            foreach($_POST AS $key => $value)
            {
                $membre[$key] = $value;
            }

            $tableau_controle = [
                'pseudo'    => $membre['pseudo'],
                'nom'       => $membre['nom'],
                'prenom'    => $membre['prenom']
            ];

            foreach($tableau_controle AS $key => $value) 
            {
                if(iconv_strlen($value) < 4 || iconv_strlen($value) > 20)

                {
                    $erreur = true;
                    $content .= '<div class="alert alert-danger">Le champs ' . $key . ' doit contenir entre 4 et 20 caractère </div>'; 
                }
            }


            $pseudo_exist = $pdo->prepare("SELECT * FROM membre WHERE pseudo = ?");
            $pseudo_exist->execute([$membre['pseudo']]);

            if($pseudo_exist->fetch())
            {
                $erreur = true;
                $content .= '<div class="alert alert-danger">L\'utilisateur avec le pseudo ' . $membre['pseudo'] . ' existe déja.</div>';
            }

            if(!$erreur) 
            {
                $enregistrement_membre = $pdo->prepare("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse, statut) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 0)");
                $enregistrement_membre->execute([$membre['pseudo'], $membre['mdp'], $membre['nom'], $membre['prenom'], $membre['email'], $membre['civilite'], $membre['ville'], $membre['code_postal'], $membre['adresse']]);

                $content .= '<div class="alert alert-success">Le Membre a bien été enregistré </div>'; 
            }
        }
    }



    require_once('inc/haut.inc.php');
?>

    <section>
        <div class="container">
            <!--message pour l'utilisateur-->
            <?= $content; ?>

            <form action="" method="post" class="well col-sm-8 col-sm-offset-2">
                <legende><h3>Inscription</h3></legende>
                <div class="form-group">
                    <label for="pseudo">Pseudo :</label>
                    <input type="text" class="form-control" name="pseudo" value="<?= (isset($membre['pseudo']))? $membre['pseudo'] : null ?>" id="pseudo">
                </div>
                <div class="form-group">
                    <label for="mdp">Mot de Passe :</label>
                    <input type="text" class="form-control" name="mdp" value="<?= (isset($membre['mdp']))? $membre['mdp'] : null ?>" id="mdp">
                </div>
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" class="form-control" name="nom" value="<?= (isset($membre['nom']))? $membre['nom'] : null ?>" id="nom">
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" name="prenom" value="<?= (isset($membre['prenom']))? $membre['prenom'] : null ?>" id="prenom">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" class="form-control" name="email" value="<?= (isset($membre['email']))? $membre['email'] : null ?>" id="email">
                </div>

                <div class="form-group">
                    <label for="civilite">Civilite :</label>
                    <select class="form-control" name="civilite" id="civilite">
                        <option value="m">Homme</option>
                        <option value="f">Femme</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input type="text" class="form-control" name="ville" value="<?= (isset($membre['ville']))? $membre['ville'] : null ?>" id="ville">
                </div>
                <div class="form-group">
                    <label for="code_postal">Code Postal :</label>
                    <input type="text" class="form-control" name="code_postal" value="<?= (isset($membre['code_postal']))? $membre['code_postal'] : null ?>" id="code_postal">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <textarea class="form-control" name="adresse" id="adresse" cols="30" rows="5"><?= (isset($membre['adresse']))? $membre['adresse'] : null ?></textarea>
                </div>

                <button type="submit" class="btn btn-success btn-block">S'incrire</button>
            </form>
        </div>
    </section>

<?php
    require_once('inc/bas.inc.php');