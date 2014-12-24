function letras(evento){
    key=evento.keyCode || evento.which;
    if (key==32) {
        return true;
    }
    if ((key==8) || (key>=65 && key<=90)){ 
        return true;
    }else{
        tecla = String.fromCharCode(key)
        patron = /[a-zA-Z]/;
        return patron.test(tecla);
    }

}

function numeros(evento){
    key=evento.keyCode || evento.which;
    if ((key==8) || (key>=48 && key<=57)){ 
        return true;
    }else{
        tecla = String.fromCharCode(key)
        patron = /[0-9]/;
        return patron.test(tecla);
    }
}