<?php
session_start();
include "conect.php";
$email = $_POST['email'];
$senha = $_POST['senha'];

$login=$SQL->query("SELECT * FROM operador WHERE email='$email' 
AND senha='$senha'");


While ($translin = mysqli_fetch_array($login)){
    $email = $translin ['email'];
    $nome= $translin ['nome_ops']; 
    $id= $translin ['id_op']; 
    $senha= $translin ['senha']; 
    }

$_SESSION['nomes'] = $nome;
$_SESSION['emails'] = $email;
$_SESSION['id'] = $id;
$_SESSION['senha'] = $senha;
