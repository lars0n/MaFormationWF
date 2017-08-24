<?php
//09-namespace/appel.php

namespace General;

require 'Espace1/espace1.php';
require 'Espace2/espace2.php';

use Espace1;
use Espace2;
use PDO;
// use Espace1, Espace2, PDO;
$c = new Espace1\A;
echo $c -> test1();

$c = new Espace2\A;
echo $c -> test2();

/* 
Commentaires :
    - Déclarer un namespace permet de déclarer un espace virtuel dans lequel on peut "ranger" des classes.
    - grace aux namespace, plusieurs classes peuvent avoir le même nom à partir du moment quelles sont "rangées" dans des namespaces différents.
    - Lorsuq'on utilise les namespaces :
        --> On appelle une classe via son namespace
            => $a = new A devient $a = new Espace1\A

        --> Pour récupérer des classe qui sont déclarées dans un autre namespace on doit importer le namespace en amont :
            - use Espace1;
            - use PDO (on peut également importer une classe)

    - Toutes les classes existantes (PDO, Mysqli, Exception, PDOStatement etc...) appartiennent à l'espace global de PHP, il faut donc les importer en amont.

    - Dans une application bien conceptualisée, les namespaces deviennent des noms de dossiers physiques afin que l'autoload (cf chapitre 10) puisse s'orienter.
 */