<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 3-4-2019
 * Time: 15:57
 */

$brief = "
Beste <br><<abonnee>><br>
U heeft het laatste nummer van ons magazine ontvangen.<br>
Omdat we u heel graag als abonnee willen behouden, bieden we u een aantrekkelijke en exclusieve korting:
<br>U betaalt <br> <<bedrag-met-korting>></b>
in plaats van 65 euro. <br><br>
<i>Profiteer nu van deze aanbieding!</i><br><br>
Met vriendelijke groet, <br>
Sam Simons<br>
Hoofdredacteur<br>";


//je kan een array maken met meerdere dingen die je vervangen wil laten worden.
$repnaam = str_replace(array("<<abonnee", "<<bedrag-met-korting>>"), array("Jan Davids", "50"), $brief);

echo $repnaam

?>