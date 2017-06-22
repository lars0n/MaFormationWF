<style>
    * {
        font-family: serif;
    }

     body {
        margin: 0;  
    }

    h1{
        padding: 10px;
        background-color: Gold ;
        color: white;
        transition: 1s;
    }

    a {
        margin-left: 10px;
        padding: 10px 20px;
        text-decoration: none;
        background-color: Gold ;
        color: white;
        transition: 0.5s;
    }

    a:hover {
        background-color: white;
        border: 1px solid Gold ;
        color: Gold;
    }
</style>

<h1>page 2</h1>

<a href="page1.php">aller vers 1</a>

<?php
// pour recuperer une ou des informations depuis l'url, nous pouvons utiliser le protocole HTTP GET
// en php nous utilisons la superglobale $_GET
// une superglobale est disponoble dans tous les environement, notament dans une fonction sans avoir besoin de l'appeler avec le mot clé "global"
// TOUTES les superglobales sont des tableaux ARRAY

// dans l'url le ? précise que l'url est finie, tout ce qui se trouve après le ? sont des informations que nous retrouverons dans $_GET
// syntaxe:
// ?indice1=valeur1&indice2=valeur2&indice3=valeur3 etc..
echo '<pre>'; print_r($_GET); echo '<pre>';

// /!\ $GET & $_POST sont toujours existantes !!!
// si je fais: if(isset($_GET)) la réponse sera systématiquement "vrai"

if(isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix']))
{
echo 'L\'article est : ' . $_GET['article'] . '<br/>';
echo 'La couleur est : ' . $_GET['couleur'] . '<br/>';
echo 'Le prix est  : ' . $_GET['prix'] . ' euros <br/>';
}

