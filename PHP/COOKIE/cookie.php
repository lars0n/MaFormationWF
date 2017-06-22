<?php
    // récupération du choix de l'utilisateur ou cas par default
    if(isset($_GET['langue']))
    {
        $langue = $_GET['langue']; // choix de l'utilisateur'
    }elseif (isset($_COOKIE['langue'])) 
    {
        $langue = $_COOKIE['langue'];
    }else
    {
        $langue = 'fr';// cas par default
    }

    // nombre de seconde dans une année
    $un_an = 365*24*3600; // nb_de_jour*nb_heure*nb_seconde

    // création d'un cookie sur le poste utilisateur
    // /!\ la fonction setCookie() doit etre appeler avant le moindre affichage dans la page !!
    // pour générer un cokkie: 3 arguments setCookie(nom, valeur, la duree_de_vie)
    setCookie("langue", $langue, time()+$un_an);

    function activepays($lg) {
        global $langue;
        if($langue == $lg) 
        {
            return 'active';
        } 
    }

    include('assets/layout/header.inc.php');
    include('assets/layout/nav.inc.php');
?>

<div class="container">
    <div class="starter-template">
        <h1>Les Cookie</h1>  
    </div>
    
    <div class="list-group">
        <a class="list-group-item <?= activepays('fr'); ?> " href="?langue=fr" >France</a>
        <a class="list-group-item <?= activepays('es'); ?>" href="?langue=es">Espagne</a>
        <a class="list-group-item <?= activepays('it'); ?>" href="?langue=it">Italie</a>
        <a class="list-group-item <?= activepays('en'); ?>" href="?langue=en">Angleterre</a>
    </div>

    <?php
        // affichage d'un text selon la langue
        switch ($langue) // on teste la valeur de $langue
        {
            case 'fr':
                echo '<p class="bg-primary">Bonjour,<br> vous visitez le site en langue française</p>';
                break;
            case 'en':
                echo '<p class="bg-primary">Hello,<br> vous visitez le site en langue anglais</p>';
                break;
            case 'it':
                echo '<p class="bg-primary">Ciao,<br> vous visitez le site en langue italienne</p>';
                break;
            case 'es':
                echo '<p class="bg-primary">Hola,<br> vous visitez le site en langue espagnole</p>';
                break;
            
            default:
                echo '<p class="bg-warning" >langue inconnu</p>';
                break;
        }

    //echo '<pre>'; print_r($_SERVER); echo '</pre>';
    // il est popssible de récuperer la langue du navigateur de l'utilisateur'
    //echo 'langue du navigateur ' . substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    echo time(); //time() affiche la valeur du timestamp
    echo '<pre>'; print_r($_ENV); echo '</pre>';
    ?>

</div>


<?php
    include('assets/layout/footer.inc.php');