<?php

// inicia a session
session_start();

// coneção com BD:
include('../../database/conexao.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=0, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../src/css/main.css" >
    <title>Alterar usuario</title>
   

    <!-- nav bar: -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="mudar.php">Mudar nome</a>
        </li>
        <a class="nav-link" href="../../index.php">Sair</a>
    </ul>
    </nav>

<body>

<form class="box" action="../../database/update.php" method="POST"> 
            <h1> Cadastro</h1>
            
			<input name="usuario"  type="text"  placeholder="Usuário Antigo"> 
           
            <input name="user_novo"  type="text"  placeholder="Usuário Novo"> 
            
            <input type="submit" name="Login" value="Atualizar">
</form>
    
</body>

<style>


</style>

</html>