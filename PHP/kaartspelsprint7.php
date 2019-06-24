
<?php

/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 17-6-2019
 * Time: 18:34
 */

echo 'Deze random generator genereert 5 random Yahtzee kaarten.' ;
echo '<br>';


for ($teller=0; $teller <5; $teller ++){

    //declareren van twee arrays
    $kleuren = array("ruiten", "harten", "klaveren", "schoppen");
    $waarden = array("boer", "vrouw", "heer", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10");

//declareren van twee random arrays die bij random kleur 1 randomkleur pakt en bij randomwaarde een randomwaarde.
    $randomkleur = array_rand($kleuren, 2);
    $randomwaarde = array_rand($waarden, 2);


    /**door de gekozen kleur en waarde aan elkaar te plakken mbv '_' . komt deze overeen met de namen van de svg bestanden
     * Hierdoor kan je deze $getkaart mbv html in de link zetten en pakt hij automatisch de bijbehorende kaart.
     */

    $getkaart = $kleuren[$randomkleur[0]] .'_'. $waarden[$randomwaarde[0]];
    $link = "<html>
    <img src = './images/kaarten/$getkaart.svg' alt='img' height='200px' width='155px'>
    </html>";


echo  $link;

}







?>