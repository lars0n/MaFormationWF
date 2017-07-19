<?php
    // j'import le fichier init
    require('inc/init.inc.php');

    // je crée un tableau movies
    $movies = array('');
    
    // requete pour récupérer les filme de la bdd
    $req_movies = $pdo->query("SELECT * FROM movies");
    /*$nb_col_movies = $req_movies->columnCount();*/

    // je vérifie si post n'est pas vide'
    if($_POST)
    {
        // variable erreur vide par default
        $erreur = '';

        // si mes champ du formulaire existe je rentre dans la condition
        if(isset($_POST['title']) && isset($_POST['actors']) && isset($_POST['director']) && isset($_POST['producer']) && isset($_POST['year_of_prod']) && isset($_POST['language']) && isset($_POST['category']) && isset($_POST['storyline']) && isset($_POST['video']) && isset($_POST['image'])) 
        {
            // boucle  qui remplie mon tableau $movie
            foreach($_POST AS $key => $value)
            {
                $movies[$key] = $value;
            }

            //je crée un tableau avec les champs à controler
            $tableau_controle = [
                'titre'                     => $movies['title'],
                'nom du realisateur'        => $movies['director'],
                'acteurs'                   => $movies['actors'],
                'Producteur'                => $movies['producer'],
                'Synopsis'                  => $movies['storyline'],
            ];

            // je parcoure mon tableau a controler
            foreach($tableau_controle AS $key => $value) 
            {
                // si la valeur est inférieur a 5 je crée une erreur et un message pour utilisateur
                if(iconv_strlen($value) < 5)
                {
                    $erreur = true;
                    $content .= '<div class="alert alert-danger">Le champs ' . $key . ' doit contenir au moins 5 carctère </div>'; 
                }
            }

            // vérifie si l'URL est valide
            if(!filter_var($movies['video'], FILTER_VALIDATE_URL))
            {
                $erreur = true;
                $content .= '<div class="alert alert-danger">L\' URL de la vidéo n\'est pas valide, Merci de fournir une URL valide.</div>'; 
            }

            // vérifie si l'URL est valide
            if(!filter_var($movies['image'], FILTER_VALIDATE_URL))
            {
                $erreur = true;
                $content .= '<div class="alert alert-danger">L\' image n\'est pas valide, Merci de fournir une URL valide.</div>'; 
            }


            // vérifie si le film est deja present en bdd
            $movie_exist = $pdo->prepare("SELECT * FROM movies WHERE title = ?");
            $movie_exist->execute([$movies['title']]);

            if($movie_exist->fetch())
            {
                $erreur = true;
                $content .= '<div class="alert alert-danger">Le Film ' . $membre['pseudo'] . ' existe déja.</div>';
            }

            // si il' y a pas d'erreur je peux ajouter le film dans la BDD
            if(!$erreur) 
            {
                $enregistrement_movie = $pdo->prepare("INSERT INTO movies (title, actors, director, producer, year_of_prod, language, category, storyline, video, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $enregistrement_movie->execute([$movies['title'], $movies['actors'], $movies['director'], $movies['producer'], $movies['year_of_prod'], $movies['language'], $movies['category'], $movies['storyline'], $movies['video'], $movies['image']]);

                $content .= '<div class="alert alert-success">Le Film à été ajouté avec succés dans la BDD </div>';
                unset($movies); 
            }
        }
    }

    //j'import le header html
    require('inc/header.inc.php');
?>
    <div class="container">
        <!--message pour l'utilisateur-->
        <?= $content; ?>
        <?php if(isset($_GET['action']) && $_GET['action'] == 'ajouter'): ?>
            <form action="" method="post" class="well col-sm-8 col-sm-offset-2">
                <legende><h3>Ajout d' un Film</h3></legende>
                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" class="form-control" name="title" value="<?= (isset($movies['title']))? $movies['title'] : null ?>" id="title">
                </div>
                <div class="form-group">
                    <label for="actors">Acteurs :</label>
                    <input type="text" class="form-control" name="actors" value="<?= (isset($movies['actors']))? $movies['actors'] : null ?>" id="actors">
                </div>
                <div class="form-group">
                    <label for="director">Réalisateur :</label>
                    <input type="text" class="form-control" name="director" value="<?= (isset($movies['director']))? $movies['director'] : null ?>" id="director">
                </div>
                <div class="form-group">
                    <label for="producer">Producteur</label>
                    <input type="text" class="form-control" name="producer" value="<?= (isset($movies['producer']))? $movies['producer'] : null ?>" id="producer">
                </div>

                <div class="form-group">
                    <label for="year_of_prod">Année de production :</label>
                    <select class="form-control" name="year_of_prod" id="year_of_prod">
                        <option >2017</option>
                        <option <?php if(isset($movies['year_of_prod']) && $movies['year_of_prod'] === '2016') { echo 'selected'; } ?> >2016</option>
                        <option <?php if(isset($movies['year_of_prod']) && $movies['year_of_prod'] === '2015') { echo 'selected'; } ?> >2015</option>
                        <option <?php if(isset($movies['year_of_prod']) && $movies['year_of_prod'] === '2014') { echo 'selected'; } ?> >2014</option>
                        <option <?php if(isset($movies['year_of_prod']) && $movies['year_of_prod'] === '2013') { echo 'selected'; } ?> >2013</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="language">Langue :</label>
                    <select class="form-control" name="language" id="language">
                        <option value="fr" <?php if(isset($movies['language']) && $movies['language'] === 'fr') { echo 'selected'; } ?> >Français</option>
                        <option value="en" <?php if(isset($movies['language']) && $movies['language'] === 'en') { echo 'selected'; } ?> >Anglais</option>
                        <option value="es" <?php if(isset($movies['language']) && $movies['language'] === 'es') { echo 'selected'; } ?> >Espagnole</option>
                        <option value="it" <?php if(isset($movies['language']) && $movies['language'] === 'it') { echo 'selected'; } ?> >Italien</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="category">Categorie :</label>
                    <select class="form-control" name="category" id="category">
                        <option <?php if(isset($movies['category']) && $movies['category'] === 'Action') { echo 'selected'; } ?> >Action</option>
                        <option <?php if(isset($movies['category']) && $movies['category'] === 'Comedie') { echo 'selected'; } ?> >Comedie</option>
                        <option <?php if(isset($movies['category']) && $movies['category'] === 'Humour') { echo 'selected'; } ?> >Humour</option>
                        <option <?php if(isset($movies['category']) && $movies['category'] === 'Romentique') { echo 'selected'; } ?> >Romentique</option>
                        <option <?php if(isset($movies['category']) && $movies['category'] === 'Combat') { echo 'selected'; } ?> >Combat</option>
                    </select>
                </div>

        
                <div class="form-group">
                    <label for="storyline">Synopsie :</label>
                    <textarea class="form-control" name="storyline" id="storyline" cols="30" rows="5"><?= (isset($movies['storyline']))? $movies['storyline'] : null ?></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Url image<small>(url)</small> :</label>
                    <input type="text" class="form-control" name="image" value="<?= (isset($movies['image']))? $movies['image'] : null ?>" id="image">
                </div>

                <div class="form-group">
                    <label for="video">Bande Annonce<small>(url)</small> :</label>
                    <input type="text" class="form-control" name="video" value="<?= (isset($movies['video']))? $movies['video'] : null ?>" id="video">
                </div>

                <button type="submit" class="btn btn-success btn-block"> Ajouter <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></button>
            </form>
        <?php endif ?>

        <?php if(!isset($_GET['action']) || $_GET['action'] == 'afficher'): ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <!--<?php for($i = 0; $i < $nb_col_movies; $i++): ?>
                            <th><?= $req_movies->getColumnMeta($i)['name'] ?></th>
                        <?php endfor ?>-->
                        <th>Titre</th>
                        <th>Réalisateur</th>
                        <th>Date de production</th>
                        <th>Voir plus</th>
                    </tr>
                </thead>
                <tbody>
                    <!--boucle avec un fetch pour récupérer les film est les disposer dans un tableau-->
                    <?php while($movie = $req_movies->fetch(PDO::FETCH_OBJ)): ?>
                        <tr>
                                <td><?= $movie->title ?></td>
                                <td><?= $movie->director ?></td>
                                <td><?= $movie->year_of_prod ?></td>
                                <td><a class="btn btn-primary" href="detail_film.php?id_movies=<?= $movie->id_movies ?>" ><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></a></td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        <?php endif ?>

    </div>

<?php 
    require('inc/footer.inc.php');