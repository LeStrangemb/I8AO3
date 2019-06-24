<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 2-4-2019
 * Time: 15:48
 */

//deze variable geeft een random cijfer tussen 10 en 30
$leeftijd = rand(10,30);

if ($leeftijd >= 18) {

    echo "Je random leeftijd is: $leeftijd en dus ouder dan 18, klik om doorverwezen te worden naar de site ." .
        //note dat de <a> tussen single quotes staan. en er wel een tekst moet komen zoals: klik hier.
        //hij word namelijk niet automatisch geopend. dit zou je met header kunnen doen maar dan kan je de
        //getrokken leeftijd niet zien.
         '<a href="http://www.grolsch.nl">KLIK HIER!</a>';
}

else if ($leeftijd <= 18) {

echo "Je random leeftijd is $leeftijd en dus jonger dan 18, klik om doorverwezen te worden naar de site." .
'<a href="https://www.alcoholinfo.nl/publiek">KLIK HIER!</a>';
}











