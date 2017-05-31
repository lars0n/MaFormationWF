// -- déclaration de fonction
function validateEmail(email){
	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	var valid = emailReg.test(email);

	if(!valid) {
        return false;
    } else {
    	return true;
    }
}


// -- Initialisation de jQuery
$(function() {
    // -- Ecouter a quel moment est soumis notre formulaire
    // -- A la soumission de mon Formulaire, je vais executer une anonyme.
    // En JS : document.getElementById('contact').addEventListener('submit', MaFonctionAExecuter)

    $('#contact').on('submit', function(e) {
        // -- event : correspond ici à notre évènement "submit"

        // -- Arreter la redirection HTML5
        e.preventDefault()

        // -- Suppression des différents erreurs
        // -- Je cible tous les éléments qui contiennent la classe "has-error", puis je supprime ".has-error" pour ces éléments.
        $('#contact .has-error').removeClass('.has-error');
        // -- Je supprime les éléments qui on la classe "text-danger."
        $('#contact .alert-danger').remove();
        $('#contact .text-danger').remove();
        
        // -- Déclaration des Variables (Champs à vérifier)
        var nom     = $('#nom');
        var prenom  = $('#prenom');
        var email   = $('#email');
        var tel     = $('#tel');

        // -- Je passe à la vérification de chaque champ

            // -- 1. Vérification du NOM
            if(nom.val().length == 0) {
                
                // -- Si le champs nom est vide, alors j'ajoute à son parent, la classe has-error
                nom.parent().addClass('has-error');

                // -- Je rajoute une indication texte
                $("<p class='text-danger'>N'oubliez pas de saisir votre nom</p>").appendTo(nom.parent());
            }

            // -- 2. Vérification du prenom
            if(prenom.val().length == 0) {
                
                // -- Si le champs nom est vide, alors j'ajoute à son parent, la classe has-error
                prenom.parent().addClass('has-error');

                // -- Je rajoute une indication texte
                $("<p class='text-danger'>N'oubliez pas de saisir votre Prenom</p>").appendTo(prenom.parent());
            }

            // -- 3. Vérification du email
            if(!validateEmail(email.val())) {
                
                // -- Si le champs nom est vide, alors j'ajoute à son parent, la classe has-error
                email.parent().addClass('has-error');

                // -- Je rajoute une indication texte
                $("<p class='text-danger'>N'oubliez pas de saisir votre adresse email</p>").appendTo(email.parent());
            }

            // -- 4. Vérification du tel
            if(tel.val().length == 0 || $.isNumeric(tel.val()) == false) {
                
                // -- Si le champs nom est vide, alors j'ajoute à son parent, la classe has-error
                tel.parent().addClass('has-error');

                // -- Je rajoute une indication texte
                $("<p class='text-danger'>N'oubliez pas de saisir votre numéro de téléphone</p>").appendTo(tel.parent());
            }

            if($(this).find('.has-error').length == 0) {
                $(this).fadeIn( "slow").replaceWith("<div class='alert alert-success' role='alert'>Votre demande a bien été envoyée ! Nous vous répondrons dans les meilleurs délais.</div>")
            } else {
                $(this).slideDown("slow").prepend("<div class='alert alert-danger' role='alert'>Nous N'avons pas été en mesure de valider votre demande. Vérifiez vos onformations</div>")
            }
    })
});