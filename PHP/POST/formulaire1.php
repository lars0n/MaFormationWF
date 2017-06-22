<?php 

// $_POST est une superglobale donc un tableaux ARRAY
// $_POST est toujours existant mais par defaut est vide !
// $_POST nous permet de récupèrer les information provenant d'un formulaire.
// l'indice correspondant à la  saisie d'un champ sera l'attribut name='' du champ

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: sans-serif;
        }

        form { width: 40%; margin: 0 auto;}

        label {display: inline-block; width: 120px; font-style: italic;}

        input, textarea { margin: 5px 0; height: 30px; border: 1px solid #eee; width: 100%; resize: none;}
        #submit { height: 40px; width: 100%; background-color: #BDF271; padding: 10px 0; color: white; font-size: 18px; cursor: pointer;}
    </style>
</head>
<body>
<?php
    echo '<pre>'; print_r($_POST); echo '<pre>';
    if(isset($_POST['pseudo']) && isset($_POST['message'])) 
    {
        echo 'le pseudo est : ' . $_POST['pseudo'] . '<br>';
        echo 'Message : ' . $_POST['message'];
    }
?>
    <form action="" method="post" enctype="mutipart/form-data">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" value="">
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
        <input type="submit" id="submit" value="valider">
    </form>
</body>
</html>