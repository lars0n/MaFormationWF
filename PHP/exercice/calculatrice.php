<?php 
    include('assets/layout/header.inc.php');
    include('assets/layout/nav.inc.php');
?>

<div class="container">
    <div class="starter-template">
        <h1>Calculatrice</h1>  
    </div>

    <form action="" method="post" class="form-inline">
        <div class="form-group">
            <input type="text" class="form-control" name="val1">
        </div>

        <div class="form-group">
            <select class="form-control" name="operateur" id="">
                <option value="addition">+</option>
                <option value="soustraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
            </select>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="val2">
        </div>

        <button type="submit" class="btn btn-default">Calculer</button>
    </form>

    <?php 
        if(isset($_POST['val1']) && isset($_POST['operateur']) && isset($_POST['val2'])) {
            $val1 = $_POST['val1'];
            $operateur = $_POST['operateur'];
            $val2 = $_POST['val2'];
            $resultat = '';
            
            $resultat = ($operateur === 'addition') ? $val1 + $val2 : ""; 
            $resultat .= ($operateur === 'soustraction') ? $val1 - $val2 : ""; 
            $resultat .= ($operateur === 'multiplication') ? $val1 * $val2 : ""; 
            $resultat .= ($operateur === 'division') ? $val1 / $val2 : ""; 

            echo '<br><div class="alert alert-success" role="alert">Le resultat de ' . $val1 . ' et ' . $val2 . ' est ' . $resultat .'</div>';
        }
    ?>
</div>

<?php
    include('assets/layout/footer.inc.php');