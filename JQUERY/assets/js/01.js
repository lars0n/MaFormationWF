/*-------------------------------------
    Disponibilité de DOM
---------------------------------------*/

/*
    A partir du moment ou mon DOM, c'est a dire l'ensemble de l'arborescence de ma pasge
    est complètement chargé, je peux commencer à utiliser JQuery.

    Je vais mettre l'ensemble de mon code dans une fonction, cette fonction sera appelé
    AUTOMATIQUEMENT par JQuery lorsque le DOM sera entièrement défini.

    3 façon de faire : 
*/

jQuery(document).ready(function() {
    // -- ICI, le DOM est entièrement chargé, je peux procéder à mon code JS
});

// -- 2eme possibilité
$(document).ready(function () {

})

// -- 3eme possibilité, sans le (document).ready()
$(function () {
    // -- ICI, le DOM est entièrement chargé, je peux procéder à mon code JS

    // -- En JS
    document.getElementById('TexteEnJQuery').innerHTML = "<strong>Mon texte en JS</strong>";

    // -- En jQuery
    $("#TexteEnJQuery").html("Mon Texte en JQ !");
})