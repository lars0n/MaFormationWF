<?php
    // j'import le fichier init
    require('inc/init.inc.php');

    // variable erreur
    $erreur = '';

    // vereifie si id_movie existe en get et que c'est un chiffre'
    if(isset($_GET['id_movies']) && is_numeric($_GET['id_movies']))
    {
        // requete préparé pour recupéré un film
        $id_movies = $_GET['id_movies'];
        $req_movie = $pdo->prepare("SELECT * FROM movies WHERE id_movies = ?");
        $req_movie->execute([$id_movies]);

        // comme il y a qu'un film un récupérer un fetch suffit
        $movie = $req_movie->fetch(PDO::FETCH_OBJ);

        // si le fetch ne récupere aucun film crée une erreur
        if(!$movie)
        {
            $content .= '<div class="alert alert-danger">Ce film n\'existe pas <div>';
            $erreur = true;
        }
    }else
    {
        // si get id_movie n'existe pas ou n'est pas un chiffre alors crée une erreur'
        $content .= '<div class="alert alert-danger">Ce film n\'existe pas <div>';
        $erreur = true;
    } 
 
    //j'import le header html
    require('inc/header.inc.php');
?>

    <div class="container">
        <!--message pour l'utilisateur, s'i il y'a une erreur affiche le message d'erreur et arrete l'execution de la page-->
        <?= $content; ?>
        <?php if($erreur) { exit(); } ?>
        <div class="moviecard">
            <div class="movie-poster play-trailer"><img width="360" height="540" src="<?= $movie->image ?>" alt=""></div>
            <div id="movie-content">
                <div class="movie-ratings"><span class="star">★</span><span class="score">7.7</span><span class="score-out-of">/ 10 (IMDB)</span></div>
                <div class="movie-title"><?= substr($movie->title, 0, 18) ?><span class="movie-year"><?= $movie->year_of_prod ?></span></div>
                <div class="movie-details"><span class="movie-duration">2h 1min</span><span class="movie-genre"><?= $movie->category ?></span><span class="movie-genre"><?= $movie->language ?></span></div>
                <div class="movie-castcrew"><span class="title">Réalisateur</span><span class="name"><?= $movie->director ?></span></div>
                <div class="movie-castcrew"><span class="title">Producteur</span><span class="name"><?= $movie->producer ?></span></div>
                <div class="movie-castcrew"><span class="title">Acteurs</span><span class="name"><?= $movie->actors ?></span></div>
                <div class="movie-synopsis"><?= $movie->storyline ?></div>
                <button class="movie-trailer-btn play-trailer" type="button">play trailer</button>
            </div>
            <div class="movie-trailer"><a class="back-btn">Retour</a>
                <div id="youvideo">
                <iframe src="<?= $movie->video ?>" frameborder="0" allowfullscreen="allowfullscreen" allowScriptAccess="always"></iframe>
                </div>
            </div>
        </div>
    </div>

<?php 
    require('inc/footer.inc.php');