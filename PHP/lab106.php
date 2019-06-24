<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 21-3-2019
 * Time: 14:26
 */

//vergeet niet dat als je een array wil doorlopen in php en je wil de methode walk or walk_recursive gebruiken
//dat je een functie aanmaakt en vervolgens met het displayen array_walk or array_walk_recursive (2dimensional) gebruikt.

//FUNCTIE aangemaakt om uiteindelijk de array laten zien
function printArray ($item, $key){
echo "<br> $key" . "<i>$item</i>";
}

//twee-dimensionale associatieve array definieren (associeert naam ipv index)
$playlist = array(
    array( "genre " => "Hiphop", "auteur " => "John Williams",
        "titel " => "My girl"),
    array("genre " => "Jazz", "auteur " => "John Caltrone", "titel " => "New York"),
    array("genre " => "Hiphop", "auteur " => "Shakira", "titel " => "Obsession")
);

//nieuwe array in de hoofdarray voegen
$pusharray = array("genre " => "Hiphop", "Auteur " => "Caetano Veloso", "Titel " => "Cafe Atlantico");
array_push($playlist, $pusharray);

//eerst de naam van de array en vervolgens tussen aanhalingstekens de naam van de functie.
//"callback function"
array_walk_recursive($playlist, 'printArray');


//de tussen de haakjes zijn de items. de key is de positie waarop deze items zich bevinden
function printTracks($item, $key ){
    //je converteerd de array naar een string, je laat na elke item een "|" komen.
    $tracks = implode("|", $item);
    //Hier laat je de track met bijbehorende key eerst zien en achter de dubbele punt laat je je methode zien waarin
    //je de array heb geconverteerd naar een string met de "|" er tussen.
    echo "<br>Track $key : $tracks";
}

//displayen van de tracks
array_walk($playlist, 'printTracks');
