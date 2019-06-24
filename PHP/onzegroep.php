<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 28-3-2019
 * Time: 15:05
 */

$gegevens = array(
  array("Studentnummer" => "0309195", "Voornaam" => "Luca", "Achternaam" => "Delamore", "Woonplaats" => "Enschede", "Leeftijd" => "18 jaar"),
    array("Studentnummer" => "0291863", "Voornaam" => "Pepijn", "Achternaam" => "Hones", "Woonplaats" => "Lichtenvoorde", "Leeftijd" => "21 jaar"),
    array("Studentnummer" => "0284880", "Voornaam" => "Maria", "Achternaam" => "Boom", "Woonplaats" => "Enschede", "Leeftijd" => "20 jaar" ),
    array("Studentnummer" => "0268933", "Voornaam" => "Thijs", "Achternaam" => "Van den Dorp", "Woonplaats" => "Enschede", "Leeftijd" => "21 jaar"),
    array("Studentnummer" => "0309199", "Voornaam" => "Stijn", "Achternaam" => "Lassche", "Woonplaats" => "Enschede", "Leeftijd" => "17 jaar"),
    array("Studentnummer" => "0309876", "Voornaam" => "Tristan", "Achternaam" => "Rehorst", "Woonplaats" => "Enschede", "Leeftijd" => "17 jaar")
);

$student = array_rand($gegevens, 2);
$show = $gegevens[$student[1]];

$show2 = implode(' ', $show);
echo $show2;


