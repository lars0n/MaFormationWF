/* ----------------------------------
    Les operateurs arithmetiques
------------------------------------ */

// -- Déclaration de plusieurs variable à la suite
var nb1, nb2, rslt;

nb1 = 10;
nb2 = 5;

console.log("nb1 vaut : " + nb1);
console.log("nb2 vaut : " + nb2);

// ########### L' Addition ######## //

// -- Addition de nb1 + nb2 avec l'opérateur "+"
rslt = nb1 + nb2;

// -- Affichage de résultat dans la console.
console.log("L'addition de nb1 et nb2 est égale à : " + rslt);

// ########### La soustraction ######## //

// -- soustraction de nb1 - nb2 avec l'oprérateur "-"
rslt = nb1 - nb2;

// -- Affichage de résultat dans la console.
console.log("La soustraction de nb1 et nb2 est égale à : " + rslt);

// ########### La Multiplication ######## //

// -- Multiplication de nb1 - nb2 avec l'oprérateur "*"
rslt = nb1 * nb2;

// -- Affichage de résultat dans la console.
console.log("La Multiplication de nb1 et nb2 est égale à : " + rslt);

// ########### La Division ######## //

// -- Division de nb1 - nb2 avec l'oprérateur "/"
rslt = nb1 / nb2;

// -- Affichage de résultat dans la console.
console.log("La Division de nb1 et nb2 est égale à : " + rslt);

// ########### Le Modulo ######## //

// -- NB : Le Modulo retourne le reste de la division

// -- Modulo de nb1 - nb2 avec l'oprérateur "%"
nb1 = 11;
console.log("nb1 vaut : " + nb1);
rslt = nb1 % nb2;

// -- Affichage de résultat dans la console.
console.log("Le Modulo de " + nb1 + " et de "+ nb2 +" est égale à : " + rslt);

/* ----------------------------------
    Les Ecritures simplifiees
------------------------------------ */

nb1 = 15;
nb1 = nb1 +5;
console.log(nb1);

nb1 += 5; // -- ce qui équivaut à écrire nb1 = nb1 + 5;
// -- Ici, j'ai incrémenté et réaffecté

console.log(nb1);
// -- Je peux procéder de la même manière pour tous les autres opérateurs arithmétiques:
// : "+", "-", "/", "*", "%"