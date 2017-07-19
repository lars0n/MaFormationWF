<?php 
    require_once("inc/init.inc.php");


    if(!empty($_SESSION['utilisateur']['pseudo']))
    {
        header('location:dialogue.php');
    }

    include("inc/header.inc.php");
    echo '<pre>'; var_dump($_SESSION); echo '</pre>';
 ?>

<!-- mettre en place une requete ajax déclenchée lors de la validation du formulaire. Récupérer les parametres à fournir puis tester si la communication est ok si vous recevez bien la reponse depuis ajax_connexion.php-->
<div class="container">
    <div class="card card-container"> 
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" id="form">
            <input type="text"  class="form-control" placeholder="Pseudo"  name="pseudo" id="pseudo" >
            <select class="form-control" name="sexe" id="sexe">
                <option value="" disabled selected>--Votre sexe--</option>
                <option value="m">Homme</option>
                <option value="f">Femme</option>
            </select>
            <input type="text"  class="form-control" placeholder="Votre ville" name="ville" id="ville">
            <input type="date"  class="form-control" placeholder="Votre date de naissance" name="date_de_naissance" id="date_de_naissance">
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Connexion</button>
        </form><!-- /form -->
    </div><!-- /card-container -->
    <div id="message" class="col-sm-4 col-sm-offset-4"></div>
</div><!-- /container -->

<script>
    document.body.style.background = "#e9e9e9";
</script>
<script src="assets/js/app.js"></script>

<?php include("inc/footer.inc.php") ?>