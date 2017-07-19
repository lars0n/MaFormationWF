<?php 

$tab = [];
$tab['resultat'] = "";

if(!empty($_POST['pays']))
{
    // exercice: renvoyer dans $tab['resultat'] les villes selon la valeur de l'indice pays
    // sous form '<option>ville1</option><opt...
    $pays = $_POST['pays'];

    if($pays == "France")
    {
        //$tab['resultat'] = "<option>Paris</option><option>Marseille</option><option>Lyon</option>";
        $tab['resultat'] = ["Paris", "Marseille", "Lyon", "Lille", "Brest", "Bordeaux"];
    }elseif($pays == "Italie")
    {
        //$tab['resultat'] = "<option>Rome</option><option>Venise</option><option>Turin</option>";
        $tab['resultat'] = ["Rome", "Venise", "Turin", "Milan", "Florence"];
    }elseif($pays == "Espagne")
    {
        //$tab['resultat'] = "<option>Madrid</option><option>Barcelone</option><option>Valence</option>";
        $tab['resultat'] = ["Madrid", "Barcelone", "Valence", "Salamenque", "Malaga"];
    }

}

echo json_encode($tab);