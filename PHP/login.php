<?php

session_start();

require('conexao.php');

if(isset($_POST["email"]) && isset($_POST["senha"]) && $pdo != null){
    $query = $pdo->prepare("SELECT * FROM operador WHERE email_oper = ? AND senha = ?");
    $query->execute(array($_POST["email"], $_POST["senha"]));


    if($query->rowCount()){
    $linha = $query->fetch(PDO::FETCH_ASSOC);
    $nivel_acess = $linha['nivel_acess'];
    $nome_oper = $linha['nome_oper'];
    
    //nivel_acess = 1 (adm)
    if($query == 1 && $nivel_acess == 1) {
        $_SESSION['id_session'] = $id_oper;
        $_SESSION['email_session'] = $email;
        $_SESSION['senha_session'] = $senha;
        $_SESSION['nivel_session'] = $nivel_acess;
        $_SESSION['nome_session'] = $nome_oper;
    
        header('location: Menu.php');
        exit;
    
    
    //nivel_acess = 2 (membro)
    }elseif($query == 1 && $nivel_acess == 2) {
        $_SESSION['id_session'] = $id_oper;
        $_SESSION['email_session'] = $email;
        $_SESSION['senha_session'] = $senha;
        $_SESSION['nivel_session'] = $nivel_acess;
        $_SESSION['nome_session'] = $nome_oper;
    
        header('location: home2.php');
        exit;
    }

   
    }else{
    header("Location:erro.php");
    }
}else{
    header("Location: ../index.html");
    }

