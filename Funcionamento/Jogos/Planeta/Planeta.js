var dirYjogador,dirXjogador,Jogador,Velocidade,pjx,pjy;
var velT;
var TamTelaW,TamTelaH;
var Jogo;
var frame;
var contBombas,painelContBombas,velB,tmpCriaBomba;
var bombasTotal;
var vidaPlaneta;

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
    if((tecla==38)||(tecla==40)){//cima
        dirYjogador=0;
    } 
    else if((tecla==37)||(tecla==39)){//Baixo
        dirXjogador=0;
    }
}
function criaBomba(){
    if(Jogo){
        var y=0;
        var x=Math.random()*TamTelaW;
        var bomba=document.createElement("div");
        var att1=document.createAttribute("class");
        var att2=document.createAttribute("style");
        att1.value="bomba";
        att2.value="top:"+y+"px;left:"+x+"px";
        bomba.setAttributeNode(att1);
        bomba.setAttributeNode(att2);
        document.body.appendChild(bomba);
        contBombas--;
    }
}
function controlaBomba(){
    bombasTotal=document.getElementsByClassName("bomba");
    var tam=bombasTotal.length;
    for(var i=0;i<tam;i++){
        if(bombasTotal[i]){
            var pi=bombasTotal[i].offsetTop;
            pi+=velB;
            bombasTotal[i].style.top=pi+"px";
            if(pi>TamTelaH){
                vidaPlaneta-=10;
                bombasTotal[i].remove();
            }
        }
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
        controlaBomba();
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

    //Controle das Bombas
    clearInterval(tmpCriaBomba);
    contBombas=150;
    velB=3;
    tmpCriaBomba=setInterval(criaBomba,1700);

    //Controles do Planeta
    vidaPlaneta=150;

    GameLoop();
}

window.addEventListener("load", inicia);
document.addEventListener("keydown", TeclaDown);
document.addEventListener("keyup", TeclaUp);

