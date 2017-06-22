<?php 
    include('assets/layout/header.inc.php');
    include('assets/layout/nav.inc.php');
?>

<div class="container">

<?php
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['cp']) && isset($_POST['sexe']) && isset($_POST['description']))
    {
        echo '<div class="alert alert-success" role="alert">';
        echo '<p>nom    : ' . $_POST['nom'] . '<p>';
        echo '<p>prenom : ' . $_POST['prenom'] . '<p>';
        echo '<p>adresse : ' . $_POST['adresse'] . '<p>';
        echo '<p>ville  : ' . $_POST['ville'] . '<p>';
        echo '<p>cp     : ' . $_POST['cp'] . '<p>';
        echo '<p>sexe   : ' . $_POST['sexe'] . '<p>';
        echo '<p>desrcription' . $_POST['description'] . '<p>';
        echo '</div>';
    }
?>

  <div class="starter-template">
    <h1>Formulaire POST</h1>  
  </div>

  <div class="row">
    <form action="" method="post">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input class="form-control" type="text" name="nom" id="nom">
        </div>

        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input class="form-control" type="text" name="prenom" id="prenom">
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input class="form-control" type="text" name="adresse" id="adresse">
        </div>

        <div class="form-group">
            <label for="ville">Ville</label>
            <input class="form-control" type="text" name="ville" id="ville">
        </div>

        <div class="form-group">
            <label for="cp">Code Postal</label>
            <input class="form-control" type="text" name="cp" id="cp">
        </div>

        <div class="form-group">
            <label for="sexe">Sexe</label>
            <select class="form-control"  name="sexe" id="sexe">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control"  name="description" id="description" rows="10"></textarea>
        </div>

        <button class="btn btn-success btn-block">Envoie <i class="glyphicon glyphicon-send"></i></button>
    </form>
    </div>
</div>


<?php
    include('assets/layout/footer.inc.php');