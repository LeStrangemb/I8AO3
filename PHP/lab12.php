<h4>Reiskosten</h4>
<?php
function reiskosten($vertrek, $bestemming)
{
    //arrays declareren
    $reiskosten = array();
    $reiskosten[1] = array();
    $reiskosten[2] = array();
    $reiskosten[3] = array();
    $reiskosten[4] = array();

//onderstaand worden er per array 4 indexen aangemaakt met een waarde

    //Amsterdam
    $reiskosten[1][1] = 0;
    $reiskosten[1][2] = 30;
    $reiskosten[1][3] = 60;
    $reiskosten[1][4] = 90;

    //Utrecht
    $reiskosten[2][1] = 30;
    $reiskosten[2][2] = 0;
    $reiskosten[2][3] = 40;
    $reiskosten[2][4] = 20;

    //Den Haag
    $reiskosten[3][1] = 60;
    $reiskosten[3][2] = 40;
    $reiskosten[3][3] = 0;
    $reiskosten[3][4] = 10;

    //Rotterdam
    $reiskosten[4][1] = 90;
    $reiskosten[4][2] = 20;
    $reiskosten[4][3] = 10;
    $reiskosten[4][4] = 0;

    $totaal = $reiskosten[$vertrek][$bestemming];

    return $totaal;
}
?>
<form action="" method="post">

    Vertrek:
    <select name="vertrek">
        <option selected disabled hidden>Kies een vertrekplaats</option>
        <option value="1">Amsterdam</option>
        <option value="2">Utrecht</option>
        <option value="3">Den Haag</option>
        <option value="4">Rotterdam</option>
    </select>

    Aankomst:
    <select name="aankomst">
        <option selected disabled hidden>Kies een bestemming</option>
        <option value="1">Amsterdam</option>
        <option value="2">Utrecht</option>
        <option value="3">Den Haag</option>
        <option value="4">Rotterdam</option>
    </select>

    <br/>
    <br/>
    <input type="submit">
</form>
De berekende reiskosten zijn:
<?php
$reiskosten = reiskosten($_POST['vertrek'], $_POST['aankomst']);
echo $reiskosten . "Euro";
?>