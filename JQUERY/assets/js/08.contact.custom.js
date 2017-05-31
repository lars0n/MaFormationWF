// -- Initialisation de jQuery (DOM READY)
$(function() {

    // -- Déclaration de variable
    var Contacts = [];

    /* -----------------------------------------------
            Déclaration des function
    ------------------------------------------------- */

    // -- Fonction ajouterContact(Contact) : Ajouter un Contact dans le tableau de Contacts,
    // mettre à jour le tableau HTML, réinitialiser le formulaire et afficher une notification.
    function ajouterContact(Contact) {
        Contacts.push(Contact);
    }

    // -- Fonction RénitilitationDuformulaire() : Après l'ajout d'un contact, on remet le 
    // formulaire à 0 !
    function reinitialisationDuFormulaire() {
        $('#contact')[0].reset();
    }

    // -- Affichege d'une Notification
    function afficheUneNotification() {
        $('.alert-contact').show(2000).hide(1000);
    }

    // -- Vérification de la présence d'un contact dans contacts
    function estCeQunContactEstPresent(Contact) {
        for (var i = 0; i < Contacts.length; i++) {
            var ctn = Contacts[i];
            
            if (ctn.email === Contact.email) {
                return true;
            }

            if ( i = Contacts.length - 1) {
                return false;
            }
        }
    }

    // Vérification de la validité du mail 

    function validateEmail(email) {
        var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        var valid = emailReg.test(email);

        if(!valid) {
            return false;
        } else {
            return true;
        }
    }

    /* -----------------------------------------------
            Traitement de mon formulaire
    ------------------------------------------------- */

    // -- Detection de la soumission de mon formulaire

    $('#contact').on('submit', function(e) {
        // -- arrete la redirection HTML
        e.preventDefault();

        // -- Suppression des différents erreurs
        // -- Je cible tous les éléments qui contiennent la classe "has-error", puis je supprime ".has-error" pour ces éléments.
        $('#contact .has-error').removeClass('has-error');
        // -- Je supprime les éléments qui on la classe "text-danger."
        $('body .alert-danger').remove();
        $('#contact .alert-success').remove();
        $('#contact .text-danger').remove();

        // -- declaration des variables
        var nom     = $('#nom');
        var prenom  = $('#prenom');
        var email   = $('#email');
        var tel     = $('#tel');

        if(nom.val().length == 0) {
            nom.parent().addClass('has-error');

            $("<p class='text-danger'>N'oubliez pas de saisir votre nom</p>").appendTo(nom.parent());
        }

        if(prenom.val() === '') {
            prenom.parent().addClass('has-error');

            $("<p class='text-danger'>N'oubliez pas de saisir votre prenom</p>").appendTo(prenom.parent());
        }

        if(!validateEmail(email.val())) {
            email.parent().addClass('has-error');

            $("<p class='text-danger'>N'oubliez pas de saisir une adresse email valide </p>").appendTo(email.parent());
        }

        if(tel.val().length == 0 || $.isNumeric(tel.val()) == false) {
            tel.parent().addClass('has-error');

            $("<p class='text-danger'>N'oubliez pas de saisir un numéro de téléphone </p>").appendTo(tel.parent());
        }

        if($(this).find('.has-error').length == 0) {
            let Contact = {
                'nom'       : nom.val(),
                'prenom'    : prenom.val(),
                'email'     : email.val(),
                'tel'       :  tel.val()
            }
       
            if (!estCeQunContactEstPresent(Contact)) {
                ajouterContact(Contact);
                reinitialisationDuFormulaire();
                afficheUneNotification();

                $('.aucuncontact').remove()
                $('#LesContacts').find('tbody').append('<tr>' + '<td>' + Contact.nom + '</td>' + '<td>' + Contact.prenom + '</td>' + '<td>' + Contact.email + '</td>' + '<td>' + Contact.tel + '</td>' +'</tr>')
                

            } else {
                $('section').before("<div class='alert alert-danger'>Votre Contact est déja présent dans la liste!</div>")
            }
            console.log(Contacts);
        }
    })
})