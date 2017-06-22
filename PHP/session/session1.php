<?php
    // pour voir les fichier de session => dossier tmp à la racine du serveur (xampp/ wamp/ mamp/ ...)

    // pour créer une session
    session_start(); // crée une session ou ne fait que l'ouvrir si la session existe déja
    // lors de la création d'une session, un cookie d'identification est crée coté utilisateur pour avoir le lien entre la session et l'utilisateur.
    //comme pour setcokkie(), la fonction session_star() doit etre exécutée avant le moindre affichage html !!!

    $_SESSION['pseudo'] = "Marie"; // $_SESSION est une superglobale, toutes les superglobales sans exeptions sont des tableux array. Il est donc possible de créer des indices avec valeurs dans notre session.
    $_SESSION['password'] = "soleil";
    $_SESSION['email'] = "mail@mail.fr";
    $_SESSION['age'] = 40;
    $_SESSION['adresse']['code_postal'] = 7500;
    $_SESSION['adresse']['ville'] = 'paris';
    $_SESSION['adresse']['adresse'] = 'rue du terter';

    include('assets/layout/header.inc.php');
    include('assets/layout/nav.inc.php');

    echo '<h2 class="bg-primary">premier affichage de la session: </h2>';
    echo '<pre>'; print_r($_SESSION); echo '</pre>'; 

    // pour supprimer un élémemt de la session:
    unset($_SESSION['password']);
    echo '<h2 class="bg-primary">deuxieme affichage de la session: </h2>';
    echo '<pre>'; print_r($_SESSION); echo '</pre>';

    //pour détruire la session
    session_destroy(); // nous permet de supprimer la session, EN REVANCHE il faut savoir que l'information session_destroy() est vu par l'interpreteur php, mise de coté puis exécutée uniquement à la fin du script en cours.

    echo '<h2 class="bg-primary">troisième affichage de la session: </h2>';
    echo '<pre>'; print_r($_SESSION); echo '</pre>'; 

?>

<div class="container">

    <div class="starter-template">
        <h1>Les session</h1>
        
    </div>

</div><!-- /.container -->

<?php
    include('assets/layout/footer.inc.php');
