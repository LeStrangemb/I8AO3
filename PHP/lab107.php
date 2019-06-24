<?php
$boeken = array(
    //voor het = teken is de key, daarna het item.
    array("titel" => "Stoner", "auteur" => "John Williams", "genre" => "fictie", "Prijs" => "19.99"),
    array("titel" => "De circel", "auteur" => "Dave Eggers", "genre" => "fictie", "Prijs" => "22.50"),
    array("titel" => "Rayuela", "auteur" => "Cortázar", "genre" => "fictie", "Prijs" => "25.50")
);
function prijsLijst($item, $key)
{
    if ($key == "Prijs"){
        echo $key.": ".$item."<br>";
    }
}
//omdat het een tweedimensionale array is moet je even aangeven welke array indexen je geshowed wil hebben
array_walk($boeken[0],"prijsLijst");
array_walk($boeken[1], "prijsLijst");
array_walk($boeken[2], "prijsLijst");
?>
