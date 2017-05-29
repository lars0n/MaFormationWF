/* -------------------------------
    la concatenation
---------------------------------*/

var DebutDePhrase       =   "Ajourd'hui ";
var DateDuJour          =   new Date();
var SuiteDePhrase       =   ", sont présents : ";
var NombreDeStagiaires  =   19;
var FinDePhrase         =   " stagiares.<br>";

// -- Nous souhaitons maintenant, grace à la concaténation, afficher tout ce petit monde,
// -- en un seul morceau !

document.write(DebutDePhrase + DateDuJour.getDate() + "/" + (DateDuJour.getUTCMonth() + 1) + "/" + DateDuJour.getFullYear() + SuiteDePhrase + NombreDeStagiaires + FinDePhrase );


// Exercice de concatenation
// Créez une concatenation à partire des éléments suivants :

var phrase1 = "je m'appelle ";
var phrase2 = "larson et j'ai ";
var age     = 27
var phrase3 = " ans !";

document.write(phrase1 + phrase2 + age + phrase3);