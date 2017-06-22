<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <style>
    * { font-family: sans-serif;}
    body { margin: 0;}
    .erreur { margin-top: 20px; background-color: darkred; color: white; padding: 10px; text-aligne: center;}
    .succes { margin-top: 20px; background-color: lightgreen; color: white; padding: 10px; text-aligne: center;}
    </style>
</head>
<body>
    <?php
        /*if(isset($_POST['pseudo']) && isset($_POST['email']))
        {
            $lenght = iconv_strlen($_POST['pseudo']);
            $email = filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL);

            if($lenght > 8 && $email) {
                echo '<div class="card-panel teal"><p class="white-text">votre pseudo est : ' . $_POST['pseudo']. '</p>' ;
                echo '<p class="white-text">votre email est : ' . $_POST['email']. '</p></div>';
            }else 
            {
                echo '<div class="card-panel yellow accent-2"><p class="white-text">le pseudo est trop court (min 8) ou email n\'est pas correct</p></div>';
            }

        }else {
            echo '<div class="card-panel red darken-4"><p class="white-text">une erreur c\'est produit étes-vous sur d\'etre passer par le formulaire de connexion de la page d\'acceuil</p></div>';
        }*/

        $message = "";

        if(isset($_POST['pseudo']) && isset($_POST['email']))
        {
            $pseudo = $_POST['pseudo'];
            $email  = $_POST['email'];

            if (iconv_strlen($pseudo) > 3 && iconv_strlen($pseudo) < 15 )
            {
                $message .= '<p class="succes">Votre pseudo est ' . $pseudo . '</p>';
            }
            else {
                // il ya un soucis sur la taille du pseudo
                $message .= '<p class="erreur">Attention, la taille du pseudo est invalide<br>En effet, le pseudo doit avoir entre 4 et 14 caractère inclu</p>';
            }

            if(filter_var($email))
            {
                $message .= '<p class="succes">Votre email est ' . $email . '</p>';
            }else
            {
                $message .= '<p class="erreur">Attention, Le Format d \'email est invalide<br>En effet, il faut une email valide</p>';
            }        
        }

        echo $message;
    ?> 
</body>
</html>
<?php
//