<?php

include('../database/verifica.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="src/css/erro.css">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400&display=swap" rel="stylesheet">

    <title>Erro!</title>
</head>
<body  class="fundo">
    <h1>Bem vindo, <?php echo $_SESSION['usuario']; ?> !!!</h1>
    <p>Aguarde e será redirecionado</p>
    <img onclick="inicio()" class="img" src="src/Handz/Purple-in-Basic2.png" alt="Mão apontando para o texto">
</body>

<script>
    setTimeout (function inicio(){
        console.log("Bom dia")
        window.location.href = 'dashboard/dashboard.php'
    }, 3000);

    
</script>

</html>