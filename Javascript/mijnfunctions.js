function afmelden() {
    var antwoord = confirm('Wilt u zich afmelden?');
    if (antwoord == true){
        alert ('U wordt afgemeld!!!');
    }
}

function begroeten(){

    var uur = new Date().getHours();

    if (uur >= 0 && uur <= 11){
        document.write('<br>Goedemorgen!');
    }
    else if (uur >= 12 && uur <= 17){
        document.write('<br>Goedemiddag!');
    }
    else {
        document.write('<br>Goedenavond!');
    }
}

function dollarkoers(){
    return(1.36);
}
function eurokoers(){
    return(0.74);
}

function dollar_naar_euro(dollars){
    return (dollars*eurokoers());
}

function wissel(bedrag, valuta){
    if (valuta == 'euro'){
        return (bedrag * dollarkoers());
    }

    else if (valuta == 'dollar'){
        return (bedrag*eurokoers());
    }
}











