<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 2-4-2019
 * Time: 12:16
 */


for($i=1;$i<100; $i++)
{
    if ($i%2 == 0){

        //wat continue doet is die kijkt naar de statement en als dat statement waar is dan negeert hij dat en gaat hij verder
        //dus als je dan i print dan laat hij alles zien wat dus niks met je if statement te maken heeft
        continue;
    }
    echo "<br>" .$i;
}
?>

