<?php

session_start();

// se a seção não estiver iniciada ele volta para a página inicial.
if (!$_SESSION['usuario']){
    header('Location:../index.php');
    exit();
}

?>