$(function() {
    

    $("#contact").on('submit', function(e) {
        var nom, email, tel, sujet, message, errors;
        nom     = $('#nom');
        email   = $('#email');
        tel     = $('#Tel');
        sujet   = $('#sujet');
        message = $('#message');
        errors = [];

        e.preventDefault();

        $('.alert-danger').remove()
        
        if(nom.val().length === 0) {
            errors.push('<li> le nom est requis</li>')
        }
        if(email.val().length === 0) {
            errors.push("<li> l'email' est requis</li>")
        }
        if(tel.val().length === 0) {
            errors.push('<li> le numeros de téléphone est requis</li>')
        }
        if(sujet.val().length === 0) {
            errors.push('<li> un sujetest requis</li>')
        }
        if(message.val().length === 0) {
            errors.push('<li> un message est requis</li>')
        }

        console.log(errors)
        if (errors.length === 0) {
            $("#contact").replaceWith("<div class='alert alert-success' role='alert'>Votre message à été pris en compte</div>")
        }else {
            $('#contact').append("<div class='alert alert-danger' role='alert'></div>");
            for(i = 0; i < errors.length; i++) {
                $('.alert-danger').append(errors[i]);
            }
        }
    })
   
});