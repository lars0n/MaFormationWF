<?php 
    include('assets/layout/header.inc.php');
    include('assets/layout/nav.inc.php');
?>

<div class="container">
    <div class="starter-template">
        <h1>Boucle</h1>  
    </div>

    <h2>Boucle de 1 a 100</h2>

    <?php
        echo '<ul class="list-group">';
        for ($i=1; $i <= 100 ; $i++) { 
            echo '<li class="list-group-item">'. $i .'</li>';
        }
        echo '</ul>';
    ?>

    <h2>Boucle de 1 a 100 avec <span class='label label-danger'>50 en rouge</span></h2>

    <?php
        echo '<ul class="list-group">';
        for ($i=1; $i <= 100 ; $i++) { 

            if($i == 50)
            {
                echo '<li class="list-group-item list-group-item-danger">'. $i .'</li>';
            }else {
                echo '<li class="list-group-item">'. $i .'</li>';
            }

        }
        echo '</ul>';
    ?>

    <h2>Boucle de 2000 à 1930</h2>

    <?php
        echo '<ul class="list-group">';
        for ($i=2000; $i >= 1930 ; $i--) { 
            echo '<li class="list-group-item">'. $i .'</li>';
        }
        echo '</ul>';
    ?>
<div>


<?php
    include('assets/layout/footer.inc.php');