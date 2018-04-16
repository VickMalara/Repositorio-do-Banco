<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="UTF-8" />
			<title> Cadastro </title>
		<link href="../css/css.css" type="text/css" rel="stylesheet" />
	
	</head>
	
	<body>
	
<?php

	include "../inc/principal.inc";
	
		cabecalho();
			
		menu();
			
?>
	<div class="form">
		<h1>Cadastre-se</h1>
		
			<legend id="msg">Preencha o formulário de cadastro!</legend>
			
			<form action="form_cadastro2.php" method="post">
			
				<label> Nome: </label>
				<input type = "text" name = "nome" id = "nome" required = "required"/><br />
				
				<label> Senha: </label>
				<input type = "password" name = "senha" id = "senha" required = "required"/><br />
				
				<input class="inicio" type = "submit" value = "Enviar" id = "enviar"/>
				<input class="inicio" type = "reset" value = "Limpar" id = "limpar" />
			
			</form>
		</div>
		<nav><p class="inicio"><a href = "form_login1.php"> Faça o Login </a></p></nav>			
		
	
<?php

	rodape();
		
?>
	</body>
	
</html>
