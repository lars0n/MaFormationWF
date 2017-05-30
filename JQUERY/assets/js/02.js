/* -------------------------
    LES SELECTEURS JQUERY
--------------------------- */

// -- FORMAT : $('selecteur)
// -- En jQuery, tous les sélecteurs css sont disponoble...

// -- DOM REDY !
$(function () {
    // lesFlemards.js
    function l(e) {
        console.log(e);
    }

    // -- Sélectionner les balises SPAN :
        // version JS : 
        l('SPAN en JS');
        l(document.getElementsByTagName('span'));

        // version jQuery
        l('SPAN en JS');
        l($("span"));


    // -- Sélectionner mon Menu :
        // version JS : 
        l('ID via JS');
        l(document.getElementById('menu'));

        // version jQuery
        l('ID via JS');
        l($("#menu"));

    // -- Sélectionner une Classe :
        // version JS : 
        l('Class via JS');
        l(document.getElementsByClassName('MaClasse'));

        // version jQuery
        l('Classe via JS');
        l($(".MaClasse"));

        // -- Sélectionner par Attribut
        l('Par Attribut :')
        l($("[href='http://www.google.fr']"))
})