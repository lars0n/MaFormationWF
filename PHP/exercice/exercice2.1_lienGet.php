<?php 
    include('assets/layout/header.inc.php');
    include('assets/layout/nav.inc.php');
?>

<div class="container">
    <div class="starter-template">
        <h1>Liens GET</h1>  
    </div>

    <div class="list-group">
        <a href="?pays=Français" class="list-group-item">France</a>
        <a href="?pays=Italien" class="list-group-item">Italie</a>
        <a href="?pays=Espagnole" class="list-group-item">Espagne</a>
        <a href="?pays=Anglais" class="list-group-item">Angleterre</a>
    </div>
    <?php
        if(isset($_GET['pays']))
        {
            $pays = $_GET['pays'];

             if($pays === 'Français') {
                echo'vous étes ' . $pays . ' ?';         
             }elseif ($pays === 'Italien') {
                 echo'vous étes ' . $pays . ' ?'; 
             }elseif ($pays === 'Espagnole') {
                 echo'vous étes ' . $pays . ' ?'; 
             }
             elseif ($pays === 'Anglais') {
                 echo'vous étes ' . $pays . ' ?'; 
             }else{
                 echo'vous étes un pays inconnue'; 
             }                               
        }
    ?>
</div>


<?php
    include('assets/layout/footer.inc.php');