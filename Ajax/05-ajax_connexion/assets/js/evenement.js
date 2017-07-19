var form = document.getElementById('form');

// on récupère l'élément html qui a l'id form et on rajoute un évènement (la soumission du formulaire) puis on déclenche une fonction sur cet évènement qui bloque la soumission du formulaire (bloque le rechargement de page)
form.addEventListener("submit", function(e) {
    e.preventDefault();

    // on exécute notre fonction déclarée à l'extérieur de l'évènement qui lancera la requete ajax
    ajax();
})

// déclaration d'une fonction js nous permettant de lancer une requet ajax
function ajax() {
    // déclaration du nom du fichier cible qui devra etre exécuté lors de la requete ajax.
    var file = "ajax.php"

    // vérification pour la comptabilité si XMLHttRequest existe sur ce navigateur
    if(window.XMLHttpRequest)
        var xhttp = new XMLHttpRequest(); // pour la plupart des navigateur
    else
        var xhttp = new ActiveXObject("Microsoft.XMLHTTP"); // pour IE

    // on récupere les donnée du formulaire
    var p = document.getElementById('pseudo');
    var pseudo = p.value; // on récuper pseudo

    var m = document.getElementById('mdp');
    var mdp = m.value; //on récuper mdp

    // on prepare les parametre a passé a l'aide de la classe FormData
    var formData = new FormData(this); // j'inject directement le formulaire

    // la methode appende permet d'ajouter des parametre à l'objet formData
    //formData.append("pseudo", pseudo); // en injectant le formulaire dans l'instanciation de FormData je n'ai pas besoin d'ajouter des parametre a formData
    //formData.append("mdp", mdp);

    // requete ajax
    xhttp.open("POST", file, true);

    // inutile avec l'objet formData
    //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onload = function() {
        if(xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
            var result = JSON.parse(xhttp.responseText);

            // .resultat correspond à l'indice défini en php sur ajax.php
            document.getElementById("resultat").innerHTML = result.resultat;
        }
    }
    // cette ligne déclenche l'envoi de la requete ajax en fournisant l'objet formData (qui sont les paramètre)
    xhttp.send(formData);
}