<?php
include('layout/header_form.inc.php');
include('layout/nav_form.inc.php');
?>

<div class="container">

  <div class="starter-template">
    <h1>lecture de fichier</h1>  
  </div>
<?php 
    // apres avoir vu comment enregistrer des données dans un fichier sur le serveur, nous allons les récupérer afin de les manipuler sur ce fichier.

    $nom_fichier = 'liste.txt';
    $contenue_fichier = file($nom_fichier);
    // file() fait tout le travail pour nous
    // cette fonction retourne chaque ligne d'un fichier dans un tabkleau array
    echo '<pre>'; print_r($contenue_fichier); echo '</pre>';

    // afficher dans une liste ul li chaque ligne récupérée du fichier liste.txt
    $lenght = count($contenue_fichier);
    echo '<ul class="list-group">';
        for ($i=0; $i < $lenght ; $i++) { 
            echo '<li class="list-group-item  ">' . $contenue_fichier[$i] . '</li>';
        }
    echo '</ul>';

    // avec foreach
    echo '<ul class="list-group">';
        foreach ($contenue_fichier as $value) {
            $position_tiret = strpos($value, '-');
            $position_tiret += 2;

            echo '<li class="list-group-item  ">' . $value . '</li>';
            echo '<li class="list-group-item list-group-item-info" >' . substr($value, 0, ($position_tiret-2)) . '</li>';
            echo '<li class="list-group-item list-group-item-success" >' . substr($value, $position_tiret) . '</li>';
        }
    echo '</ul>';
?>
</div>


<?php
include('layout/header_form.inc.php'); 