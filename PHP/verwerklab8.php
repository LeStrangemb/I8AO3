
<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 1-4-2019
 * Time: 15:19
 */

//hier zeggen we mbv isset: als er op de knop versturen word gedrukt dat doe dit en dat.
if(isset($_POST["versturen"])) {
    $anaam = $_POST["anaam"];
    $vnaam = $_POST["vnaam"];
    $straat = $_POST["straat"];
    $postcode = $_POST["postcode"];
    $plaats = $_POST["plaats"];
    $email = $_POST["email"];
    $opleiding = $_POST["knopje"];
    echo "<h2>Uw gegevens zijn:</h2>";
    echo "Achternaam:  $anaam <br>";
    echo "Voornaam:   $vnaam <br>";
    echo "Straat:  $straat <br>";
    echo "Postcode:   $postcode <br>";
    echo "Plaats:  $plaats <br>";
    echo "E-mailadres:  $email <br>";
    echo "U wordt ingeschreven voor de volgende opleiding: $opleiding <br>";

    if($opleiding == "ICT"){
        echo "<br> <i>ICT opleidingen zijn vol, Kies een andere opleiding </i>";
    }
}
?>




