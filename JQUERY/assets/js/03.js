/* ------------------------------------
        Le Chainage de Methode jquery
--------------------------------------- */

$(function () {

    // -- Je souhaite cacher toutes les div de ma page HTML

    $('div').hide('slow', function () {
        // -- Une fois que la méthode hide() est terminée, mon alerte peut s'executer.
        alert('fin du hide');

        // NOTA BENE : La fonction s'executera pour l'ensemble des éléments du sélecteur.

        // -- CSS
        $('div').css("background", "yellow");
        $('div').css("color", "red");

        // -- Je fais réapparaitre mes DIVs
        $('div').show();
    }); // -- FIN Fonction Anonyme

    // -- En utilisant le chainage de méthode, vous pouvez faire s'enchainer plusieurs
    // fonction les unes aprèes les autres...

    $('p').hide(1000).css('color','blue').css('font-size','20px').delay(2000).show(500);

    // -- mais, c'est encore trop long !!!!!!!!!!!!!!!!!!!!!!!
    $('p').hide().css({'color':'blue','font-size':'20px'}).delay(2000).show(500);
});