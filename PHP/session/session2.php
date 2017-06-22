<?php
    // la superglobale $_SESSION est disponible partout sur le serveur;
    session_start();

    echo '<pre>'; print_r($_SESSION); echo '</pre>'; 

    include('assets/layout/header.inc.php');
    include('assets/layout/nav.inc.php');

?>

<div class="container">

    <div class="starter-template">
        <h1>Les session</h1>
    </div>

</div><!-- /.container -->

<?php
    include('assets/layout/footer.inc.php');