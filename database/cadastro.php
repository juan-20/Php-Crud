<?php
// inicia a session
session_start();

// coneção com BD:
include('conexao.php');


$nome = mysqli_real_escape_string($conexao, trim($_POST['usuario'] ));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$dt = mysqli_real_escape_string($conexao, trim($_POST['dtNascimento']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));



// colocando a data de string para date
$date = "SELECT CONVERT(date, '$dt');";

$sql = "select COUNT(*) nome_cliente from usuario where nome_cliente ='$nome' ";

$result = mysqli_query($conexao, $sql);

$row = mysqli_fetch_assoc($result);

foreach($row as $cont){
    echo $cont . '<br>';

}

// identifica se o user já existe
if ($cont >= 1 ){
    header('Location: ../pages/erro.html');
    exit;
}else{
    // instanciando o insert
    $sql = "INSERT INTO usuario (nome_cliente, email_cliente, telefone_cliente, senha_cliente, data_nasc)
     VALUES                     ('$nome','$email', '$telefone', '$senha', '$dt')";
    echo ($sql);
    
    header('Location: ../pages/sucessocad.php');
}

// insere a informação no bd
// login bem-sucedido
if ($conexao->query($sql) === true){
    $_SESSION['status_cadatro'] = true;
}

$conexao->close();



?>