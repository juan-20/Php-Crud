
<!DOCTYPE HTML>
<html>
    <header>

      <meta charset="utf-8">
        <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="pages/src/css/main.css" >

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400&display=swap" rel="stylesheet">

    <script type="text/javascript" src="pages/src/jquerry/js/jquery-3.3.1.min.js"></script>		
		<script type="text/javascript" src="pages/src/jquerry/js/jquery.mask.min.js"></script>


    <script>
		
		$(document).ready(function(){
			$("#telefone").mask("(00) 0000-0000")
			$("#dataNascimento").mask("0000-00-00")
		})
		</script>


    <title>Login</title>
    </header>
      
         <head>

         </head>
        
         <body>
         
            
        <form class="box" action="database/cadastro.php" method="POST"> 
            <h1> Cadastro</h1>
            
			<input name="usuario"      type="text"  placeholder="Usuário"> 
			<input name="email"        type="email"          placeholder="E-mail"> 
			<input name="dtNascimento" id="dataNascimento" type="text"    placeholder="Data de nascimento: AAAA-mm-dd" />
			<input name="telefone"   id="telefone"  type="text"        placeholder="Telefone" />
            <input name="senha"        type="password"       placeholder="Senha">

		
			<input type="submit" name="Login" value="Cadastro">
				
			
            <a href="index.php">
            <input name="Login" value="Login">
			</a>
            

        </form>


         </body>

</html>