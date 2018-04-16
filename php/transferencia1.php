<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="UTF-8" />
		<title> Transferência </title>
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
		<h1>Faça sua transferência: </h1>
			
			<form action="transferencia2.php" method="post">
				
				<br/>
				<label> Conta recebedora: </label>
				<input type = "text" name = "conta" id = "conta" /><br />
			
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
