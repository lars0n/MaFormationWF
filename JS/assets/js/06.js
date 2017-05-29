/* ----------------------------------
        Les Fonctions
------------------------------------ */

// -- Déclarer une fonction
// -- Cette fonction en retourne aucune valeur
function ditBonjour() {
    // Lors de l'appel de la fonction, les instruction ci-dessous seront exécutées.
    alert("bonjour !");
}

// -- Je vais appeler ma fonction "DitBonjour" et déclencher ses instructions.
ditBonjour();

// -- Déclarer une fonction qui prend une variable en paramètre
function bonjour(Prenom, Nom) {
    document.write("<p>Hello <strong> " + Prenom + " " + Nom + "</strong> ! </p>");
}

bonjour("larson", "laforce")

var Prenom = "yimini";
var Nom    = "JI";

/* ----------------------------------
        EXERCICE :
        Créez une fonction permettant d'effectuer l'addition de deux nombres passés en paramètre.
------------------------------------ */

function addition(nbr1, nbr2) {
    let rslt = nbr1 + nbr2;
    // le Mot Clé "return" permet de renvoyer une valeur en sortie.
    return rslt;
}

var rslt = addition(10, 5);
document.write("<p>" + rslt + "</p>");
