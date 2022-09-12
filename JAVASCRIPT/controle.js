// funções para abrir e fechar a div configurações

function abreconf() {
    document.getElementById("config-aba").style.width = "250px";
    document.getElementById("config-aba").style.borderLeft = "1px solid black";
    document.getElementById("config-aba").style.borderBottom = "1px solid black";
    document.getElementById("linksconf").style.opacity = 1;
}

function fechaconf() {
    document.getElementById("config-aba").style.width = "0px";
    document.getElementById("config-aba").style.borderLeft = "0px";
    document.getElementById("config-aba").style.borderBottom = "0px solid black";
    document.getElementById("linksconf").style.opacity = 0;
    document.getElementById("linksconf").style.transitionDelay = "0s";
}

  
