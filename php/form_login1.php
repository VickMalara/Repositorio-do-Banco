<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="UTF-8" />
		<title>Login</title>
		<link href="../css/css.css" type="text/css" rel="stylesheet" />
	
	</head>
	
	<body>
	
<?php
	include "../inc/principal.inc";
		cabecalho();
		menu();			
?>
			<div class="form">
				<h1>Entre!</h1>
			
				<legend id="msg">Entre com seus dados</legend>
				
				<form action="form_login2.php" method="post">
				
					<label>Nome:</label>
					<input type="text" id="nome" name="nome" required = "required" /><br />
				
					<label>Senha:</label>
					<input type="password" id="senha" name="senha" required = "required" /><br />
				
					<input type="submit" value="Logar" id="enviar" />
					<input type="reset" value="Limpar!" />
				
				</form>
			</div>
		<nav><p class="inicio"><a href = "form_cadastro1.php"> Cadastre-se </a></p/></nav>
		
<?php
	rodape();		
?>
	</body>

</html>
