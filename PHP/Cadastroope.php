<?php

include ('verificarLogin.php');
  
If ($_SESSION['nivel_session'] != 1){
  session_destroy();
  header('location: ../index.html');
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <div id="fundo">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/CaUs.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Menu.css">
    <title>Cadastro operador </title>
</head>

<body>

    <div id="principal">

        <!--Conteúdo do Site-->
  
  
            <div class="cad">
                <div class="headcad">
             
                
              <img onclick="goBack()" src="../IMG/imgseta.png" alt="">
             
           
              <h1 id="titulo2">Cadastro de usuário</h1>
           
              
          
                 </div>
              <div id="conteudo">
              <form action="cadastrando_oper.php" method="POST" >
               
              <label>Nome do Funcionário</label>
              <input name="nome" autocomplete="off" class="input">
              <label>E-mail</label>
              <input name="email"type="email"  autocomplete="off" class="input">
              <label for="file" class="input2">
              <input type="file"  id="file" accept="image/*"/>
             Escolha a foto de perfil</label>
              <label>Senha</label>
              <input name="senha" type="password" autocomplete="off" class="input">
              <label >tipo de operador:</label>
                <div class="rdiv">
                <label for="tipo_oper" class="radio">Administrador</label><input type="radio" class="input" name="nivel_acess" value="1"> 
                <label for="tipo_oper" class="radio">Normal</label>
                <input type="radio"  class="input" name="nivel_acess" value="2">
                </div>
                
                <div id="number"> 
                <a href="cadcli.php">
                <img src="../IMG/1Vazio.png" alt="" id="nummargin" >
                </a>
                <img src="../IMG/2cheio.png" alt="">
                </div>
                <input  type="submit" value="Confirmar">
              
                </form>
              </div>
          </div>
  

   <!--Menu Vertical-->

   <div id="menuho">
    <div id="operador">
        <img src="../IMG/icon.png" id="icon" alt="">
        <h1 id="nome">Operador: Exemplo</h1>

    </div>


    



    <a class="sidebtn" href="MontarPedido.php"> <img class="imgbtn" src="../IMG/MP.png">
        <div class="MP"> Montar Pedido</div>
    </a>
    <a class="sidebtn" href="grafico.php"> <img class="imgbtn" src="../IMG/historico.png">
        <div href="#" class="MP">Histórico de Vendas</div>
    </a>
    <a class="sidebtn" href="ProdutosList.php"> <img class="imgbtn" src="../IMG/LP.png">
        <div href="#" class="MP">Lista de Produtos</div>
    </a>
    </a>
    <a class="sidebtn" href="listagemcli.php"> <img class="imgbtn" src="../IMG/LC.png">
        <div href="#" class="MP">Lista de
            Clientes</div>
    </a>
    <a class="sidebtn" href="logout.php"> <img class="imgbtn" src="../IMG/EX.png">
        <div href="#" class="MP">Sair</div><p id="sairadjustment"></p>
    </a>
    <img src="../IMG/trevoice.png" class="logo" alt="">

</div>

    </div>

    
    <script src="../JAVASCRIPT/controle.js"></script>
</body>