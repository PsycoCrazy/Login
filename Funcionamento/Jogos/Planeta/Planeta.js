var dirYjogador, dirXjogador, Jogador, Velocidade, pjx, pjy;
var velT;
var TamTelaW, TamTelaH;
var Jogo;
var frame;

function TeclaDown(){
    var tecla=Event.keyCode;
    if(tecla==38){//cima
        dirYjogador=-1;
    }else if(tecla==40){//Baixo
        dirYjogador=1;
    }
    if(tecla==37){//Esquerda
        dirXjogador=-1;
    }else if(tecla==39){//Direita
        dirXjogador=1;
    }

    if(tecla==32){//Espaço | Disparo
        atira(pjx+17,pjy);
    }
}
function TeclaUp(){
    var tecla=Event.keyCode;
    if((tecla==38)|(tecla==40)){//cima
        dirYjogador=0;
    } 
    else if((tecla==37)|(tecla==39)){//Baixo
        dirXjogador=0;
    }
}
function atira(x,y){
    var t=document.createElement("div");
    var att1=document.createAttribute("class");
    var att2=document.createAttribute("style");
    att1.value="tiroJogodor";
    att2.value="top:"+y+"px;left"+x+"px";
    t.setAttributeNode(att1);
    t.setAttributeNode(att2);
    document.body.appendChild(t);
}

function controleTiros(){
    var tiros=document.getElementsByClassName("tiroJogador");
    var tamanho=tiros.length;
    for(var i=0;i<tamanho;i++){
        if(tiros[i]){
            var pt=tiros[i].offsetTop;
            pt-=velT;
            tiros[i].style.top=pt+"px";
            if(pt<0){
                tiros[i].remove();
            }
        }
    }
}

function ControleJogador(){
    pjy+=dirYjogador*Velocidade;
    pjx+=dirXjogador*Velocidade;
    Jogador.style.top=pjy+"px";
    Jogador.style.left=pjx+"px";
}

function GameLoop(){
    if(Jogo){//FUNÇÕES DE CONTROLE
        ControleJogador();
        controleTiros();
    }
    frame=requestAnimationFrame(GameLoop);
}

function inicia(){
    Jogo=true;
    //Inicio de Tela
    TamTelaH=window.innerHeight;
    TamTelaW=window.innerWidth;
    //Inicio do Jogador
    dirXjogador=dirYjogador=0;
    pjx=TamTelaW/2;
    pjy=TamTelaH/2;
    Velocidade=velT=5;
    Jogador=document.getElemenbteById("NaveJogo");
    Jogador.style.top=pjy+"px";
    Jogador.style.left=pjx+"px";

    GameLoop();
}

window.addEventListener("load", inicia);
document.addEventListener("keydown", TeclaDown);
document.addEventListener("keyup", TeclaUp);

