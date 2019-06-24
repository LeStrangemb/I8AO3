<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 26-3-2019
 * Time: 12:22
 */


$getal1 = rand(0,1000);
$getal2 = rand(0,1000);

//kan ik een array aanmaken met de formules erin als string en dan vervolgens een echo met de ternary?


echo <<<uit1
<br>$getal1 > $getal2 = 
uit1;
echo ($getal1 > $getal2 ? 'true' : 'false');

echo <<<uit2
<br>$getal2 < $getal1 = 
uit2;
echo ($getal2 < $getal1? 'true' : 'false');

echo <<<uit3
<br>$getal1 == $getal2 =
uit3;
echo ($getal1 == $getal2? 'true' : 'false');

echo <<<uit4
<br>$getal1 === $getal2 = 
uit4;
echo ($getal1 === $getal2? 'true' : 'false');

echo <<<uit5
<br> $getal1 >= $getal2 = 
uit5;
echo ($getal1 >= $getal2? 'true' : 'false');

echo <<<uit6
<br> $getal1 <= $getal2 =
uit6;
echo ($getal1 <= $getal2? 'true' : 'false');

echo <<<uit7
<br> $getal1 != $getal2 =
uit7;
echo ($getal1 != $getal2? 'true' : 'false');

/*
 * zou je deze ook kunnen maken door een array aan te maken met de symbolen en vervolgens
 * mbv een forloop ofzo deze array langslopen en tussen getal 1 en getal2 plaatsen?
 *resultaat = niet gelukt. reden: gok, kennis ontbreekt om zo ver te kunnen gaan.
 */



