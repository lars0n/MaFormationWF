<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 08/08/2017
 * Time: 15:48
 */

spl_autoload_register(function ($class){
    require 'class/' . $class . '.php';
});


$chat1 = new Chat('stanis', 2, 'blanc', 'male', 'persan');
$chat2 = new Chat('neko', 1, 'noir', 'femelle', 'europeen');
$chat3 = new Chat('shrodiger', 5, 'marron', 'male', 'mi-mort mi-vivant');

?>

<table>
    <tr>
        <th>Prénom</th>
        <th>Age(ans)</th>
        <th>Couleur</th>
        <th>Sexe</th>
        <th>Race</th>
    </tr>
    <?php
    $chat1->getInfos();
    $chat2->getInfos();
    $chat3->getInfos();
    ?>
</table>
