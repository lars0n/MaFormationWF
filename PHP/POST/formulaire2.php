<?php
// sur formulaire2.php: mettre en place un formulaire avec deux champs (pseudo & mail) + le bouton de validation
// ce formulaire doit envoyer les informations saisies sur la page formulaire2_resultat.php
// faire en sorte d'afficher les informations reçues (var_dump ou print_r)    
// ensuite afficher proprement les informations saisies
// attention au cas d'erreur, par exemple si j'arrive directement sur formulaire, y-a t'il des erreurs
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <style>
        * {
            font-family: sans-serif;
        }

        form { width: 40%; margin: 0 auto;}

        label {display: inline-block; width: 120px; font-style: italic;}

        input, textarea { margin: 5px 0; height: 30px; border: 1px solid #eee; width: 100%; resize: none;}
        #submit {  width: 100%; }
    </style>
</head>
<body>
    <form action="formulaire2_resultat.php" method="post" enctype="mutipart/form-data">
        <div class="input-field">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" value="">
        </div>
        <div class="input-field">
            <label for="email">Message</label>
            <input type="text" name="email" id="email" value="">
        </div>
        <input class="waves-effect waves-light btn" type="submit" id="submit" value="valider">
    </form>
     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>