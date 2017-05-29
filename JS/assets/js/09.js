/* -------------------------------

--------------------------------- */

// -- La Boucle FOR


// -- pour i = 1; tant que i <= (strictement inférieur ou égale) 10; alors, j'incrémente
for (var i = 0; i <= 10; i++) {
    document.write("<p>Instruction executée : <strong>" + i + "</strong>");
}

document.write("<hr>");

// -- La Boucle WHILE : Tant que

var j = 1;
while(j <= 10) {
    document.write("<p>Instruction executée : <strong>" + j + "</strong>");
    j++
}

/* -------------------------------
    Exercice
----------------------------------- */

// -- Supposons, le tableau suivant :
var Prenoms = ['Hugo', 'Jean', 'Matthieu', 'Luc', 'Pierre', 'Marc'];

/* CONSIGNE : Grace a une boucle FOR, afficher la liste des prénoms du tableau suivant dans la console ou sur votre page. */

var i, NbrElementDansMonTableau;
for ( i = 0, NbrElementDansMonTableau = Prenoms.length ; i < NbrElementDansMonTableau ; i++) {
       console.log(Prenoms[i]);
}

Prenoms.forEach( function(prenom) {
    console.log(prenom);
});

