/* ----------------------------
    Les CONDITIONS
------------------------------ */

var MajoriteLegaleFR = 18;

if (16 > MajoriteLegaleFR) {
    alert("bienvenu !")
} else {
    alert("Google...")
}

/* -------------------------------
        EXERCICE
Créer une fonction permettant de verifier l'age d'un visiteur (prompt).
S'il a la majorité légale, alors je lui souhaite la bienvenu,
sinon, je fait une redirection sur Google aprés lui avoir signalé le soucis.
--------------------------------- */

//je crée une functtion
function Majorite () {

    //je fais tapper l'age l'utilisateur prompt
    var Age = Number(prompt("entrer votre age pour aller plus loin"));
    //si il a la majoriter bienvenu+
    if (Age >= MajoriteLegaleFR) {
        alert("bienvenue");
    } else {
    //sinon je le redirige vers google
        alert("tu n'a pas l'age requis attend quelque année");
        window.location.replace("https://www.google.fr/");
    }
}

// Majorite();

// 1 -- Déclarer la Majorité Légale
var MajoriteLegaleFR = 18;

// 2 -- Créer une fonction pour demander son age
function verifierAge() {
    // -- Demande l'age de mon visiteur puis je le retourne
    return parseInt(prompt("Bonjour, Quel age avez-vous ?", "<Saisissez votre age>"));
}

// 3 -- Une Condition pour vérifier si l'age de l'utilisateur est supérieur à la MajoriteLegalefr
if(verifierAge() >= MajoriteLegaleFR) {
    // -- J'affiche un Message de Bienvenu
    alert("Bienvenu sur mon site internet pour les majeurs..");
} else {
    // -- j'affiche une alerte
    alert("ATTENTION !!! Vous devez être majeur pour accéder à ce site");

    // -- je redirige ver google.
    document.location.href = "http://fr.lmgtfy.com/?q=age+legale+en+france";
}

/* ---------------------------
    les operateur de comparaison
----------------------------- */

// -- les operateur de comparaison "==" signifie : Egale à ...
// il permet de vérifier que deux variables sont identiques.

// -- L'operateur de Comparaison "===" signifie : Strictement Egal à ...
// il va comparer la valeur et aussi le type de donne.

// -- L'operateur de Comparaison "!=" signifie : Différent de

// -- L'operateur de Comparaison "!==" signifie : Strictemment Différent de


/* -------------------------------
        EXERCICE
J'arrive sur un espace Sécurisé au moyen d'un email et d'un mot de passe.
je doit saisire mon email et mon mot de passe afin d'etre authentifié sur le site.
en cas d'échec une aler m'informe du probléme
si tous se passe bien, un message de bienvenue m'accueill.
--------------------------------- */

// -- BASE DE DONNEES
/*var email, mdp;
var error = [];

email = "wf3@hl-media.fr";
mdp = "wf3";


function connexion(){
    var emailEnter = prompt("email");
    var mdpEnter = prompt("mdp");

    if (emailEnter !== email) {
        error.push("email incorrect")
    }

    if (mdpEnter !== mdp) {
        error.push("mdp incorrect")
    }

    if(error.length === 0) {
        // bienvenu
    } else {
        alert(error[0] + " "+ error[1])
    }    
}

connexion();
*/

/*var email, mdp;
var error = [];

email = "wf3@hl-media.fr";
mdp = "wf3";

var emailEnter = prompt("email");

if (emailEnter === email) {
    var mdpEnter = prompt("mdp");

    if (mdpEnter === mdp) {
        alert("bienvenue")
    } else {
        alert("mdp mauvai")
    }

} else {
    alert("email mauvai")
}
*/



