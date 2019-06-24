<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 28-3-2019
 * Time: 14:33
 */

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
$tekst = $kleuren[$randomkleur[0]] .' '.  $waarden[$randomwaarde[0]];


echo "<html><img src = './images/kaarten/$getkaart.svg'/></html>";
echo "<br><i>Je random getrokken kaart is: </i>  $tekst";

?>