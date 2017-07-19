<?php 
    require_once("inc/init.inc.php");

    $tab = [];
    $tab['tableau'] = '';

    $table = $pdo->query("SELECT * FROM employes");
    //->fetch(PDO::FETCH_ASSOC)
    $tab['tableau'] .= "<table class='table'><thead><tr>";
    $nb_col = $table->columnCount();
    for($i = 0; $i < $nb_col; $i++)
    {
        $colonne = $table->getColumnMeta($i);
        $tab['tableau'] .= '<th>' . $colonne['name'] . '</th>';
    }
    $tab['tableau'] .= '</thead></tr><tbody>';

    while($employes = $table->fetch(PDO::FETCH_ASSOC)) {
        $tab['tableau'] .= '<tr>';
        foreach($employes AS $employe)
        {
            $tab['tableau'] .= '<td>' . $employe . '</td>';
        }
        $tab['tableau'] .= '</tr>';
    }

    $tab['tableau'] .= '</tbody></table>';
    echo json_encode($tab);