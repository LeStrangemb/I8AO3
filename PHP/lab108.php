<!-- hier maken we een formulier aan waar je je gegevens in kan vullen,
requiered type "text" staat voor dat je een text moet invullen. de name staat voor welke naam je dat gedeelte geeft
en placeholder is de naam die de gebruiker te zien krijgt.
het is belangrijk dat je de methode post noemt of get.(in dit geval post)
zodat je in het verwerkingsformulier de functie $_POST kan aanroepen. -->

<form name ="form" action="verwerklab8.php" method="post">
    <input required type="text" name="anaam" placeholder="Achternaam"><br>
    <input required type="text" name="vnaam" placeholder="Voornaam"><br>
    <input required type="text" name="straat" placeholder="Straat"><br>
    <input required type="text" name="postcode" placeholder="Postcode"><br>
    <input required type="text" name="plaats" placeholder="Plaats"><br>
    <input required type="text" name="email" placeholder="E-mailadres"><br><br>


    <!-- hier maken we een keuzeformulier aan met knopjes die je kan aanvinken -->

Kies een opleiding:
    <br>
    <input type="radio" name="knopje" value="ICT"> ICT<br>
    <input type="radio" name="knopje" value="Engels"> ENGELS<br>
    <input type="radio" name="knopje" value="Techniek"> TECHNIEK<br>
    <input type="radio" name="knopje" value="Nederlands"> NEDERLANDS<br>
    <br>
<!-- hier zijn er twee buttons gemaakt, deze buttons zijn standaart functies al, dus de submit type
weet dat als hij word aangeroepen dat hij moet versturen en de reset button weet dat hy moet resetten als
die word aangeroepen -->

    <input type="submit" name="versturen" value="Versturen"><br>
    <input type="reset" name="reset" placeholder="Reset">
</form>
