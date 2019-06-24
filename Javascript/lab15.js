
function vervangen(){

        //de zin waar het omgaat
        var str = "<br>Dit document is een lang document maar wel een simpel document.";
        //dit is een variable met als inhoud het woord van textbox1 van het html document
        var woord = document.form.woord.value;
        //dit is een variable met als inhoud het woord van textbox2 van het html document
        var nieuwwoord = document.form.nieuwwoord.value;
        //meestal kan je de /g flag gebruiken om alle woorden die hetzelfde zijn te laten replacen.
        //maar aangezien dit een variable is kan het niet
        //hier replace ik variable1 met variable2
        var str = str.replace(woord , nieuwwoord);
        var result = str.bold();

        document.write("<br>Het oude woord was: " +woord);
        document.write("<br>Het nieuwe gekozen woord is: " +nieuwwoord);

        document.write("<br>Dus de nieuwe gemaakte zin is: ");
        document.write(result);

}