<?php
// inicia a session
session_start();

// coneção com BD:
include('conexao.php');

// não deixar logar sem colocar o usuario e senha e te manda pro inicio
if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: ../index.php');
    exit();
}

// ele pega o usuario e senha armazenado no conxao php
// escap string é pra nao acontecer o SQL injection que é acessar o site por colocar um valor que permite acessar pelo input que muda o sql
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuario where nome_cliente = '{$usuario}' and senha_cliente = md5('{$senha}')";


// echo $query;exit;
// execução pelo db:
$result = mysqli_query($conexao, $query);

// quantas linhas retorna com o select
$row = mysqli_num_rows($result);

if ($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: ../pages/sucesso.php');
    exit();
}else{
//    header('Location: ../pages/erro.html');
echo($query);
}


?>