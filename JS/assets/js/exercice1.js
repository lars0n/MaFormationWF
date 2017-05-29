/* -- 
    Votre mission, que vous devez accepter !
    Réaliser une fonction permettant à un internaute de:
    - Saisire son Prénom dans un prompt
    - Retourner à l'utilisateur : Bonjour [PRENOM], Quel age as-tu ?
    - Saisir son Age
    - Retourner à l'utilisateur : Tu est donc né en [ANNE DE NAISSANCE].
    - Afficher ensuitre un récapitulatif dans la page.
    Bonjour [PRENOM], tu as [AGE] !
-- */
var AnneeActuelle = new Date();

function presentation() {

     var Prenom = prompt("Entrer votre Prenom svp!");
     var Age    = parseInt(prompt("Bonjour " + Prenom + ", Quel age as-tu ?"));

    /*var AnneDeNaissance = 2017 - Age;*/

    alert("Tu est donc né en " + (AnneeActuelle.getFullYear() - Age) + " " + Prenom + "!");

    if (Age >= 25) {
        document.write("<p> Bonjour " + Prenom + ", tu as " + Age + " ans ! Tu commence à etre vieux mon gars");
    } else {
        document.write("<p> Bonjour " + Prenom + ", tu as " + Age + " ans ! tu a donc moins de 25 ans, tu as droit au tarif de jeune");
    }
   
}

presentation();