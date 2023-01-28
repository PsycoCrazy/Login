var dirYjogador,dirXjogador,Jogador,Velocidade,pjx,pjy;
var velT;
var TamTelaW,TamTelaH;
var Jogo;
var frames;
var contBombas,painelContBombas,velB,tmpCriaBomba;
var bombasTotal;
var vidaPlaneta,barraPlaneta;
var ie;
var telaMsg;

document.addEventListener("keydown", function(event) {
    if(event.key === "ArrowUp"){//cima
        dirYjogador=-1;
    }else if(event.key === "ArrowDown"){//Baixo
        dirYjogador=1;
    }
    if(event.key === "ArrowLeft"){//Esquerda
        dirXjogador=-1;
    }else if(event.key === "ArrowRight"){//Direita
        dirXjogador=1;
    }
});

document.addEventListener("keydown", function(event) {
    if(event.key === "Enter"){//Espaço | Disparo
      atira(pjx+ 17 ,pjy);
    if(event.key === "Enter"){
        console.log("Apertou Enter");
    }
    }
});
document.addEventListener("keyup", function(event) {
    if((event.key === "ArrowUp")||(event.key === "ArrowDown")){//cima
        dirYjogador=0;
    } 
    else if((event.key === "ArrowLeft")||(event.key === "ArrowRight")){//Baixo
        dirXjogador=0;
    }
});

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
/*                 criaExplosao(2,bombasTotal[i].offsetLeft,null) */
                bombasTotal[i].remove();
            }
        }
    }
}
function atira(x,y){
    var t=document.createElement("div");
    var att1=document.createAttribute("class");
    var att2=document.createAttribute("style");
    att1.value="tiroJog";
    att2.value="top:"+y+"px;left"+x+"px";
    t.setAttributeNode(att1);
    t.setAttributeNode(att2);
    document.body.appendChild(t);
}

function controleTiros(){
    var tiros=document.getElementsByClassName("tiroJog");
    var tam=tiros.length;
    for(var i=0;i<tam;i++){
        if(tiros[i]){
            var pt=tiros[i].offsetTop;
            pt-=velT;
            tiros[i].style.top=pt+"px";
            colisaoTiroBomba(tiros[i]);
            if(pt<0){
                tiros[i].remove();
            }
        }
    }
}

/* function colisaoTiroBomba(tiro){
    var tam=bombasTotal.length;
    for(var i=0;i<tam;i++){
        if(bombasTotal[i]){
            if(
                (
                    (tiro.offsetTop<=(bombasTotal[i].offsetTop+40))&&
                    ((tiro.offsetTop+6)>=(bombasTotal[i].offsetTop))
                )
                &&
                (
                    (tiro.offsetLeft<=(bombasTotal[i].offsetLeft+24))&&
                    ((tiro.offsetLeft+6)>=(bombasTotal[i].offsetLeft))
                )
            ){
                criaExplosao(1,bombasTotal[i].offsetLeft-25,bombasTotal[i].offsetTop)
                bombasTotal[i].remove();
                tiro.remove();
            }
        }
    }
} */

/* function criaExplosao(tipo,x,y){//Tipo 1=AR, 2=TERRA
    if(document.getElementById("explosao"+(ie-4))){
        document.getElementById("explosao"+(ie-4)).remove();
    }
    var explosao=document.createElement("div");
    var img=document.createElement("img");
    var som=document.createElement("audio");
    //atributos para a divd
    var att1=document.createAttribute("class");
    var att2=document.createAttribute("style");
    var att3=document.createAttribute("id");
    //atributo img
    var att4=document.createAttribute("src");
    //atributos para audio
    var att5=document.createAttribute("src");
    var att6=document.createAttribute("id");

    att3.value="explosao"+ie;
    if(tipo==1){
        att1.value="explosaoAr";
        att2.value="top:"+y+"px,left:"+x+"px";
        att4.value="destruido.png?"+new Date();
    } else{
        att1.value="explosaoChao";
        att2.value="top:"+(TamTelaH-57)+"px,left:"+(x-17)+"px";
        att4.value="destruido.png?"+new Date();
    }
    explosao.setAttributeNode(att1);
    explosao.setAttributeNode(att2);
    explosao.setAttributeNode(att3);
    img.setAttributeNode(att4);
    explosao.appendChild(img);
    document.body.appendChild(explosao);
    ie++;

} */

function ControleJogador(){
    pjy+=dirYjogador*Velocidade;
    pjx+=dirXjogador*Velocidade;
    Jogador.style.top=pjy+"px";
    Jogador.style.left=pjx+"px";
}

function gerenciaGame(){
    barraPlaneta.style.width=vidaPlaneta+"px";
    if(contBombas<=0){
        Jogo=false;
        clearInterval(tmpCriaBomba);
        telaMsg.style.backgroundImage="url('vitoria.png')"
        telaMsg.style.display="block";
    }
    if(vidaPlaneta<=0){
        Jogo=false;
        clearInterval(tmpCriaBomba);
        telaMsg.style.backgroundImage="url('derrota.png')"
        telaMsg.style.display="block";
    }
}

function GameLoop(){
    if(Jogo){//FUNÇÕES DE CONTROLE
        ControleJogador();
        controleTiros();
        controlaBomba();
        gerenciaGame();
    }
    frames=requestAnimationFrame(GameLoop);
}

/* function reinicia(){
    bombasTotal==document.getElementsByClassName("bomba");
    var tam=bombasTotal.length;
    for(var i=0;i<tam;i++){
        if(bombasTotal[i]){
            bombasTotal[i].remove();
        }
    }
    telaMsg.style.display="none";
    clearInterval(tmpCriaBomba);
    cancelAnimationFrame(frames);
    vidaPlaneta=300;
    pjx=TamTelaW/2;
    pjy=TamTelaH/2;
    Jogador.style.top=pjy+"px";
    Jogador.style.left=pjx+"px";
    contBombas=300;
    Jogo=true;
    tmpCriaBomba=setInterval(criaBomba,1700);
    GameLoop();
} */

function inicia(){
    Jogo=false;
    //Inicio de Tela
    TamTelaH=window.innerHeight;
    TamTelaW=window.innerWidth;
    //Inicio do Jogador
    dirXjogador=dirYjogador=0;
    pjx=TamTelaW/2;
    pjy=TamTelaH/2;
    Velocidade=velT=5;
    Jogador=document.getElementById("naveJog");
    Jogador.style.top=pjy+"px";
    Jogador.style.left=pjx+"px";

    //Controle das Bombas
    contBombas=150;
    velB=3;

    //Controles do Planeta
    vidaPlaneta=300;
    barraPlaneta=document.getElementById("barraPlaneta");
    barraPlaneta.style.width=vidaPlaneta+"px";

    //Controles de explosao
    ie=0;

    //Telas
    telaMsg=document.getElementById("telaMsg");
    telaMsg.style.display="block";
    document.getElementById("btnJogar").addEventListener("click", reinicia);
}

/* window.addEventListener("load", inicia); */