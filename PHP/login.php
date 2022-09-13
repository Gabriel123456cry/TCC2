<?php

session_start();

include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$logar = $connect->query("SELECT * FROM operador WHERE email_oper = '$email' AND senha = '$senha'");

while ($linha = mysqli_fetch_array($logar)) {
    $nivel_acess = $linha['nivel_acess'];
    $nome_oper = $linha['nome_oper'];

}

//número de variáveis que retornou do banco
$contagem = mysqli_num_rows($logar);


//nivel_acess = 1 (adm)
If ($contagem == 1 && $nivel_acess == 1) {
    $_SESSION['id_session'] = $id_oper;
    $_SESSION['email_session'] = $email;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['nivel_session'] = $nivel_acess;
    $_SESSION['nome_session'] = $nome_oper;

    header('location: Menu.php');
    exit;
}


//nivel_acess = 2 (membro)
elseif ($contagem == 1 && $nivel_acess == 2) {
    $_SESSION['id_session'] = $id_oper;
    $_SESSION['email_session'] = $email;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['nivel_session'] = $nivel_acess;
    $_SESSION['nome_session'] = $nome_oper;

    header('location: home2.php');
    exit;
}

//else {
 //   $_SESSION['id_session'] = $id_oper;
  //  $_SESSION['email_session'] = $email;
  //  $_SESSION['senha_session'] = $senha;
  //  $_SESSION['nivel_session'] = $nivel_acess;
   // $_SESSION['nome_session'] = $nome_oper;

  //  header('location: errorloginsenha.php');
   // exit;
//}


?>