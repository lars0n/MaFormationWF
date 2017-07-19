var form = document.getElementById('form');

form.addEventListener("submit", e => {
    e.preventDefault();

    ajax();
});

function ajax() {

    var file = "ajax_connexion.php";

    // vérification pour la comptabilité si XMLHttRequest existe sur ce navigateur
    if(window.XMLHttpRequest)
        var xhttp = new XMLHttpRequest(); // pour la plupart des navigateur
    else
        var xhttp = new ActiveXObject("Microsoft.XMLHTTP"); // pour IE

    var formData = new FormData(form);

    formData.append('mode', 'connexion');

    xhttp.open("POST", file, true);

    xhttp.onload = () => {
        if(xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText)
            var response = JSON.parse(xhttp.responseText);
            document.getElementById("message").innerHTML = response.resultat;

            if(response.pseudo) {
                // si la valeur de l'indice pseudo est 'disponible alors je sais qu'il n'ya pas eu d'erreur et on redirige sur dialogue.php
                window.location.href = 'dialogue.php';
            }
        }
    }

    xhttp.send(formData);
}