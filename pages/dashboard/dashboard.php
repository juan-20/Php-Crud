<?php

// inicia a session
session_start();

// coneção com BD:
include('../../database/conexao.php');

$sql = "select * from usuario";

$result = mysqli_query($conexao, $sql);

$row = mysqli_fetch_assoc($result);

foreach($row as $cont){
    // echo "<h1>". $cont . "</h1>" ; 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<!-- navbar -->
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

<br>

<table class="table table-dark">
<!--    cabeca tabela -->
    <thead>
    <tr>
        <th>Informação da conta:</th>
        
        
    </tr>
    </thead>
<!--    corpo onde vai os valores-->

    <tbody>
<!--    imprimir dados da tabela-->
<?php if($cont) :
        foreach($row as $cont) : ?>

        <tr>
            <td><?php echo $cont; ?></td>
        
            <td>
               </td>
        </tr>
    <?php endforeach;?>
  
    <?php endif; ?>
    </tbody>

</table>

</body>
</html>