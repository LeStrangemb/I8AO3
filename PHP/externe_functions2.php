<?php
function korting()
{
 $korting = 0;
 if (isset($_POST['student'])) {
   $korting = $korting + 15;
 }
 if (isset($_POST['Klant']))
 {
   $korting = $korting + 10;
 }
 return($korting);
}

function serviceKosten($betalen)
{
  $servicekosten = 0;
  switch($betalen)
  {
    case "Visa":
     $servicekosten = 2;
     break;
    case "MasterCard":
     $servicekosten = 2.5;
     break;
         case "PayPal":
     $servicekosten = 1.5;
     break;
    case "Ideal":
     $servicekosten = 1;
     break;
    default:
      echo"Kies een betaalmethode";
     break;
  }
  return($servicekosten);
}

function facturering()
{
  $totaal = 0;
  echo '
    <hr>
    <table>
      <tr>
        <th>Genre</th>
        <th>Artiest</th>
        <th>Album</th>
        <th>Aantal</th>
        <th>Prijs</th>
        <th>Bedrag</th>
      </tr>
  ';
  for($i=0; $i < sizeof($_POST["albumcode"]); $i++)
  {
      //Met de sizeof methode kan je elk array element weergeven van de array.
      //binnen deze lus word elk besteld album weergegeven
    $genre = $_POST["genre"][$i];
    $artiest = $_POST["artiest"][$i];
    $album = $_POST["album"][$i];
    $aantal = $_POST["aantal"][$i];
    $prijs = $_POST["prijs"][$i];
    $bedrag = $prijs * $aantal;

    //totaal bedrag zonder korting, servicekosten etc
    $totaal = $totaal + $bedrag;

    //tabel die uiteindelijk gedisplayed moet worden
    echo"
    <tr>
      <td>$genre</td>
      <td>$artiest</td>
      <td>$album</td>
      <td>$aantal</td>
      <td>$prijs</td>
      <td>€$bedrag</td>
    </tr>";
  }
  //formule voor de korting
  $korting = $totaal * korting() / 100;
  //aanroepen van de bijbehorende servicekosten mbv GET POST
  $servicekosten = serviceKosten($_POST['betaal']);

  //de totaal kosten incl servicekosten en korting etc.
  $betalen = ($totaal + $servicekosten) - ($totaal * (korting() / 100)) ;
  echo"
  <tr>
    <td>Totaal</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>€$totaal</td>
  </tr>
  <tr>
    <td>Korting</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>$korting%</td>
  </tr>
  <tr>
    <td>Servicekosten</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>€$servicekosten</td>
  </tr>
  <tr>
    <td>Te betalen</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>€$betalen</td>
  </tr>"
  ;

}
function premium()
{
    $aantal = $_POST["aantal"];
    if ($aantal >= 5){
        echo "Word lid van onze premium club.";
    }
}
?>