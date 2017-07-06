<?php 

    function getChamp ($table,$pdo) {
        $tableau = [];

        $tablepdo = $pdo->query("SELECT * FROM {$table}");
        $colcount = $tablepdo->columnCount();

        for ($i=0; $i < $colcount; $i++) 
        { 
            $champ = $tablepdo->getColumnMeta($i)['name'];

            $tableau[$champ] = '';
        }
        return $tableau;
    }

    function getUser($user, $table) 
    {
        foreach ($user as $key => $value) 
        {
            if($key == 'date_de_naissance')
            {   
                if(array_key_exists('date_de_naissance_submit', $table)) 
                {
                    $user[$key.'_submit'] = $table[$key.'_submit'];
                }
            }

            $user[$key] = $table[$key];     
        }
        
        return $user;
    }

    function champ_isset($champ_a_verifier) {
        $erreur = false;

        foreach ($champ_a_verifier as $key => $value) {
            if(!isset($_POST[$key])) 
            {
                $erreur = true;
            }
    } 

        return !$erreur;
    }

    function add_user_db($info_user, $pdo) {
        $key_req = '';
        $token_req = '';

        foreach ($info_user as $key => $value) {  
            $key_req .= $key . ', ';
            $token_req .= '?, ';   
        }

        $key_req    = substr($key_req, 13, -28);
        $token_req  = substr($token_req, 3, -5);

        $requet = $pdo->prepare("INSERT INTO annuaire ($key_req) VALUES ($token_req)");
        $requet->execute([
            $info_user['nom'],
            $info_user['prenom'],
            $info_user['telephone'],
            $info_user['profession'],
            $info_user['ville'],
            $info_user['codepostale'],
            $info_user['adresse'],
            $info_user['date_de_naissance_submit'],
            $info_user['sexe'],
            $info_user['description'],
            ]);
    }

    function update_user_db($query,$info_user ,$pdo) {
        $updat_user = $pdo->prepare($query);
        $updat_user->execute([
            $info_user['nom'],
            $info_user['prenom'],
            $info_user['telephone'],
            $info_user['profession'],
            $info_user['ville'],
            $info_user['codepostale'],
            $info_user['adresse'],
            $info_user['date_de_naissance_submit'],
            $info_user['sexe'],
            $info_user['description'],
            $info_user['id_annuaire'],
        ]);
    }

    function delete_user_db($query, $id, $pdo) 
    {
        $delete_user = $pdo->prepare($query);
        $delete_user->execute([
            $id,
        ]);
    }