<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 20-3-2019
 * Time: 14:16
 */

$cijfers = ["een", "twee", 3, "vier",];

array_push($cijfers, 5);
print_r(  $cijfers);
echo "<br>";

echo gettype(5);
echo"<br>";
array_pop ($cijfers);
print_r($cijfers);
echo"<br>";

array_unshift($cijfers,"nul");
print_r($cijfers);
echo "<br>";

unset($cijfers[0]);
echo gettype($cijfers[0]);
print_r($cijfers);
echo"<br>";
unset($cijfers[0]);
echo "<br>";
print_r( $cijfers);
unset ($cijfers[2]);
echo "<br>";
print_r($cijfers);
unset ($cijfers[4]);
echo"<br>";
print_r($cijfers);




?>