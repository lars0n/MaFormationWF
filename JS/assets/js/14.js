/* -------------------------------
        Les EVENEMENTS
----------------------------------

Les évènements, vont me permettre de déclencher
une fonction, c'est à dire : une série d'instruction,
suite à une action de mon utilisateur.

OBJECTIF : Etre en mesure de capturer ces évènements,
afin d'executer une fonction.

Les Evenements : MOUSE (Souris)

    click       : au clic sur un élément,
    mouseenter  : la souris passe au dessus de la zone  qu'occupe un élément
    mouseleave  : la souris sort de cette zone

Les Evenements : KEYBOARD (clavier)

    Keydown     : une touche du clavier est enfoncée
    Keyup       : une touche a été relachée

Les Evenements : WINDOWS (Fenetre)

    scroll      : defilement de la fenetre
    resize      : redimensionnement de la fenetre

Les Evenements : FORM (Formulaire)

    change      : pour les éléments <input>, <select> et <textarea>
    submit      : à l'envoi (soumission) d'un formulaire

Les Evenements : DOCUMENT

    DOMContentLoaded : Executé lorsque le document HTML est complètement chargé,
    sans attendre le css et les images.

*/

/* -------------------------------
        Les Ecouteur  d'EVENEMENTS
----------------------------------

Pour attacher un evenement à un élément, ou autrement dit,
pour déclarer un écouteur d'evenement qui se chargera de lancer une action, 
c'est a dire une fonction pour un evenement donné
je vais utiliser la syntaxe suivant :
*/

var p = document.getElementById('MonParagraphe');
console.log(p);

// -- je souhaite que mon paragraphe soit rouge au clic de la souris.

    // -- 1 : Je défini une fonction chargée d'executer cette action.
    function changeColorToRed() {
        p.style.color = "red";
    }

    // -- 2 :  Je déclare un écouteur qui se cargera d'appeler la fonction
    // au déclencchement de l'évènement.
    p.addEventListener("click", changeColorToRed);

/* -----------------------------------------------
            Exercice pratique
a l'aide de javascript, créez un champ "input" type text avec un id unique.
affichez ensuite dans une alerte, la saisie de l'utilisateur.
*/

// -- Création du champ input
var input   = document.createElement("input");

// -- Attribution d'un Attribut
/*input.type = "text";*/
input.setAttribute("type", "text");

// -- Attribution d'un ID
input.id = "msg";

// -- Ajout de l'élément dans la page
document.body.appendChild(input);

console.log(input);

/*var inputhtml = document.getElementById("msg");

console.log(inputhtml);*/

// -- Création d'un écouteur
input.addEventListener("change", function () {
    alert(input.value);
})

