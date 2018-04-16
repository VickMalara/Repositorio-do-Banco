<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="UTF-8" />
		<title> Saque </title>
		<link href="../css/css.css" type="text/css" rel="stylesheet" />
	
	</head>
	
	<body class="deposito">
	
<?php
	include "../inc/principal.inc";		

		if(!isset ($_SESSION["nome"])){
			header("Location:index.php");
		}	
	
	cabecalho();
	menu();	
?>	
		<div class="form">
			<h1>Faça seu saque:</h1>

			<form action="saque2.php" method="post">
				
				</br></br>
				<label> Quantia: R$ </label>
				<input type = "number" name = "valor" id = "valor" step = "0.01" min = "0.01" /><br />
				
				<input type = "submit" value = "Enviar" id = "enviar"/>
				<input type = "reset" value = "Limpar" id = "limpar" />
			
			</form>
		</div>
	
<?php
	rodape();	
?>
	</body>
</html>
