let contador = 0
let div = document.getElementById('esq');
let div2 = document.getElementById('add');
let nome = document.getElementById('nome');
let raca = document.getElementById('raca');
let vida = document.getElementById('vida');
let vida_atual = document.getElementById('vida');
let magia = document.getElementById('magia');
let fortalecimento = document.getElementById('fortalecimento');
let encantamento = document.getElementById('encantamento');
let elemento = document.getElementById('elemento');
var cor = 0
let selecionado = 0
var qualselc = 0
var busca = 0
var provisorio = 0

if (localStorage.dados){
    let dados = JSON.parse(localStorage.getItem("dados"))
    for(let i = 0; i<dados.length; i++){
        add(dados[i])
    }
    

}else{
    localStorage.setItem("dados", "[]")
}




function criar() {
    document.getElementById("calcdiv").style.display = "none";
    document.getElementById("newdiv").style.display = "inline-block";

}

function add(valores=undefined) {


    if (nome.value != "") {

        




        // alert("Adicionar personagem");
        

        if(valores==undefined){
         valores = {
            "contador": contador,
            "nome": nome.value,
            "raca": raca.value,
            "cor": cor, 
            "vida_atual": vida_atual.value, 
            "vida": vida.value, 
            "magia": magia.value, 
            "encantamento": encantamento.value, 
            "fortalecimento": fortalecimento.value, 
            "elemento": elemento.value
            
        }
        let dados = JSON.parse(localStorage.dados)
        dados.push(valores)
        localStorage.setItem("dados", JSON.stringify(dados))
 }


        
        

        let novoItem =
            `
         <Div tabindex="0" onclick="editar(${valores.contador})" class="perso" id="${valores.contador}">
    
                <img class="imgperso" src="css/dabi.jpg" width="100px">
                <div class="informacoes">

                    <div class="nomeraca">
                        <strong class="nomeinfo">${valores.nome}</strong>
                        <strong class="racainfo">${valores.raca}</strong>
                    </div>

                    <div class="lifeinfo">
                        <div class="health-bar" data-total="1000" data-value="1000">
                            <div class="bar" id="bar" style="background-color: ${cor};">
                                <div class="hit"></div>
                                <br><br>
                                <t>Vida atual:</t> <t id="vida1"> ${valores.vida_atual}</t> <br>
                                <t>Vida total: </t> <t id="vida2">${valores.vida}</t>
                                
                            </div>
                        </div>

                        <div class="powers">
                            Magia: ${valores.magia} <br>
                            Encantamento: ${valores.encantamento} <br>
                            Fortalecimento: ${valores.fortalecimento} <br>
                            Elemento: ${valores.elemento}
                        </div>

                    </div>
                </div>

            </Div>
            <div class="btndiv" id="add">
            <button onclick="criar()" class="add">+</button>
        </div>`
        div.innerHTML += novoItem;
        document.getElementById('add').remove()

        // alert(contador)
    }

}









function editar(id) {

    var card = document.getElementById(id)


    document.getElementById("calcdiv").style.display = "inline-block";
    document.getElementById("newdiv").style.display = "none";

    // document.getElementById("playerid").textContent = "Player " + id;

    document.getElementById("playerid").textContent = "Player: " + JSON.parse(localStorage.getItem("dados"))[id-1].nome








}


function editado(id) {
    var card = document.getElementById(id)



    document.getElementById("calcdiv").style.display = "none";
    document.getElementById("newdiv").style.display = "inline-block";


}

function focada() {
    document.getElementById("calcdiv").style.display = "inline-block";
    document.getElementById("newdiv").style.display = "none";

}

function fechar1() {

    document.getElementById("newdiv").style.display = "none";
}


function fechar2() {

    document.getElementById("calcdiv").style.display = "none";
}

function dano(vida_atual) {
    document.getElementById(vida_atual)
    alert(vida_atual.value)




}

