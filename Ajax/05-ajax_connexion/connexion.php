<?php include("inc/header.inc.php"); ?>

<div class="container">
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" id="form">
                <input type="text"  class="form-control" placeholder="Pseudo"  name="pseudo" id="pseudo" >
                <input type="text"  class="form-control" placeholder="Mot de pass" name="mdp" id="mdp">
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Connexion</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
        <div id="resultat" class="col-sm-4 col-sm-offset-4"></div>
    </div><!-- /container -->
</div>

<?php include("inc/footer.inc.php"); ?>