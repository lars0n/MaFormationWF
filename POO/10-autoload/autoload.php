<?php
//10-autoload/autoload.php

function inclusion_automatique($className){
    // la class A est dans le fichier A.class.php
    require $className . '.class.php';

    //-------------
    echo 'On passe dans l\'autoload<br>';
    echo 'On fait un : require "' . $className . '.class.php"<br>';
}


//----------------------
spl_autoload_register('inclusion_automatique');
//---------------------
/* 
Commentaires :
    spl_autoload_register :
        - Est une fonction super pratique, qui va s'éxécuter lorsqu'elle voit passer le mot clé "new".
        - Elle va lancer une fonction... celle que nous allons lui préciser en argument. 
        - Elle va apporter a ma fonction le(s) mot qui suit le mot clé "new"
        --> C'est a dire le nom de la classe !
 */