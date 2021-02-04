<?php
// inicia a session
session_start();

// coneção com BD:
include('conexao.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['usuario'] ));
$nomenovo = mysqli_real_escape_string($conexao, trim($_POST['user_novo'] ));

// verifica se nada foi digitado
if (empty($_POST['usuario']) || empty($_POST['user_novo'])){
    header('Location: ../pages/sucesso.php');
}else{

// pesquisa se o nome existe
$query = "SELECT * FROM USUARIO WHERE nome_cliente ='$nome' ";


$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

// se existir passa na primeira parte do if
if ($row >= 1){
    // a linha que vai para o sql
    $sql = "UPDATE USUARIO SET NOME_CLIENTE = '$nomenovo'  WHERE NOME_CLIENTE = '$nome' ";
   
    // manda pro sql
    if ($conexao->query($sql) === true){
        $_SESSION['status_cadatro'] = true;
    }
    
    $conexao->close();
    header('Location: ../pages/dashboard/sucesso.php');
}else{
    header('Location: ../pages/dashboard/falha.php');
}
}

