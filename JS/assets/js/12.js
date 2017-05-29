/*---------------------------------------------------
                Le DOM
------------------------------------------------------
    Le DOM, est une interface de développement
    en JS pour HTML. Grace au DOM, Je vais etre
    en mesure d'accéder / modifier mon html.

    L'objet "document" : c'est le point d'entée vers
    mon contenu HTML §

    Chaque page chargée dans mon navigateur à un 
    objet "document".
-----------------------------------------------------*/

// -- Comment puis-je faire pour récuperer 

/*----------------------------------------------------
            document.getElementById
------------------------------------------------------
    document.getElementById() : C'est une
    fonction qui va permettre de récupérer un
    élément HTML a partire

------------------------------------------------------*/

var bonjour = document.getElementById("bonjour");
console.log(bonjour);

/*----------------------------------------------------
            document.getElementByClassName
------------------------------------------------------
    document.getElementByClassName() : C'est une
    fonction qui va permettre de récupérer un ou
    plusieur éléments (une liste) HTML à partire
    de leur class.
------------------------------------------------------*/

var contenu = document.getElementsByClassName("contenu");
console.log(contenu);

// -- Me renvoi : Un tableau JS avec mes éléments HTML, ou encore autrement dit,
// une Collection d'éléments HTML

/*----------------------------------------------------
            document.getElemenstByTagName
------------------------------------------------------
    document.getElemenstByTagName() : C'est une
    fonction qui va permettre de récupérer un ou
    plusieur éléments (une liste) HTML à partire
    de leur * nom de balise *.
------------------------------------------------------*/

var span = document.getElementsByTagName("span");
console.log(span);