<?php
/**
 * Created by PhpStorm.
 * User: Maria
 * Date: 19-3-2019
 * Time: 14:53
 */

echo <<<TEKST
Hier word het verschil tussen een lokale en globale variable uitgelegt.

<br>Een lokale variable wordt gebruikt in bijvoorbeeld een functie. 
<br>Dit houd in dat de variable alleen actief is in de functie zelf. Hij is dus lokaal.
<br>Een globale variable is een functie die buiten een functie in het script word vast gesteld.
<br> Deze kan je dus overal herbruiken nadat je hem hebt gedeclareert. 
<br><h3>VOORBEELD globale variable:</h3>

Declareren van de variable:
$ variable1 = "Dit is een voorbeeld.";
<br> output laten zien:
<br>echo hier zet je naam van de variable neer
<br>*note: Het dollar teken moet wel aan de naam van de variable. Dit heb ik hier niet gedaan zodat je kan zien
hoe je een variable declareert en vervolgens laat zien.


<br><h3>VOORBEELD locale variable:</h3>

Declareren van de locale variable:
function ditiseentest(){
$ variable2 = "Voorbeeld"
}

<br>*Note: Ook hier moet het dollar teken aan de naam zitten voor de variable om het te laten werken.
<br> Output laten zien:
echo ditiseentest()
TEKST;
