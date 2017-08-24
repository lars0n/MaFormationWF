<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" id="myForm">
        <div class="form-group" >
            <label for="prenom">prenom</label>
            <input type="text" class="form-control" name="prenom">
        </div>
        <div class="form-group">
            <label for="nom">nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <button type="submit">Envoyer</button>
    </form>

    <div id="response-div"></div>

    <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>

    <script>
    $('#myForm').submit( event => {
        event.preventDefault();

        var $this = $('#myForm');

        var data = $this.serialize();

        $.post(
            'back.php',
            data,
            response => {
                console.log(response);

                var message;

                if(response.status == 'ok'){
                    message = '<b>Tout est OK </b>';
                }else {
                    message = '<b>il ya des erreurs</b>';
                    message += '<br>' + response.errors.join('<br>')
                }

                $('#response-div').html(message);
            },
            'json'
        );
    })
    </script>
</body>
</html>
