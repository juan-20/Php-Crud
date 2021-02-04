<?php

header("Content-type:text/html; charset=utf8");

?>

<!DOCTYPE HTML>
<html>
    <header>

      <meta charset="utf-8">
        <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="pages/src/css/main.css" >

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400&display=swap" rel="stylesheet">

    <title>Login</title>
    </header>
      
         <head>

         </head>
        
         <body>
         
            
        <form class="box" action="database/login.php" method="POST"> 
            <h1>Login</h1>

            <input name="usuario" type="text"  placeholder="Usuário"> 
            <input name="senha" type="password"  placeholder="Senha">
        
            <input type="submit" name="Login" value="Login">



            <a href="cad.php">
            <input name="Login" value="Cadastro">
            </a>

        </form>


         </body>

</html>

