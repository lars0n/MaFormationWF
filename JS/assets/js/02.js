// -- Déclarer un tableaux Numeriques
var monTableaux = [];
var myArray  = new Array;

console.log(typeof Tableaux);
console.log(typeof myArray);

//-- Affecter des valeurs à un Tableaux Numerique
monTableaux[0] = "hugo";
monTableaux[1] = "Tanguy";
monTableaux[2] = "Géraldine";

//-- Afficher le contenu de mon Tableu Numérique dans la console.
console.log(monTableaux[0]); // -- Hugo
console.log(monTableaux[2]); // -- Géraldine
console.log(monTableaux); // -- affiche toutes les donnéés

// -- Déclarer et Affecter des Valeurs à un tableau Numérique
var NosPrenoms = ["Yimini", "Alex", "Cristian", "Tristan"];
console.log(NosPrenoms);
console.log(typeof NosPrenoms);

// -- Déclarer et Affecter des Valeurs à un objet. (Pas de tableux Associatif en JS)
var Coordonnee = {
    "prenom"    :    "Hugo",
    "nom"       :   "LIEGEARD",
    "age"       :   27    
}

console.log(Coordonnee);
console.log(typeof Coordonnee);

var tb = [["a","b"],["c","d"]];

// -- Comment créer et affecter des valeur à un tableaux 2 Dimensions

// -- je vais créer 2 tableaux numériques
var listeDePrenoms = ["Hugo", "Rodrigue", "Kristie"];
var listeDeNoms    = ["liegeard", "nouel", "soukai"];

// -- Je vais créer un tableux à 2 dimensions à partire de mes 2 tableaux précedents
var Annuaire = [listeDePrenoms, listeDeNoms];
console.log(Annuaire);

//-- Afficher un Nom et un Prenom sur ma page HTML§
document.write(Annuaire[0][1])
document.write(" ")
document.write(Annuaire[1][1])

/*-----------------------------------------------------
            EXERCICE

    Créez un Tableaux à 2 dimensions appelé
    "Annuaire Des Stagiaires" qui contiendra
    toutes les coordoonnées pour chaque stagiaire.

    EX. Nom, Prenom, Tel

------------------------------------------------------*/
/*var objet1 = {
    "nom": "bob",
    "prenom": "thiago",
    "tel": 01010101
}

var objet2 = {
    "nom": "bib",
    "prenom": "lahcen",
    "tel": 02020202
}

var objet3 = {
    "nom": "blob",
    "prenom": "davy",
    "tel": 04040404
}

var AnnuaireDesStagiaires = [objet1, objet2, objet3];

console.log(AnnuaireDesStagiaires);*/

var AnnuaireDesStagiaires = [
    {prenom : "hugo",  nom : "Liegeard", tel: "0783 97 15 15"},
    {prenom : "Tangy", nom : "manas",    tel: "xxxx xx xx xx"},
    {prenom : "Yimin", nom : "ji",       tel: "XXXX XX XX XX"},
]

console.log(AnnuaireDesStagiaires);
console.log(AnnuaireDesStagiaires[0].nom);// -- liegeard
console.log(AnnuaireDesStagiaires[1].prenom);//-- Tangy

/*-----------------------------------------------------
            Ajouter un Element
------------------------------------------------------*/

var Couleurs = ["Rouge", "Jaune", "vert"];

// -- si je souhaite ajouter un element dans mon tableaux
// -- Je fait appel a la fonction push() qui me renvoi le nombres d'éléments de mon tableau.

console.log(Couleurs);
var nombreElementsDeMonTableau = Couleurs.push("Orange");
console.log(Couleurs);
console.log(nombreElementsDeMonTableau);

// -- NB : La Fonction unshift() permet d'ajouter un ou plusieurs éléments en début de tableau.

// -- la fonction pop() me permet de supprimer le dernier élément de mon tableaux et
// -- d'en récuperer la valeur.
// -- Je peux accessoirement récupérer cette valeur dans une variable.

var monDernierElement = Couleurs.pop();
console.log(monDernierElement);
console.log(Couleurs); 

// -- la meme chose est possible avec le premier élement en utilisant la fonction shift();

// -- NB: La fonction splice() vous permet de faire sortire un ou plusieurs éléments
// -- de votre tableau.