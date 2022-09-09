let tamanho = 0

function abreconf() {
    document.getElementById("config-aba").style.width = "225px";
    
    tamanho = document.getElementById("config-aba").style.width
    
    if(mouseover = "225px"){
        setInterval(() => {
        document.getElementById("config-aba");
        addEventListener('mouseleave', fechaconf);

    }, 1000)
}

}

function fechaconf() {
    document.getElementById("config-aba").style.width = "0px";
    

}

