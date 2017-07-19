<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Ajax info</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="ajax_json.php" id="form">
        <?php 
            $fichier = file_get_contents("fichier.json"); // on recupere le contenu du fichier.json
            $json = json_decode($fichier, true); // on transforme le format json en tableau array

            echo '<select class="form-control" name="personne" id="personne">';

            foreach($json as $sous_tablleau)
            {
                echo '<option>' . $sous_tablleau['prenom'] . '</option>';
            }

            echo '</select>';
        ?>
            <button type="submit" class="btn btn-primary btn-block">ok</button>
        </form>
        <div id="resultat"></div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("#form").on('submit', function(e) {
                e.preventDefault();

                // on recupere la valeur du champ select (id personne)
                var perso = $("#personne").val();
                var param = "personne="+perso;
                // serialize récupere tous les names et valeur d'un formulaire et nous l'envoi dans un format correct (GET)
                // equivalent en JS FormData 
                var parametres = $(this).serialize();
                console.log(parametres);

                // fichier cible // on récupère la valeur de l'attribut action="" du formulaire
                var file = $(this).attr("action");
                console.log(file);

                // methode // onrécupère la valeur de l'attribut methode="" du formulaire
                var method = $(this).attr("method");

                // api: http://api.jquery.com/jQuery.ajax/

                $.ajax({
                    url: file,          // url: "ajax_json.php"
                    type: method,       // type: "POST"
                    data: param,        // data: "personne="+perso;
                    dataType: "json",   // il faut préciser le format des données reçues
                    success: function(reponse) {
                        $('#resultat').html(reponse.resultat); // la fonction qui sera exécutée lors de la réception de la réponse
                    }
                });

                //avec la methode de jquery post
                /*$.post(file, param, function(reponse){
                    $('#resultat').html(reponse.resultat);
                }, "json");*/
                // $.post(lefichier cible, parametre, callback, format)
            })
        });
    </script>
</body>
</html>