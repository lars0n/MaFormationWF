<?php
//--------- Import init -------// 
require('inc/init.inc.php');



//--------- Import du Header et du nav -------//
// l'affichage html commence ici 
include('inc/header.inc.php');
include('inc/nav.inc.php');
//----------------------------------------//

?>

<div class="container">

  <div class="starter-template">
    <h1>Mon site</h1>
    <?= $message; // messages destinés à l'utilisateur ?>  
  </div>


</div><!-- /.container -->

<?php
//---------  Import footer site -------------//
include('inc/footer.inc.php');
