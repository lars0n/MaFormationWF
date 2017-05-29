// Liste des matiere et etudiants
var etudiants = ['Hugo Liegeard', 'Karim Ihadadene', 'Rudy Hericourt', 'Lahcen']

var Matieres = ['francais', 'math', 'physique'];

// création des differents tableaux
var HugoLiegeard = [
    etudiants,
    Matieres,
    [4, 8, 18]
];

var KarimIhadadene = [
    etudiants,
    Matieres,
    [8, 18.5, 18]
];

var RudyHericourt = [
    etudiants,
    Matieres,
    [10.5, 11, 4]
];

var Lahcen = [
    etudiants,
    Matieres,
    [9, 14, 12]
];

//création tableux Premier trimestre
var PremierTrimestre = [HugoLiegeard, KarimIhadadene, RudyHericourt, Lahcen]


//ecriture dans le html
document.write('<ol>');

    //variable de taille de tableux utiliser dans les boucle
    var tailleclasse = PremierTrimestre.length;
    var tailleNote   = Matieres.length;

    //premiere boucle pour afficher une liste non ordonne
    for (var i = 0; i < tailleclasse; i++) {
        document.write('<li>' + PremierTrimestre[i][0][i] + '</li>');

        document.write('<ul>');
        //deuxieme boucle pour afficher les notes et la matiere
            var moyenne = 0;
            for (var j = 0; j < tailleNote; j++) {
                moyenne += PremierTrimestre[i][2][j];
                if (j === tailleNote - 1) {
                    document.write('<li>' + PremierTrimestre[i][1][j] + ' : ' + PremierTrimestre[i][2][j] +'</li>');
                    document.write('<li><strong>Moyenne Générale : ' + Math.trunc((moyenne / tailleNote)) +'</strong></li>');
                } else {
                    document.write('<li>' + PremierTrimestre[i][1][j] + ' : ' + PremierTrimestre[i][2][j] +'</li>');
                }   
            }
        document.write('</ul>');
    }

document.write('</ol>');

console.log(PremierTrimestre[0][1][1]);