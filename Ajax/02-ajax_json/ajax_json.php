<?php 
// json_encode() // transforme un tableau ARRAY en JSON
// json_encode() // Transforme un format JSON en tableau ARRAY


$tab = [];
$tab['resultat'] = "";

$prenom = "";

if(isset($_POST['personne']))
{
    $prenom = $_POST['personne'];

    // récupération du contenu d'un fichier
    $fichier    = file_get_contents("fichier.json");
    $json       = json_decode($fichier, true);

    foreach($json AS $valeur)
    {
        if($valeur['prenom'] == strtolower($prenom))
        {
            $tab['resultat'] = "<table class='table'>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Salaire</th>
                    <th>Date d'Embauche</th>
                </tr>
            </thead>
            <tr>
                <td>" . $valeur['nom'] . "</td>
                <td>" . $valeur['prenom'] . "</td>
                <td>" . $valeur['salaire'] . "</td>
                <td>" . $valeur['dateEmbauche'] . "</td>
            </tr>
            </table>";
        }
    }
}
echo json_encode($tab);