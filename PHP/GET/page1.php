<style>
    * {
        font-family: serif;
    }

    body {
        margin: 0;  
    }

    h1 {
        padding: 10px;
        background-color: LimeGreen ;
        color: white;
    }

    a {
        margin-left: 10px;
        padding: 10px 20px;
        text-decoration: none;
        background-color: LimeGreen ;
        color: white;
        transition: 0.5s;
    }

    a:hover {
        background-color: white;
        border: 1px solid LimeGreen ;
        color: LimeGreen;
    }

</style>

<h1>page 1</h1>

<?php
// sur page1.php et page2.php mettre un titre avec le nom de la page et un lien qui permet de passer d'une a l'autre

echo '<a href="page2.php?article=jean&couleur=bleu&prix=40">Aller vers 2</a>';
// voir la page2.php pour les explication sur $_GET