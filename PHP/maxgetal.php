<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 22-5-2019
 * Time: 11:57
 */

function maxGetal($getal1, $getal2){
    $input1 = doubleval($_POST['eerstegetal']);
    $input2 = doubleval($_POST['tweedegetal']);
    if($getal1>$getal2){
        return($getal1);
    }elseif($getal2>$getal1){
        return($getal2);
    }else{return("gelijk");}
}
?>

<form action=" " method="post">
    <input type="text" name="eerstegetal"
           placeholder="Eerste getal"><br>
    <input type="text" name="tweedegetal"
           placeholder="Tweede getal"><br><br>
    <input type="submit" name="submit"
           value="Bereken het hoogste getal">

    <p>------------------------------------</p>
</form>

<?php

if (isset($_POST["submit"])){


   //$var1 = $_POST['eerstegetal'];
    //$var2 = $_POST['tweedegetal'];
    $maxgetal = maxGetal($_POST["eerstegetal"], $_POST["tweedegetal"]);

    //ipv isnumeric moest de input string eigl geconverteerd worden naar double-->navragen
    if ( is_numeric($_POST['eerstegetal']) && is_numeric($_POST['tweedegetal'])){
   echo $maxgetal;
}
    else {
      echo  "Voer een getal in.";
    }
}
?>