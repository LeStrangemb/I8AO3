
<!DOCTYPE html>
<html lang = "nl">
<head>
    <meta http-equiv="Content-Type"
          content="text/html"
          charset="UTF-8" />
</head>
<body>
<form action="verwerken.php" method="post">
    Uw naam:
    <input type="text" name="naam"> <!--deze maakt een invoerbalk in waarin je je naam kan invullen -->
    <input type="hidden" name="taal" value="false"> <!--deze laat het niet zien maar je moet wel een taal aankruisen
    En deze maakt 3 opties aan waarvan je de een kan aankruisen -->
    <br>Kies een taal:
    <input type="radio" name="taal" value="N"> Nederlands
    <input type="radio" name="taal" value="E"> Engels
    <input type="radio" name="taal" value="S"> Spaans
    <br>
    <!--deze maakt een verstuurknop aan -->
    <input type = "submit" name="submit" value = "Versturen">
</form>

<!--note dat we een deel van de html in een apart bestand hebben gemaakt, als we ze samen in een zouden voegen zou het andere formulier
ookal zichbaar zijn en dat was niet de bedoeling. -->
</body>
</html>
