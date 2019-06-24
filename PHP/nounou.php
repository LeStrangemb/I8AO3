<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 27-3-2019
 * Time: 15:15
 */

$getal1= rand(0,1000);
$getal2 = rand(0,1000);
$formules = array ( $getal1>$getal2, $getal1<$getal2, $getal1 == $getal2 );
function printArray ($item){
    $getal1= rand(0,1000);
    $getal2 = rand(0,1000);
    $formules = array ( $getal1>$getal2, $getal1<$getal2, $getal1 == $getal2 );
   echo  $item.  ($formules[0] == true?  "true" : 'false');




}


array_walk($formules, 'printArray');