let massas = 0
let picole = 0 
let coberturas = 0
let trevinho = 0


function opnMassas(){



        document.getElementById("tableM").style.display = "grid";
        document.getElementById("tableP").style.display = "none";  
        document.getElementById("tableC").style.display = "none";
        document.getElementById("tableT").style.display = "none"; 

    
}

function opnPicoles(){
         
        document.getElementById("tableM").style.display = "none";
        document.getElementById("tableP").style.display = "grid";  
        document.getElementById("tableC").style.display = "none";
        document.getElementById("tableT").style.display = "none"; 
   
}


function opnCoberturas(){

        document.getElementById("tableM").style.display = "none";
        document.getElementById("tableP").style.display = "none"; 
        document.getElementById("tableC").style.display = "grid";
        document.getElementById("tableT").style.display = "none"; 
    
    
}

function opnTrevinho(){

        document.getElementById("tableM").style.display = "none";
        document.getElementById("tableP").style.display = "none"; 
        document.getElementById("tableC").style.display = "none";
        document.getElementById("tableT").style.display = "grid"; 
    
    
}
