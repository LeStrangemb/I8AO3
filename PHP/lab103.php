<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 19-3-2019
 * Time: 18:30
 */

$breedte = 10;
$lengte = 11;
$hoogte = 5;
$basisopp = $breedte * $lengte;
$volume = $breedte * $lengte *$hoogte;

//<br> wel in de quotes zetten, de punt hier is een plus.

echo
"Containerbasisoppervlakte is:" .$basisopp .
"<br>Containervolume is: " .$volume;

?>