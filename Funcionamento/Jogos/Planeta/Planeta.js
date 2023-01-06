var dirYjogador, dirXjogador;

function teclaDown(){
    var tecla=Event.keyCode;
    if(tecla==38){//cima
        dirYjogador=-1;
    } 
    else if(tecla==40){//Baixo
        dirYjogador=1;
    }
    if(tecla==37){//Esquerda
        dirXjogador=-1;
    }
    else if(tecla==39){//Direita
        dirXjogador=1;
    }

    if(tecla==32){//Espaço | Disparo

    }

}

function TeclaUp(){
    var tecla=Event.keyCode;
    if((tecla==38)||(tecla==40)){//cima
        dirYjogador=-0;
    } 
    else if((tecla==37)||(tecla==39)){//Baixo
        dirXjogador=0;
    }
}