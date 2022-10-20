<?php

include ('conexao.php');


//recebendo o que tá no post
$nome_oper = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel_acess = $_POST['nivel_acess'];

//count recebe sql que tá selecionando o cmapo email_oper do banco
$sql =  $pdo->prepare("SELECT * FROM operador WHERE email_oper = ?");
$sql -> bindValue(1, $email);
$sql ->execute();
$count = $sql->rowCount();

//if para verificar se o email já existe. Caso exista vai dar um alert
if($count > 0){
$alert = <<<EOT
<script type="text/javascript">
window.location.href = 'Cadastroope.php';
alert("Desculpa, esse email já existe!");
</script>
EOT;

  echo $alert;
  
}

//caso não exista, ele salvará os registros no banco e retornará para a página de cadastro
    else{
     $pdo -> query("INSERT INTO operador (nome_oper, email_oper, senha, nivel_acess, id_oper) VALUES ('$nome_oper', '$email', '$senha', '$nivel_acess', default)");
     header ("Location: Cadastroope.php");

    }


