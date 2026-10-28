// Tocar Tecla POM
function tocaSomPom(){
    document.querySelector('#som_tecla_pom').play();
}

document.querySelector('.tecla_pom').onclick = tocaSomPom;

const listaDeTeclas = document.querySelectorAll('.tecla');

let contador = 0;

while(contador < listaDeTeclas.length){
    listaDeTeclas[contador].onclick = tocaSomPom;

    contador++;

    console.log(contador);
}



































/*
// Tocar Tecla CLAP
function tocaSomClap(){
    document.querySelector('#som_tecla_clap').play();
}

document.querySelector('.tecla_clap').onclick = tocaSomClap;

// Tocar Tecla TIM
function tocaSomTim(){
    document.querySelector('#som_tecla_tim').play();
}

document.querySelector('.tecla_tim').onclick = tocaSomTim;

// Tocar Tecla PUFF
function tocaSomPuff(){
    document.querySelector('#som_tecla_puff').play();
}

document.querySelector('.tecla_puff').onclick = tocaSomPuff;

// Tocar Tecla SPLASH
function tocaSomSplash(){
    document.querySelector('#som_tecla_splash').play();
}

document.querySelector('.tecla_splash').onclick = tocaSomSplash;

// Tocar Tecla TOIM
function tocaSomToim(){
    document.querySelector('#som_tecla_toim').play();
}

document.querySelector('.tecla_toim').onclick = tocaSomToim;

// Tocar Tecla PSH
function tocaSomPsh(){
    document.querySelector('#som_tecla_psh').play();
}

document.querySelector('.tecla_psh').onclick = tocaSomPsh;

// Tocar Tecla TIC
function tocaSomTic(){
    document.querySelector('#som_tecla_tic').play();
}

document.querySelector('.tecla_tic').onclick = tocaSomTic;

// Tocar Tecla TOM
function tocaSomTom(){
    document.querySelector('#som_tecla_tom').play();
}

document.querySelector('.tecla_tom').onclick = tocaSomTom;
*/