<!--Knoppen maken hoort bij het deel HTML omdat dit te maken heeft met de opmaak
 dit kan je doen door het html deel boven de php te zetten of een apart html formulier te maken
 en deze te linken met je phpfile.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dobbelsteen button</title>
</head>
<body>
<form method = "post" action = "">
    <button type= "submit" name = "sub" value = "call">Klik hier om 5 dobbelstenen te gooien.</button>
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 26-3-2019
 * Time: 17:27
 */
//hier defineer je een array met 5 posities die random getallen kiest tussen de 1 en de 6.
$dobbelsteen = array(rand(1,6), rand(1,6), rand(1,6), rand(1,6), rand(1,6));
//hier bereken je de som van alle gegooide posities samen
$som = $dobbelsteen[0] + $dobbelsteen[1] +$dobbelsteen[2] + $dobbelsteen[3] + $dobbelsteen[4];

//hier maak je een functie aan waarin je de key van de array met de items naar voren kan laten komen
//key +1 anders begint hij 0 met tellen
function printDobbel( $item, $key){

    $key = $key + 1;
    echo "<br> Dobbelsteen $key: <i>waarde</i>: $item";
}

//hier zeg je dat als er op de knop word gedrukt hij de functie moet laten zien/uitvoeren die bij array dobbelsteen hoort.
//en dat hij alles moet displayen wat je hieronder heb neer gezet na dat hij de functie heeft uitgevoerd.
if (isset($_POST["sub"])){
    array_walk($dobbelsteen, 'printDobbel');
    echo "<br><i>De som van alle gegooide worpen samen zijn: $som </i>";
}

?>
