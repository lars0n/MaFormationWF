<style>
    * {
        font-family: calibri;
    }

    h1 { 
        padding: 10px;
        color: white;
        background-color: darkslategray;
    }

    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }

    td {
        padding: 5px;
    }
</style>
<h1>Ecriture et affichage</h1>
<!-- tout d'abord, il est possible d'écrire du html dans un fichier .php, en revanche l'inverse n'est pas possible -->

<form action="#" method="get">
    <input type="text" name="somme" placeholder="somme">
    <input type="text" name="tva" placeholder="tva">
    <input type="submit">
</form>

<?php //balise php ouverture et fermeture?>
<?php
// instruction d'affichage
// variable: types / déclaration / affectation
// Concaténation
// guillemets et quotes
// constantante
// condition et opérateurs de comparaison
// fonction prédefinie
// fonction utilisateur
// boucle
// inclusion
// array
// classe et objet. 

/* ****************************** *\

\* ****************************** */

/* ****************************** *\
    #[1] instruction d'affichage
\* ****************************** */

echo 'bonjour'; // echo est une instruction permettant d'effectuer un affichage
echo '<br />'; // il est possible de mettre du html
echo 'Bienvenue<br />'; // si vous regardez le code source, il n'est pas possible de voir le code php car déja interprété depuis le serveur.
print 'print est une autre instructiond\'affichage similaire à echo<br />';


// les commentaires en PHP
// ceci est un commentaire sur une seul ligne.
# ceci est un commentaire sur une seul ligne.
/*
Ceci est un commentaire sur
plusieur
lignes
*/
// autre instruction d'affichage mais spécifique aux phrases de developpement: print_r() & var_dump()


/* ************************************************** *\
    #[2] variable: types / déclaration / affectation
\* *************************************************** */

echo '<h1>Variables: types / déclaration / affectation</h1>';
// définition: une variable est un espace nommé permettant de conserver une valeur.
// déclaration d'une variable avec le signe $ // une variable est sensible à la casse
// caractères autorisés: de a z, 0 9 et le _ // /!\ une variable ne peut pas commencer par un chiffre.

// affectation d'une valeur avec le signe =
$a = 127;
echo gettype($a); // integer
echo '<br />';

$b = 1.5;
echo gettype($b); // double
echo '<br />';

$a = 'Une chaine';
echo gettype($a); // string
echo '<br />';

$b = '127';
echo gettype($b); // string
echo '<br />';

$a = true;
echo gettype($a); // ou TRUE // ou l'inverse false / FALSE'
echo '<br />';

/* ****************************** *\
    #[3]Concaténation
\* ****************************** */

echo '<h1> Concaténation </h1>';
// en php nous utiliserons  le . pour la concaténation que l'on peut traduire par "suivi de"
$x = "Bonjour ";
$y = "tout le monde";
echo $x.' '.$y.'<br />';

echo "<br />", 'coucou', "<br />"; // il est possible de faire la concaténation avec une , en revanche uniquement avec echo. (erreur avec print)

echo '<h1>Concaténation lors de l\'affectation</h1>';
$prenom1 = "Bruno ";
$prenom1 = "claire";

echo $prenom1.'<br />';

$prenom2 = "Bruno ";
$prenom2 .= "claire"; // aquivalent à écrire $prenom2 = $prenom2 . 'claire;'
// le .= permet de rajouter à l'existant sans l'ecraser.
echo $prenom2.'<br />';

/* ****************************** *\
    #[4]Guillemets & Quotes
\* ****************************** */

echo '<h1>Guillemets & Quotes</h1>';

$message = "Aujourd'hui";
// ou
$message = 'Aujourd\'hui';

// concaténation
echo $message.'il fait chaud<br/>';
echo "$message il fait chaud<br/>"; // dans des quillemets, les variables sont reconnues et donc interprétées.
echo '$message il fait chaud<br/>'; // dans des quotes, les variables ne sont pas reconnues et donc interprétées comme du texte.

/* ****************************** *\
    #[5]Les constantes & constantes magiques
\* ****************************** */

echo '<h1>Les constantes & constantes magiques</h1>';
// une constante est un peu comme une variable un espace nommé nous permettant de conserver une valeur sauf que comme son nom l'indique, cette valeur ne pourra pas changer durant l'exécution du script

define("CAPITALE", "Paris"); // 1er argument: le nom de la constante / 2eme argument: sa valeur.
// par convention, une constante s'ecrit toujours en majuscule.

echo CAPITALE.'<br />'; 

// constante magique
echo __FILE__.'<br />'; // affiche le chemin complet jusqu'à ce fichier'
echo __LINE__.'<br />'; // affiche le numéro de la ligne

echo '<h1>Exercice sur les variables</h1>';
// mettre les valeurs "lundi" "mardi" et "mercredi" dans 3 variables.
// Afficher "lundi - mardi - mercredi" an appelant les variables.
$lundi = "Lundi";
$mardi = "Mardi";
$mercredi = "Mercredi";

echo $lundi.' - '.$mardi.' - '.$mercredi;

echo '<h1>Opérateur arithmétique</h1>';
$a = 10; $b = 2;

echo $a + $b . '<br />'; // affiche 12
echo $a - $b . '<br />'; // affiche 8
echo $a * $b . '<br />'; // affiche 20
echo $a / $b . '<br />'; // afiche 5
echo $a % $b . '<br />'; // modulo => afiche 0 (le restant de la division)

// facilité d'écriture:
echo $a += $b . '<br/>'; // équivalent à $a = $a + $b 
//echo $a -= $b . '<br/>'; // équivalent à $a = $a - $b 
//echo $a *= $b . '<br/>'; // équivalent à $a = $a * $b 
//echo $a /= $b . '<br/>'; // équivalent à $a = $a / $b 

/* ****************************** *\
    #[6]Structure conditionelles (if / elseif / else) et opérateur de comparaison
\* ****************************** */

echo '<h1>Structure conditionelles (if / elseif / else) et opérateur de comparaison</h1>';
// isset - empty

// isset test si l'élément existe (s'il a été déclaré au prealable dans notre script par exemple)
// empty test si l'élément est vide (à savoir, empty vérifie au préalable si l'élément est défini avant de tester s'il est vide.)

$var1 = 0; // ou $var1 = ""; $var1 = false;

if(empty($var1))
{
    echo 'la variable var1 est vide ou non définie<br/>';
}

$var2 = "";

if(isset($var2))
{
    echo 'la variable var1 existe ! <br/>';
}

// opérateurs de comparaison
$a = 10; $b = 5; $c = 2;

if($a > $b) // si "a" est strictement supérieur à "b"
{
    print "'a' est bien supérieur à 'b' <br />";
}
else { // sino => toutes les autres possibilités
    print "'a' n'est bien supérieur à 'b' <br />";
}

// ET
if($a > $b && $b > $c) // si "a" est supérieur à "b" ET DANS LE MEME TEMPS si "b" est supérieur à "c"
{
    print "Ok pour les 2  condition <br />";
}

// ou
if($a == 9 || $b > $c) // si "a" est égal à 9 OU si "b" est supérieur à  "c"
{
    print "OK pour au moins une des deux conditions <br />";
}

// XOR
if($a == 10 XOR $b < $c)// XOR on ne rentre dans la condition que si l'une des deux condition est vrai. Si les deux conditions sont vrais on ne rentre pas
{
    print "Ok pour une seul des deux conditions<br />";
}
// Avec XOR:
// true XOR TRUE => false
// false XOR false => false
// true XOR false => true
// false XOR true => true

if($a == 8)
{
    print 'réponse 1<br />';
}
elseif($a != 10)
{
    print 'réponse 2<br />';
}
else
{
    print 'réponse 3<br />';
}

$a1 = 1;
$a2 = '1';

if($a1 === $a2) 
{
    echo 'C\'est la meme chose<br/>';
}

/*
    = Affectation
    == Comparaison des valeurs
    === COmparaison des valeurs et du type
    != différent de (en terme de valeur)
    !== différent de (en terme de valeur ou de type)
    < strictement supérieur
    > strictement inférieur
    >= supérieur ou égal
    <= inférieur ou égal
*/

// forme contractée des if : autre écriture
echo ($a == 10) ? 'if en forme contractée' : 'else en forme contractée'; 
// le ? représente le if
// les : représent le else

echo '<h1>Condition switch</h1>';
// les cases représentent des cas différents danbs lesquel nous pouvont potentiellement rentrer.
$couleur = 'jaune';
switch ($couleur) {
    case 'bleu':
        echo 'Vous aimez le bleu<br/>';
        break;
    case 'rouge':
        echo 'Vous aimez le rouge<br/>';
        break;
    case 'vert':
        echo 'Vous aimez le vert<br/>';
        break;
    
    default: // toutes les autres possibilités
        echo 'Vous n\'aimez ni le bleu, ni le rouge, ni le vert<br/>';
        break;
}

// EXERCICE: refaire la condition précédente avec if / elseif / else

if ($couleur === 'bleu') {
    echo 'Vous aimez le bleu<br/>';
}
elseif($couleur === 'rouge') 
{
    echo 'Vous aimez le rouge<br/>';
}
elseif($couleur === 'vert')
{
    echo 'Vous aimez le vert<br/>';
}
else
{
    echo 'Vous n\'aimez ni le bleu, ni le rouge, ni le vert<br/>';
}

/* ****************************** *\
    #[7]Les fonction prédéfinie
\* ****************************** */

echo '<h1>Les fonction prédéfinie</h1>';
// une fonction prédéfinie est déja inscrit dans le langage, le developpeur ne fait que l'exécuter.

echo 'Date du jour:<br />';
echo date("d M y H:i:s");
// date est unen  fonction prédéfinie permettant d'afficher la date.$_COOKIE// en argument cette fonction accepte une chaine de caractère.
// Selon les caractères fournis, cette fonction nous renvoie différent format de date.
// voir la doc pour les formats disponibles: http://php.net/manual/fr/function.date.php

echo '<hr />' . time() . '<hr/>';// time() nous affiche le timestamp (nb de seconde secoulées depuis le 1er janvier 1970)

// traitement des chaines (iconv_strlen() / strpos() / substr())
$email = 'unmail@laprose.fr';

echo strpos($email,'@'). '<br />';
// strpos permet de chercher dans une chaine (fournie en 1er argument) une autre chaine (fournie en 2eme argument)
// /!\ dans une chaine le premier acractère a la position 0

// valeur de retour
    // Succes => on obtient un int (la position)
    // Echec => booleen false

$email2 = "troprigolo";
echo strpos($email2,'@'). '<br />';
var_dump(strpos($email2,'@')); // var_dump() est une instruction d'afficahge ameliorée nous affichant la valeur de ce que l'on test + son type et si le type est string on obtient également sa longeur.
// ici var_dump() nous permet de voir le false obtenu via la fonction strpos()

echo '<br />';

// iconv_strlen
$phrase = 'Japan Expo est LE rendez-vous des amoureux du Japon et de sa culture, du manga aux arts ';
echo iconv_strlen($phrase). '<br />';
// iconv_strlen permet de compter le nombre de caractère dans une chaine de caractère dans une chaine
// Succes => int (la longeur de la chaine);

// substr 
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error officia earum, architecto ad distinctio animi reiciendis necessitatibus adipisci pariatur quas neque aspernatur, consequatur esse! Odio minima reiciendis, debitis, ad blanditiis aliquam. Voluptate, est similique dolore libero quasi voluptates molestiae vel eveniet' ;

echo substr($text, 0, 100) . "...<a href='#'>Lire la suite</a>";
// substr permet de découper une chaine
    // 1er argument => la  chaine a découper
    // 2eme argument => la position de départ
    // 3eme argument => le nombre de caractère à renvoyer. (cet argument est facultatif, s'il n'est pas présent on récupère tout depuis la position de départ)

/* ****************************** *\
    #[8]Les fonction Utilisateur
\* ****************************** */

echo '<h1>Les fonction Utilisateur</h1>';
// non inscrit au langage, c'est le developpeur qui les déclare puis les exécute.

// déclaration d'une fonction'
function separation()
{
    echo '<hr /><hr /><hr />';
}

// execution:
separation();

// fonction avec l'argument
function bonjour($qui)
{
    return "Bonjour" . $qui. '<br />';
}
// une return nous renvoie le resultat de cette fonction en revanche si l'on veut faire un affichage il faudra passer par un echo
echo bonjour('Larson');
$prenom = 'Marie';
echo Bonjour($prenom);

// fonction pour appliquer la tva
function applique_tva($nombre)
{
    return $nombre * 1.2;
}

echo applique_tva(1000) . '<br/>';

// EXERCICE: refaire la fonction précédente en donnant la possibilité à l'utilisateur de choisir le taux. (que ce ne soit pas figé sur le taux 1.2)'


function applique_tva2($nombre, $tva = 1.2)
{
    return $nombre * $tva;
}
// l'argument $taux initialisé par defaut'
echo applique_tva2(1000, 1.4) . '<br/>';

echo applique_tva2($_GET['somme'], $_GET['tva']) . '<br/>';


// environnement global & local
// global => le script complet
// local => à l'intérieur d'une fonction

function jour_semaine() 
{
    $jour = 'lundi';
    return $jour;
}

// echo $jour; // $jour n'est pas défini dans l'espace global => erreur
echo jour_semaine() . '<br />';

$jour2 = jour_semaine();
echo $jour2 . '<br>';

// global vers local:
$pays = 'France';

affichage_pays();// ils est possible d'executer une fonction avant sa déclaration car l'interpreteur php charge toutes les fonctions du script avant d'exécuter le script'

function affichage_pays()
{
    global $pays; // grace au mot clé global, il est possible de récupérer une variable depuis l'espace global sinon ce n'st pas possible car nous sommes dans un espace local (dans une fonction)
    echo 'le pays est: ' . $pays . '<br/>';
}

/* ****************************** *\
    #[9]Structure itérative: les boucles
\* ****************************** */

echo '<h1>Structure itérative: les boucles</h1>';

// boucle while
$i = 0; // valeur de depart
while($i < 10) // condition d'entrée
{
    echo $i . ' - ';
    $i++; // incrémentation ou décrementation // équivaut à écrire $i = $i+1
}

echo '<br/>';

$i = 0; // valeur de depart
while($i < 10) // condition d'entrée
{
    if($i !== 9)
    {
        echo $i . ' - ';
    } else 
    {
        echo $i . '<br/>';
    }
    $i++;
}

//boucle for
// for ( valeur_de_depart; condition_d'entrée; incrementation')


// afficher en utilisant while ou gor un tableau html contenant 10 cellules
// exemple
?>
<table>
    <tr>
        <td>0</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
    </tr>
</table>
<br/>

<?php
// affiche une table de 0 a 9
echo "<table><tr>";
    for ($i=0; $i < 10 ; $i++) {
        echo "<td>$i</td>"; 
    }
echo "</tr></table>";

echo "<br/>";

// affiche une table de 0 a 99
echo "<table>";
    for ($i=0; $i < 10; $i++)
    {
        echo "<tr>";
            for ($y=0; $y < 10 ; $y++) {
                echo "<td>$i$y</td>"; 
            }
        echo "</tr>";
    }
echo "</table>";