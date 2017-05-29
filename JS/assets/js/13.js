/* -----------------------------
    La manipulation des Contenus
-------------------------------*/

function l(e) {
    console.log(e);
}

// -- Je souhaite récupérer mon lien ; comment procéder ?
var google = document.getElementById("google");

    // -- A : le lien vers lequel pointe la balise
    l('Le lien vers lequel pointe la balise :')
    l(google.href);

    // -- B : L'ID de la balise
    l("l'ID de la balise :")
    l(google.id)

    // -- C : la classe de la balise
    l("la classe de la balise :")
    l(google.className)

    // -- B : Le texte de la balise
    l("Le texte de la balise :")
    l(google.textContent)

// -- Maintenant, je souhaite modifier le contenu de mon lien
// -- comme une variable classique, je vais simplement venir affecter une nouvelle valeur.
google.textContent = "Mon lien vers Google !";


/*---------------------------------
    Ajouter un ELEMENT DANS MA PAGE
--------------------------------*/

// -- Nous allons utiliser 2 méthodes :
// -- 1 : La fonction document.create
// Le DOM

var h1 = document.getElementsByTagName("h1");

var a = document.createElement("a");
a.href = "https://www.tf1.fr/";
a.textContent = "TF1";

a.style.color = "red";
a.style.textDecoration = "none";

h1[0].appendChild(a);


