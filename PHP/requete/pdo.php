<?php
/*
//--------------------------------------------------------------------------------------------------------
// PDO => php Data Objetc

//EXEC()
    INSERT, UPDATE, DELETE: Exec() est une methode de l'objet pdo qui est utilisée pour la formulation de requete ne retournant pas de resultat.
    valeur de retour:
    ------------------
    succes => on obtient un entier (int) correspondant au nombre de lignes affectées.
    echec => on obtient le booleen false

// QUERY()
    INSERT, UPDATE, DELETE, SELECT, SHOW, ...: QUERY() est utilisé pour tout type de requete.
    valeur de retour:
    ------------------------
    succes => on obtient un nouvel objet issu de la class PDOstatement 
    echec => on obtient le booleen false

// PREPARE() + EXECUTE()
    INSERT, UPDATE, DELETE, SELECT, SHOW, ...: prepare() permet de préparer la requete mais ne l'exécute pas; execute() execute la requete.
    valeur de retour:
    -------------------
    prepare() => on obtient un nouvel objet issue de la classe PDOStatement
    execute() => 
        succes => PDOStatement
        echec  => false

// Les requetes préparées sont à préconiser pour sécuriser les données.
// cala permet également d'éviter le cycle complet d'une requete:
    annalyse / interprétation / exécution
*/
    
// Connexion à une BDD 
$pdo = new PDO('mysql:host=localhost;dbname=wf3_entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// arguments: 1 - (serveur+nom_bdd) 2 - identifiant 3 - mot de pass 4 -options
echo '<pre>'; var_dump(get_class_methods($pdo));  echo '</pre>';

// 2 - PDO: exec()
// insert
//$resultat = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, salaire, date_embauche) VALUES ('lahcen', 'ait', 'm', 'informatique', 2500, '2017-09-28')");
//echo '<pre>'; var_dump($resultat);  echo '</pre>';

// 3 - PDO: QUERY => SELECT + ,FETCH(pour un seul resultat)
$resultat = $pdo->query("SELECT * FROM employes WHERE id_employes=350");
echo '<pre>'; var_dump($resultat->getAtribute);  echo '</pre>';
echo '<pre>'; var_dump(get_class_methods($resultat));  echo '</pre>';

// en l'etat, $resultat est inexploitable. nous devons le traiter avec la methode fetch afin de rendre les informations exploitables.

$info_employe = $resultat->fetch(PDO::FETCH_ASSOC); // FETCH_ASSOC pour un tableau array associatif (le nom des colonnes comme indices du tableaux)

//$info_employe = $resultat->fetch(PDO::FETCH_NUM); // FETCH_NUM pour un tableau indexé numériquement

//$info_employe = $resultat->fetch(); //  ou $info_employe = $resultat->fetch(PDO::FETCH_BOTH) // c'est le mode par defaut // FETCH_BOTH est un mélange de FECTH_ASSOC et FETCH_NUM

//$info_employe = $resultat->fetch(PDO::FETCH_OBJ); // FETCH_OBJ pour obtenir un objet avec les éléments disponible en propriété publiqueq.
echo '<pre>'; var_dump($info_employe);  echo '</pre>';

echo $info_employe['prenom'] . "<br>"; //avec fetch_assoc
//echo $info_employe[1]; //avec fetch_NUM
//echo $info_employe->prenom; //avec fetch_OBJ

/*
$pdo représente un objet[1] issu de la classe prédéfinie PDO
quand on execute une requete avec la methode query sur notre objet PDO:
on obtient un nouvel objet[2] issu de la classe PDOStatement. cet objet a donc des propriétés et méthodes différentes.

- $resultat représente la réponse de la BDD et c'est un resultat inexploitable en l'état.
- $info_employe est la reponse exploitable (grace au fetch())
- /!\ attention, il faut choisir l'un des trairements fetch(PDO::FETCH...)
- il n'est pas possible d'appliquer plusieurs traitement fetch sur un meme résultat.

- le résultat est la réponse de la BDD et est inexploitable car Mysql nous renvoie beaucoup d'information. le fetch permet des organiser.
*/

// 4 - PDO: QUERY + WHILE + FETCH (plusieur résultats)
$resultat = $pdo->query("SELECT * FROM employes");

echo "le nombre d'employes: " . $resultat->rowCount() . '<br/>'; // la methode rowCount( de l'objet PDOStatement retourne le nombre de ligne dans notre résultat.

WHILE($info_employe = $resultat->fetch(PDO::FETCH_ASSOC)) {
    // à chaque tour de la boucle while, on traite avec un fetch la ligne en cours et on passe à la suivante.
    //echo '<pre>'; print_r($info_employe);  echo '</pre>';
    echo '<div style="box-sizing: border-box; padding: 10px; background-color: darkred; color: white; display: inline-block; width: 23%; margin: 1%;">';

    echo 'ID_employes: ' . $info_employe['id_employes'] . '<br>';
    echo 'Nom: ' . $info_employe['nom'] . '<br>';
    echo 'Prénom: ' . $info_employe['prenom'] . '<br>';
    echo 'Salaire: ' . $info_employe['salaire'] . '<br>';
    echo 'Sexe: ' . $info_employe['sexe'] . '<br>';
    echo 'Service: ' . $info_employe['service'] . '<br>';
    echo 'Date d\'embauche: ' . $info_employe['date_embauche'] . '<br>';

    echo '</div>';
}

// 5 - EXERCICE
// récupérer la liste des BDD présentent sur le serveur.
// les traiter puis les afficher dans une liste ul li
// Attention à l'indice si vous utilisez FETCH_ASSOC (les indices sont sensibles à la casse) sur cette requete il ya une majuscule dans l'indice

$resultatsbdd = $pdo->query("SHOW DATABASES");

echo '<ul style="list-style-type: none; background-color: lightGrey; color: gray; padding: 10px;">';
WHILE($resultatbdd = $resultatsbdd->fetch(PDO::FETCH_ASSOC)) {
    //echo '<pre>'; print_r($resultatbdd);  echo '</pre>';
    echo '<li>' . strtoupper($resultatbdd['Database']) . '</li>';
}
echo '</ul>';

// 6 - PDO: QUERY + FETCHALL + FETCH_ASSOC (plusieur résultats)

$resultat = $pdo->query("SELECT * FROM employes");
// fetchALL
$liste_employes = $resultat->fetchALL(PDO::FETCH_ASSOC);  
echo '<pre>'; print_r($liste_employes);  echo '</pre>';
// fetchALL traite toutes les lignes dans notre résultat et on obtient un tableau array multidimensionnel
// 1er niveau la ligne en cours, 2eme niveau les informations de la ligne

foreach ($liste_employes as $valeur) {
    echo $valeur["prenom"] . '<br/>';
}

// 7 - PDO: QUERY + Affichage en tableau
$resultat = $pdo->query("SELECT * FROM employes");

echo '<table border="1" style="width: 80%; margin: 0 auto; border-collapse:collapse; text-align: center;">';

    // premiere ligne du tableau pour le nom des colonnes
    echo '<tr>';
        // récupératioin du nombre de colonnes dans la requete:
        $nb_col = $resultat->columnCount();

        for($i=0; $i < $nb_col; $i++)
        {
            // echo '<pre>'; print_r($resultat->getColumnMeta($i));  echo '</pre>';
            $colonne = $resultat->getColumnMeta($i); // on récupère les informations de la colonne en cours afin ensuite de demander le name
            echo '<td style="padding: 10px;">' . $colonne['name'] . '</td>';
        } 
    echo '</tr>';

    while($ligne = $resultat->fetch(PDO::FETCH_ASSOC))
    {
        echo '<tr>';

        
        foreach($ligne AS $info)
        {
            echo '<td style="padding: 10px;">' . $info . '</td>';
        }

        echo '</tr>';
    }

echo '</table>';

//----------------------------------------------------------------------------------------
//**************************** SECURISATION DES DONNEES **********************************
//----------------------------------------------------------------------------------------

// 8 - PDO: PREPARE + BINDPARAM + EXECUTE

$nom = "Laborde";

$resultat = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom"); // :nom est un marqueur nominatif

// nous pouvons maintenant fournir la valeur du marqueur :nom
$resultat->bindParam(":nom", $nom, PDO::PARAM_STR); // bindParam(nom_du_marqueur, valeur_du_marqueur, type_attendu)

$resultat->execute();
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($donnees);  echo '</pre>';

// BINDPARAM n'accèpte que des valeurs sous forme de variable !!!

// implode() & explode() (fonction prédéfinies)
// implode() permet d'afficher tous les éléments d'un tableau array séparées par un séparateur fournie en 2eme argument
// expliode() découpe une chaine de caractères selon un séparateur fourni en deuxième argument et place chaque segment de cette chaine dans un tableau array à des indices différents.
// exemple:
echo implode('<br/>', $donnees);

// 9 - PDO: PREPARE + BINDVALUE + EXECUTE
echo '<hr/>';

$resultat = $pdo->prepare("SELECT * FROM employes WHERE id_employes = :id"); // :nom est un marqueur nominatif

$resultat->bindValue(":id", 350, PDO::PARAM_INT); // bindValue(nom_du_marqueur, valeur_du_marqueur, type_attendu)

$resultat->execute();
$donnees = $resultat->fetch(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($donnees);  echo '</pre>';

echo implode('<br/>', $donnees);

// BINDVALUE accepte une variable ou la valeur directement pour le marqueur. (ce n'est pas le cas de bindParam qui n'accepte qu'une variable)