<?php 

    // je crée une fonction qui prend en paramettre le montant et la devise qui par default vaut USD
    function convertire ($montant, $devise = 'USD')
    {
        // si $montant est un chiffre alors je rentre dnas la conndition
        if( is_numeric($montant) )
        {
            // si la devise est dollars je retourne une conversion en dollars sinon en euro
            if($devise == 'USD')
            {
                return ($montant * 1.085965) . ' Dollar.';
            } elseif($devise == 'EUR')
            {
                return ($montant * 0.085965 + $montant) . ' EUROS.';
            }
        }
    }

    //echo convertire('12', 'EUR');

    require('inc/header.inc.php');
?>
    <div class="container">
        <div class="alert alert-info text-center">
            <?= convertire(10)?>
            <hr>
            <?= convertire(25, 'USD')?>
            <hr>
            <?= convertire(8, 'EUR')?>
        </div>
    </div>

<?php 
    require('inc/footer.inc.php');