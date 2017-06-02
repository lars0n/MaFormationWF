// -- Initialisation de jQuery (DOM READY)
$(function() {

    // -- Déclaration de variable
    var Contacts;

    // -- vérifie si contacts localstorage existe
    if(!JSON.parse(localStorage.getItem('contactsLocalstorage'))) {

        // -- Sinon on attribut un tableux à la variable Contacts
        Contacts = [];  

    } else {

        // -- recupère les données dans le localStorage est la stocke dans Contacts
        Contacts = JSON.parse(localStorage.getItem('contactsLocalstorage'))

        // parcours le tableaux récuperé dans le localstorage
        for (let i = 0; i < Contacts.length; i++) {

            let Contact = Contacts[i];

            // -- fonction qui rajoute les éléments HTML dans le tableaux
            ajouterContactTableHtml (Contact);
        }
    }

/******************* code alternative pour local storage ************ */
/*
    // -- local storage
    // -- recupère les données dans le localStorage est la stocke dans Contacts
    var Contacts = JSON.parse(localStorage.getItem('contacts'));
    // -- vérifie si Contacts 
    if (Contacts == null) {
        Contacts = [];
    } else {
        for (let i = 0; i < Contacts.length; i++) {

            let Contact = Contacts[i];

            ajouterContactTableHtml (Contact);

        }
    }
*/
   

    /* -----------------------------------------------
            Déclaration des function
    ------------------------------------------------- */
 
    // -- Fonction ajouterContact(Contact) : Ajouter un Contact dans le tableau de Contacts,
    // mettre à jour le tableau HTML, réinitialiser le formulaire et afficher une notification.
    function ajouterContact(Contact) {
        Contacts.push(Contact);
        
        // -- mette a jours le local storage avec le tableaux Contacts (supprime l'ancien avec le nouveau)
        var ContactsToString = JSON.stringify(Contacts);
        localStorage.setItem("contactsLocalstorage",ContactsToString);

        ajouterContactTableHtml (Contact);

        reinitialisationDuFormulaire();
        afficheUneNotification();              
    }

    // -- Fonction RénitilitationDuformulaire() : Après l'ajout d'un contact, on remet le 
    // formulaire à 0 !
    function reinitialisationDuFormulaire() {
        $('#contact')[0].reset();
    }

    // -- Affichege d'une Notification
    function afficheUneNotification() {
        $('.alert-contact').slideDown('slow').delay(1000).slideUp('slow');
    }

    function ajouterContactTableHtml (Contact) {
        $('.aucuncontact').hide();
        $('tbody').append('<tr><td>' + Contact.nom + '</td>' + '<td>' + Contact.prenom + '</td>' + "<td class='emailcontact'>" + Contact.email + '</td>' + '<td>' + Contact.tel + '<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>' + '</td></tr>')
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
        var nom, prenom, email, tel;
        nom     = $('#nom');
        prenom  = $('#prenom');
        email   = $('#email');
        tel     = $('#tel');

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
            } else {
                $('section').before("<div class='alert alert-danger'>Votre Contact est déja présent dans la liste!</div>")
            }
            console.log(Contacts);
        }
    });

    $(document).on('click','.glyphicon-remove' , function(e) {
        $(this).parent().parent().remove();
        var email = $(this).parent().parent().find('.emailcontact').html();
        
        for (let i = 0; i < Contacts.length; i++) {

            let Contact = Contacts[i];

            if(Contact.email === email) {
                Contacts.splice(i, 1)
            }

            ContactsToString = JSON.stringify(Contacts);
            localStorage.setItem("contactsLocalstorage",ContactsToString);

            if (Contacts.length == 0) {
                $('.aucuncontact').show();
            }
        }
    })
})