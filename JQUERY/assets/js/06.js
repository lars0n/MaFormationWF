/* ------------------------
    LES SELECTEUR D'ENFANTS
--------------------------*/

// -- INITIALISATION de JQuery
$(function () {
    // -- ICI Commence mon code JQuery
    // -- LesFlemards.js
    function l(e) {
        console.log(e);
    }

    // -- Je souhaite selectioner toutes mes divs
    l($('div'));

    // -- Je souhaite selectioner mon header
    l($('header'));

    // -- Je souhaite selectioner tous les éléments descendants direct (enfants) qui sont dans "header"
    l($('header').children());

    // -- Je souhaite parmi mes descendants directs, uniquements les éléments 'ul'
    l($('header').children('ul'));

    // -- Je souhaite récupérer tous les éléments 'li' de mon 'ul'
    l($('header').children('ul').find('li'));

    // -- Je souhaite récupérer uniquement le 2ème éléments de mes 'li'
    l($('header').find('li').eq(1));

    // -- Je souhaite connaitre le voisin immediat de mon "header" ?
    l($('header').next())
    l($('header').next().next())// -- le voisin du voisin...
    l($('header').prev())// -- le voisin d'avant

    // -- LES PARENTS
    l($('header').parent());
})