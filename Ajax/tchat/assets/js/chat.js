(function () {
    var Message;
    Message = function (arg) {
        this.text = arg.text, this.message_side = arg.message_side;
        this.draw = function (_this) {
            return function () {
                var $message;
                $message = $($('.message_template').clone().html());
                $message.addClass(_this.message_side).find('.text').html(_this.text);
                $('.messages').append($message);
                return setTimeout(function () {
                    return $message.addClass('appeared');
                }, 0);
            };
        }(this);
        return this;
    };
    $(function () {
        var getMessageText, message_side, sendMessage;
        message_side = 'right';
        getMessageText = function () {
            var $message_input;
            $message_input = $('.message_input');
            return $message_input.val();
        };
        sendMessage = function (text) {
            var $messages, message;
            if (text.trim() === '') {
                return;
            }
            $('.message_input').val('');
            $messages = $('.messages');
            //message_side = message_side === 'left' ? 'right' : 'left';
            message = new Message({
                text: text,
                message_side: message_side
            });
            message.draw();
            return $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 300);
        };
        $('.send_message').click(function (e) {
            return sendMessage(getMessageText());
        });
        $('.message_input').keyup(function (e) {
            if (e.which === 13) {
                return sendMessage(getMessageText());
            }
        });


        // récupération de la liste des connectés via un setInterval
        setInterval("ajax()", 5333);

        // déclaration de la fonction ajax
        function ajax(mode, arg = "") {
            if(typeof(mode) == 'object') {
                mode = mode.id;
                //si notre argument mode est de type object, c'est que je ne récupere pas le text normal de l'argument mais la balise html qui possede cet id puisqu'il est possible de selecionner un élément directement par son id. Du coup on pioche dedans pour ne récupérer que l'id (mode.id)
            }
            console.log("MODE :"+mode);

            var formData = new FormData();

            formData.append("mode", mode);
            formData.append("arg", arg);

            var file = "ajax.php"; //Le fichier cible
            
            if(window.XMLHttpRequest)
                var xhttp = new XMLHttpRequest(); // pour la plupart des navigateur
            else
                var xhttp = new ActiveXObject("Microsoft.XMLHTTP"); // pour IE
                
            xhttp.open("POST",  file, true);
            
            xhttp.onreadystatechange = function () {
                if(xhttp.readyState == 4 && xhttp.status == 200){
                    console.log(xhttp.responseText);
                    var obj = JSON.parse(xhttp.responseText);

                    document.getElementById(mode).innerHTML = obj.resultat; // on place la reponse dans l'élément html dont l'id à été fourni dans l'argument "mode"
                    //document.getElementById(mode).scrollTop = message_tchat.scrollHeight; // permet de mettre le scroll en bas
                }
            }

            xhttp.send(formData); // on envoie en founissant les parametres.
        }

    });
}.call(this));