let massas = 0
let picole = 0 
let coberturas = 0
let trevinho = 0


function opnMassas(){


        document.getElementById("massabtn").style.borderTop = "5px solid gray";
        document.getElementById("picolebtn").style.borderTop = "0px";
        document.getElementById("coberturabtn").style.borderTop = "0px";
        document.getElementById("trevinhobtn").style.borderTop = "0px";



        document.getElementById("tableM").style.display = "grid";
        document.getElementById("tableP").style.display = "none";  
        document.getElementById("tableC").style.display = "none";
        document.getElementById("tableT").style.display = "none"; 

    
}

function opnPicoles(){

        document.getElementById("massabtn").style.borderTop = "0px";
        document.getElementById("picolebtn").style.borderTop = "5px solid gray";
        document.getElementById("coberturabtn").style.borderTop = "0px";
        document.getElementById("trevinhobtn").style.borderTop = "0px";
         
        document.getElementById("tableM").style.display = "none";
        document.getElementById("tableP").style.display = "grid";  
        document.getElementById("tableC").style.display = "none";
        document.getElementById("tableT").style.display = "none"; 
   
}


function opnCoberturas(){

        document.getElementById("massabtn").style.borderTop = "0px";
        document.getElementById("picolebtn").style.borderTop = "0px";
        document.getElementById("coberturabtn").style.borderTop = "5px solid gray";
        document.getElementById("trevinhobtn").style.borderTop = "0px";

        document.getElementById("tableM").style.display = "none";
        document.getElementById("tableP").style.display = "none"; 
        document.getElementById("tableC").style.display = "grid";
        document.getElementById("tableT").style.display = "none"; 
    
    
}

function opnTrevinho(){

        document.getElementById("massabtn").style.borderTop = "0px";
        document.getElementById("picolebtn").style.borderTop = "0px";
        document.getElementById("coberturabtn").style.borderTop = "0px";
        document.getElementById("trevinhobtn").style.borderTop = "5px solid gray";

        document.getElementById("tableM").style.display = "none";
        document.getElementById("tableP").style.display = "none"; 
        document.getElementById("tableC").style.display = "none";
        document.getElementById("tableT").style.display = "grid"; 
    
    
}
