<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 20-3-2019
 * Time: 14:17
 */

//Arrays in php werken hetzelfde als in andere programmas. je kan ze op drie manieren declareren:
/**
 * $arraynaam = array(1,2,3,4,5);
 * $arraynaam = [1,2,3,4,5];
 * of:
 * $arraynaam[0] = 1;
 * $arraynaam[1] = 2;
 * etc.
 */
//opgave 5

echo "<br>----Opgave 5";
$producten = [];
$producten[0] = "Boeken";
$producten[1] = "CD's";
$producten[2] = "Smartphones";
$producten[3] = "DVD's";

//je kan op deze manier de array printen
print_r($producten);

//je kan ook de array (of variabelen) printen met deze methode. Verschil is is dat deze het aantal elementen en de datatype levert.
echo '<br>';
var_dump($producten);

//met unset kan je een element verwijderen, door meteen aantegeven welke positie je weg wil hebben.
unset($producten[2]);
echo "<br>";
print_r($producten);

//met array_key_exists kan je testen of een key(index) bestaat in de array. De waarde kan zijn true (1) of blanco, NULL(false)

$gevonden = array_key_exists(1, $producten);
echo "<br>Heb je key 1 gevonden?: . $gevonden";

//met in_array kan je kijken of een element bestaat in een array. Dit geeft hij dan ook weer aan met 1(true) of NULL(false)
$gevonden = in_array('Boeken', $producten);
echo  "<br> boeken gevonden? . $gevonden";

//array_search kijkt ook of een bepaald element bestaat in de array, verschil met in_array zit in de return waarde.
//deze geeft namelijk de index terug als return

$test = array_search("DVD's", $producten);
echo "<br>search". $test;

//met array push voeg je elementen toe aan het einde van de array.
array_push($producten, "Laptops", "Tablets");
echo"<br>";
print_r($producten);

//met array_shift verwijder je het eerste element en met pop het laatste
//met array_unshift voeg je 1 of meerdere elementen een het begin toe.
// array_unshift($arraynaam, "element", "etc");

echo "<br>----Opgave 15:";
array_unshift($producten, "TV's", "Stereo's");
echo "<br> TV en Stereo's toegevoegt: ";
print_r($producten);

//met de methode array_rand kan je een of meer random elementen kiezen uit de array:
echo "<br>------Opgave 16:";
//benoem de methode en roep vervolgens de functie aan met tussen de haakjes de naam van de
//array en hoeveel random keys je wilt hebben.
$random_keys = array_rand($producten, 2);
//door eerst de array aan te noemen en vervolgens tussen brackets de naam  van de methode en de keyplaats
//// te benoemen van welke plaats je de random wil hebben, word er automatisch een random inhoud gekozen
echo "<br>Eerste random product:" . $producten[$random_keys[0]];
echo "<br>Tweede random product: " . $producten[$random_keys[1]];

//met de array walk methode display je de gehele array en kan je ook laten zien welke key bij welke inhoud hoort.
//Je maakt eerst een functie aan die de items met de bijbehorende keys aanroept.
function printArray($item, $key){
    echo "<br>$key" . "<i>$item</i>";

}
//vervolgens display je dit dus met functie array_walk
echo "<br>----Opgave 17: Producten array doorlopen.";
array_walk($producten, 'printArray');

//met de methode implode() kunnen we een array naar een string converteren.
//$string = gegeven naam aan methode. implode = naam van methode $delimeter = het onderscheidingsteken. $array = naam van array.
// $string = implode($delimeter, $array);

$getallen = ["nul", "een", "twee", "drie", "vier", "vijf"];
$tools = ["boek", "pen", "laptop", "potlood"];
$tekst1 = implode("*", $getallen );
$tekst2 = implode("|", $tools);
echo "<br>-----Opgave 18: Array getallen in tekst1 converteren: $tekst1";
echo "<br>-----Opgave 19: Array tools in tekst2 converteren: $tekst2";

//met de methode explode kunnen we een string naar een array converteren.
//de syntaxis is hetzelfde als bij implode.

echo "<br>----Opgave 19. String naar array converteren.:";
$array1 = explode("*", $tekst1);
array_walk($array1, 'printArray');
echo "<br>----Opgave 20: String naar array2 converteren";
$array2 = explode("|", $tekst2);
array_walk($array2, 'printArray');

//als je een variable maakt met tekst bijvoorbeeld: $test = "hallo, dit, is, een, test";
//als je vervolgens dit wil displayen met array_walk dan staat op positie 0 de gehele variable
//als je dit probeert te displayen met echo $test[0] & echo $test[1], dan zet hij op deze plaatsen de
//achtereen volgende karakters. in dit geval dus: [0] = h en [1] = a.

//opgave 20

//dit is een voorbeeld van een tweedimensionale array. Je kiest eerst een naam voor je array
//vervolgens geef je aan met array (); dat je een grote array gaat maken, de inhoud volgt verder.
//vervolgens defineer je alle inhoud die bij elkaar hoort in een array, omdat deze in de grote array staan word
//het uiteindelijk gezien als een array. maar dus tweedimensionaal. m.b.v. =>  is dit mogelijk.
//*note :vergeet de inhoud niet tussen haakjes te zetten.
$boeken = array (
    array ("titel" => "Stoner", "auteur" => "John Williams", "genre" => "Fictie", "prijs" => "19.99"),
array ("titel" => "De cirkel", "auteur" => "Dave Eggers", "genre" => "Fictie", "prijs" => "22.50"),
array ("titel" => "Rayuela", "auteur" => "Julio Cortazar", "genre" => "Fictie", "prijs" => "25.50")
);
echo "<br> Array opdracht 20 aangemaakt.";


//met array_walk_recursive kan je de elementen van een tweedimensionale array doorlopen.
//ook hier zie je dat er een functie aangemaakt moet zijn om deze methode te kunnen gebruiken.
//ipv keys te gebruiken is de inhoud nu gelinkt aan de naam die voor het = teken staat.
array_walk_recursive($boeken, 'printArray');

//m.b.v. array_merge kan je 2 arrays samenvoegen.
// je kan dit doen door een nieuwe variable aan te maken of je herbruikt de naam van de eerste de array. bv:
//$nieuweboeken = array ( array(), array(), etc.)
//$boeken = array_merge($boeken, $nieuweboeken) resultaat = dat de arrays zijn samengevoegt
//*note: de laatst benoemde array word er dus op het einde aangeplakt.


?>

