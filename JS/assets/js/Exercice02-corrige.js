// -- Petite foncyion de raccourci (les flemaeds.js)

function w(t) {
    document.write(t);
}

function l(e) {
    console.log(e);
}

// -- 1. Création de notre Tableau 3D en JS !

var PremierTrimestre = [
    {
        "nom"     :   "LIEGEARD",
        "prenom"  :   "Hugo",
        "moyenne" :   {
                        "francais"    : 4,
                        "Math"        : 8,
                        "physique"    : 18       
                    }
    },
    {
        "nom"     : "MANAS",
        "prenom"  : "Tanguy",
        "moyenne" :   {
                        "francais"    : 6,
                        "Math"        : 15,
                        "physique"    : 9,
                        "anglais"     : 15.5       
                    }
    },
    {
        "nom"     :   "   judor",
        "prenom"  :   "Eric",
        "moyenne" :   {
                        "francais"    : 12,
                        "Math"        : 8,
                        "physique"    : 9       
                    }
    }
];

w("<ol>");
// -- Je souhaite afficher la liste des mes étudiants

for (i = 0 ; i < PremierTrimestre.length ; i++) {

    // -- On récupère l'objet Etudiant de l'itération
    let Etudiant = PremierTrimestre[i];

    // -- Aperçu dans la console
    l(Etudiant);
    
    // -- Je défini Nombredematiere et la sommedesnotes à 0
    var NombreDeMatiere = 0, SommeDesNotes = 0;

    // -- Afficher le Prénom et le Nom d'un Etudiant
    w("<li>");
        w(Etudiant.prenom + " " + PremierTrimestre[i].nom);


        w("<ul>");
        // - Affiche la matirere et la Note d'un etudiant
            for ( matiere in Etudiant.moyenne) {
                w("<li>");
                    w(matiere + " : " + Etudiant.moyenne[matiere]);
                    l(matiere);
                w("</li>");
                SommeDesNotes += Etudiant.moyenne[matiere];
                NombreDeMatiere++;
            }
                w("<li>");
                    w("<strong>Moyenne Géneral : " + Math.round((SommeDesNotes / NombreDeMatiere)) + "</strong>")
                w("</li>");
        w("</ul>");
    w("</li>");
}

w("</ol>");