<?php
require_once("inc/init.inc.php");

if(empty($_SESSION['utilisateur']['pseudo']))
{
    header('location:index.php');
}

require_once("inc/header.inc.php");
/*echo '<pre>'; var_dump($_SESSION); echo '</pre>';*/
?>


     <div id="conteneur">
        <h2 id="moi">Bonjour <?php echo $_SESSION['utilisateur']['pseudo'] ?></h2>
        <div id="message_tchat"></div>
        <div id="liste_membre_connecte"></div>
        <div class="clear"></div>
        <div id="smiley">
            <img src="assets/smil/smiley1.gif" alt=":)" class="smiley">
        </div>
        <div id="formulaire_tchat">
            <form action="#" method="post" id="form">
                <textarea name="message" id="message" rows="5" maxlength="300"></textarea><br>
                <input  type="submit" name="envoi" value="Envoi" class="submit">
            </form>
        </div>
        <div id="postMessage"></div>
    </div> 


    <script>
    // récupération de la liste des connectés via un setInterval()
    setInterval("ajax(liste_membre_connecte)", 5333);
    setInterval("ajax(message_tchat)", 7777);

    // Enregistrement des messages lors de la validation (submit du formulaire)
    document.getElementById("form").addEventListener("submit", function(e) {
        e.preventDefault(); //on bloque le rechargement de page consécutifau submit
        ajax("postMessage", message.value);
        ajax("message_tchat");
        document.getElementById('message').value = "";
    });

    // suppression de l'utilisateur sur le fichier pseudo.txt lors de la fermeture de la fenetre
    window.onbeforeunload = function(e) {
        ajax("liste_membre_connecte", 'retirer');
    } 

    // déclaration de la fonction ajax
    function ajax(mode, arg = '') {
        
        if(typeof(mode) == 'object') {
            mode = mode.id;
            // si notre argument mode est de type object, c 'est que js ne récupère pas le texte normal de l'argument mais la balise html qui possède cet id puisqu'il est possible de selectionner un élément directement par son id. Du coup on pioche dedans pour ne récupérer que l'id (mode.id)
        }
        console.log("Mode: "+mode);

        var file = "ajax.php"; // le fichier cible
        var param = "mode="+mode+"&arg="+arg; // les paramètres a fournuir sur ajax.php

        if(window.XMLHttpRequest) {
            var xhttp = new XMLHttpRequest();   // la plupart des navigateurs
        } else {
            var xhttp = new ActiveXObject("Microsoft.XMLHTTP")// IE 
        }

        xhttp.open("POST", file, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhttp.onreadystatechange = function () {
            if(xhttp.readyState == 4 && xhttp.status == 200) {
                console.log(xhttp.responseText);
                var obj = JSON.parse(xhttp.responseText);
                console.log(obj);

                document.getElementById(mode).innerHTML = obj.resultat; // on place la réponse dans l'élément html dont l'id a été fourni dans l'argument "mode"
                document.getElementById(mode).scrollTop = message_tchat.scrollHeight; //permet de descendre le scroll (ascenseur) pour voir les derniers messages

            }

        }
        xhttp.send(param); // on envoie en fournissant les parametres

    }
    
    </script>

<?php 
    require_once("inc/footer.inc.php");