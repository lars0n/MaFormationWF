<style>
    * {
        font-family: serif;
        margin: 0;
    }

    hr {
        margin: 15px 0;
        box-shadow: 0 1px 6px;
    }

    h3 {
        padding: 10px;
        background-color: lightblue;
        color: white;
    }
</style>

<?php
// récupérer 5 images sur le web et les rennomer de cette façon:
//image1.jpg
//image2.jpg
//image3.jpg
//image4.jpg
//image5.jpg
// pixabay.com

// 1 - afficher une image avec une balise <img/>
// 2 - afficher une image 5 fois toujours en ecrivant 1 seule balise <img/>
// 3 - afficher les 5 iùmages différentes toujours en écrivant une seul balise <img/>

echo '<h3>1 - afficher une image avec une balise img</h3><br/>';

// 1
echo '<img src=\'image/image1.jpg\' width=\'350\'>';

echo '<hr/>';

echo '<h3>2 - afficher une image 5 fois toujours en ecrivant 1 seule balise img</h3><br/>';

// 2
for ($i=1; $i < 6 ; $i++) { 
    echo '<img src=\'image/image5.jpg\' width=\'350\'/>';
}

echo '<hr/>';

echo '<h3>3 - afficher les 5 iùmages différentes toujours en écrivant une seul balise img</h3><br/>';

// 3
for ($i=1; $i < 6 ; $i++) { 
    echo '<img src=\'image/image'. $i .'.jpg\' width=\'350\'/>';
}