<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 27-3-2019
 * Time: 16:59
 */

$kleuren = array("ruiten", "harten", "klaveren", "schoppen");
$waarden = array("boer", "vrouw", "koning", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10");

//als je als hoeveelheid 1 intypt en je wil ook 1 random hebben dan doet hij het niet.
$randomkleur = array_rand($kleuren, 2);
$randomwaarde = array_rand($waarden, 2);
$test300 = implode('', $randomkleur);
$test400 = implode('', $randomwaarde);
echo $test400;
//echo  $kleuren[$randomkleur[0]] . ' '. $waarden[$randomwaarde[0]];;
//("$kleuren[0]" . "$waarden[4]"? '<img src = "ruiten_2.svg"/>' : 'niet gelukt ');



$loc = $test300 . '_' . $test400 . ".svg";
$totaal = "<html><img src = './images/kaarten/$loc'/></html>";

//$ditiseentest = array_rand($test, 2);

echo $totaal;


//$kaarten = array ($randomkleur . "_" . $randomwaarde . '<img src = "ruiten_1.svg"/>' , );




?>