<!DOCTYPE html>
<html lang="nl" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type"
    content="text/html"
    charset=UTF-8"/>
    <style>
        .album{clear:left; width: 100%;}
        .omslag{float: left;}
        .gegevens{float: left; padding-left: 20px;}
        .korting{ clear: left;}
        .aantal{background-color: #f8ce6c;}
        </style>
    <title>Mijn Winkelmandje</title>
</head>
<body style="font-family: Verdana; font-size: 9px;">
<h3>Mijn winkelmandje</h3>
<form name="albums" action="" method="post">
    <div class="album">
        <div class="omslag">
            <img src = 'images\ces.jpg' width="50px" alt="X"/>
        </div>
            <div class "gegevens">
        Cesaria Evora "Em um Concerto" Prijs: $9
        <input type="hidden" name="albumcode[0]" value="001">
            <input type="hidden" name="artiest[0]" value="Cesaria Evora">
            <input type="hidden" name="prijs[0]" value="9">
            <input type="hidden" name="genre[0]" value="World">
            <br/>Aantal:
            <input type="text" size="2" maxlength=3 name="aantal1" class="aantal" value="0">
        </div>
    </div>
    <div class="album">
        <div class="omslag">
            <img src="images/manuchao.jpg" width="50px" alt="X"/>
        </div>
        <div class="gegevens">
            Manu Chao "Clandestino" Prijs: $5
            <input type="hidden" name="albumcode[1]" value="002"/>
            <input type="hidden" name="artiest[1]" value="Manu Chao"/>
            <input type="hidden" name="album[1]" value="Clandenstino" />
            <input type="hidden" name="prijs[1]" value="5" />
            <input type="hidden" name="genre[1]" value="World"/> </br>
            Aantal:
            <input type="text" size="2" maxlength="3" class="aantal" name="aantal[1]" value="0"
        </div>
    </div>
<div class="album">
    <div class="omslag">
        <img src='images\queenb.jpg' width="50px" alt="X"/>
    </div>
    <div class="gegevens">
        Beyonce "Lemonade" Prijs: $11
        <input type="hidden" name="albumcode[2]" value="003">
        <input type="hidden" name="artiest[2]" value="Beyonce">
        <input type="hidden" name="album[2]" value="Lemonade">
        <input type="hidden" name="prijs[2]" value="11">
        <input type="hidden" name="genre[2]" value="World"/></br>
    Aantal:
    <input type="text" size="2" maxlength="3" name="aantal" class="aantal" value="0"/>
    </div>
</div>

    <div class="korting">
        <br><hr />Korting:<br/>
        <input type="checkbox" name="student" value="15" />
        Student: 15%<br/>
        <input type="checkbox" name="klant" value="10" />
        Klant: 10%<br/>
        <form name="betaling" action="" method="POST">
            <p>Selecteer een betalingswijze: </p>
            <select name="betalingswijze" value="true">
                <option value=""></option>
                <option value="Visa">Visa</option>
                <option value="Master">Mastercard</option>
                <option value="PayPal">PayPal</option>
                <option value="Ideal">Ideal</option>
            </select>
        <input type="submit" width="300px" name="verzenden"
               value=" Bestellen " />
    </div>
</form>

<?php
$korting = 0;
if(isset($_POST["student"])){ $korting = $korting + 15;}
if (isset($_POST["klant"])) { $korting = $korting + 10;}

echo "Bestelde albums:" . $_POST['aantal1'] . "<br>Korting is: " .$korting . "%";


if(isset($_POST["verzenden"])){
    switch($_POST['betalingswijze']) {

        case "Visa":
            echo "<p>Betalingswijze: Visa. </p>";
            break;

        case "Master":
            echo "<p>Betalingswijze: Master. </p>";
            break;

        case "PayPal":
            echo "<p>Betalingswijze: PayPal. </p>";
            break;

        case "Ideal":
            echo "<p>Betalingswijze: Ideal. </p>";
            break;

        default:
            echo "<p>U heeft geen betalingswijze gekozen</p>";
    }

    include_once("externe_functions2.php");
    echo "<br>De korting()-function: " .korting(). "%";
    $betalingswijze = $_POST['betalingswijze'];
    $servicekosten = serviceKosten($betalingswijze);
    echo "<br>De servicekosten zijn: " . $servicekosten;
}

?>

<table id="factuur">
    <tr>
        <th>Genre</th>
        <th>Artiest</th>
        <th>Album</th>
        <th>Aantal</th>
        <th>Prijs</th>
        <th>Bedrag</th>
    </tr>
    <tr>
        <td>World</td>
        <td>Cesaria Evora</td>
        <td>Em Um Concerto</td>
        <td>1</td>
        <td>9</td>
        <td>9.00</td>
    </tr>
    <tr>
        <td>World</td>
        <td>Manu Chao</td>
        <td>Clandestino</td>
        <td>2</td>
        <td>5</td>
        <td>10.00</td>
    </tr>
    <tr>
    <td>Totaal</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>19.00</td>
    </tr>
    <tr>
        <td>Korting</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>1.90</td>
    </tr>
<tr>
    <td>Servicekosten</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>2.00</td>
</tr>
    <tr>
        <td>Te betalen</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>19.10</td>
    </tr>





</table>
</body>
</html>