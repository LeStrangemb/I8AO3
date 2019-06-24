<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 27-3-2019
 * Time: 14:27
 */



$symbolen = array(">", "<", "==");


function printArray($item){
    $getal1 = rand(0,1000);
    $getal2 = rand(0,1000);

    echo ($getal1 > $getal2 ? 'true' : 'false');
    echo ($getal1 < $getal2 ? 'true' : 'false');
    echo ($getal1 == $getal2 ? 'true' : 'false');
    echo ($getal1 != $getal2 ? 'true' : 'false');
}


array_walk_recursive($symbolen, 'printArray');


//oplossing? hij moet zelf berekenen tijdens de echo hoe de item effect heeft tussen het eerste en tweede getal
