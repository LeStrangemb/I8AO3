<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-TYpe"
          content="text/html;
    charset=UTF-8" />
    <style>
        .album{clear: left; width: 100%;}
        .omslag{float:left;}
        .gegevens{float: left; padding-left: 20px;}
        .korting{clear:left;}
        .aantal{background-color: #f8ce6c;}
    </style>
    <title>Mijn winkelmandje</title>
</head>
<body style="font-family: Verdana; font-size: 9px;">
<h3>Mijn winkelmandje</h3>
<form name="albums" action="" method="post">
    <div class="album">
        <div class="omslag">
            <img src="images\ces.jpg" width="50px" alt="X"/>
        </div>
        <div class="gegevens">
            Cesaria Evora "Em Um Concerto" prijs: $9
            <input type="hidden" name="albumcode[0]" value="001">
            <input type="hidden" name="artiest[0]" value="Ceseria Evora">
            <input type="hidden" name="album[0]" value="Em Um Concerto">
            <input type="hidden" name="prijs[0]" value="9">
            <input type="hidden" name="genre[0]" value="World">
            <br />Aantal:
            <input type="text" size=2 maxlength=3 name="aantal[0]" class="aantal" value="0">
        </div>
      <div class="album">
        <div class="omslag">
          <img src="images/manuchao.jpg" width="50px" alt="X" />
        </div>
        <div class="gegevens">
          Manu Chao "Clandestino" prijs: $5
          <input type="hidden" name="albumcode[1]" value="002" />
          <input type="hidden" name="artiest[1]" value="Manu Chao" />
          <input type="hidden" name="album[1]" value="Clandestino" />
          <input type="hidden" name="prijs[1]" value="5" />
          <input type="hidden" name="genre[1]" value="World">
          <br/>Aantal:
          <input type="text" size=2 maxlength=3 class="aantal" name="aantal[1]" value="0">
        </div>
      </div>
      <div class="album">
        <div class="omslag">
          <img src="images\queenb.jpg" width="50px" alt="X" />
        </div>
        <div class="gegevens">
          Beyonce "Lemonade" prijs: $15
          <input type="hidden" name="albumcode[2]" value="003" />
          <input type="hidden" name="artiest[2]" value="Beyonce" />
          <input type="hidden" name="album[2]" value="Lemonade" />
          <input type="hidden" name="prijs[2]" value="15" />
          <input type="hidden" name="genre[2]" value="RnB">
          <br/>Aantal:
          <input type="text" size=2 maxlength=3 class="aantal" name="aantal[2]" value="0">
        </div>
      </div>

    </div>
    <div class="korting">
        <br><hr />Korting:<br />
        <input type="checkbox" name="student" value="15" />
        Student: 15%<br />
        <input type="checkbox" name="Klant" value="10" />
        Klant: 10%<br />
        <input type="submit" width="300px" name="Verzenden" value=" Bestellen " />
    </div>
    <br>
    <div>
        Selecteer een betalingswijze:<br>
        <select name="betaal">
            <option value="Visa">Visa</option>
            <option value="MasterCard">MasterCard</option>
            <option value="PayPal">PayPal</option>
            <option value="Ideal">Ideal</option>
        </select>
    </div>
    <br>
</form>
<?php

$aantal = $_POST["aantal"];
$korting = 0;

if(isset($_POST["student"])){ $korting = $korting + 15;}
if (isset($_POST["Klant"])) { $korting = $korting + 10;}

$betalingswijze= $_POST["betaal"];

echo "Bestelde albums: ". array_sum ($aantal) . "<br>";
echo "Korting is: " . $korting . "%<br>";
echo  "Betalingswijze: " . $betalingswijze;

if (isset($_POST["Verzenden"]))
{
    include_once("externe_functions2.php");
    $service = serviceKosten($betalingswijze);
    echo "<br>Servicekosten zijn: $" . $service ;
    facturering();
}


echo premium();
?>

</body>
</html>
