<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="UTF-8" />
		<title> Depósito </title>
		<link href="../css/css.css" type="text/css" rel="stylesheet" />
	
	</head>
	
	<body>
	
<?php
	include "../inc/principal.inc";		

		if(!isset ($_SESSION["nome"])){
			header("Location:index.php");
		}	
	
	cabecalho();
	menu();	
?>	
		<div class="form">
			<h1>Deposite aqui:</h1>
		
		<form action="deposito2.php" method="post">
		
			<label> Quantia: R$ </label>
			<input type = "number" name = "saldo" id = "saldo" step = "0.01" min = "0.01" /><br />
			
			<input type = "submit" value = "Enviar" id = "enviar"/>
			<input type = "reset" value = "Limpar" id = "limpar" />
		
		</form>
		</div>
<?php
	rodape();	
?>
	</body>
</html>
