function euro_dollarkoers(){
    return(1.36);
}

function dollar_eurokoers(){
    return(0.74)
}

function euro_roebelkoers(){
    return(48.40)
}

function roebel_eurokoers(){
    return(0.02)
}

function exchange(){

    if (document.form.conversie.value == 'euro/dollar'){
        document.write(+document.form.bedrag.value + " euro voor: " +  (euro_dollarkoers() * document.form.bedrag.value).toFixed(2) + " dollar.");

    }
    if (document.form.conversie.value == 'dollar/euro'){
        document.write(+document.form.bedrag.value + " dollar voor: " + (dollar_eurokoers() * document.form.bedrag.value).toFixed(2) + " euro.");

    }
    if (document.form.conversie.value == 'euro/ruble'){
        document.write(+document.form.bedrag.value + " euro voor: " + (euro_roebelkoers() * document.form.bedrag.value).toFixed(2) + " roebel.");

    }
    if (document.form.conversie.value == 'ruble/euro'){
        document.write(+document.form.bedrag.value + " roebel voor: " + (roebel_eurokoers() * document.form.bedrag.value).toFixed(2) + " euro.");

    }


}
