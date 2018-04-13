<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="UTF-8" />
		<title> Saque </title>
		<link href="../css/css.css" type="text/css" rel="stylesheet" />
	
	</head>
	
	<body>
		<?php
		
		include "../inc/principal.inc";
		cabecalho();	
		menu();	
		
		$nome = $_SESSION["nome"];
		$senha = $_SESSION["senha"];
		$valor = $_POST["valor"];
		
		if($valor != ''){
			
			if(file_exists("../xml/clientes.xml")){
				
				$xml = simplexml_load_file("../xml/clientes.xml");
					
					foreach($xml->children() as $p){
					
					$nomeXml = $p->nome;
					$senhaXml = $p->senha;
					$saldoXml = $p->saldo;
					
					if(($nomeXml == $nome) && ($senhaXml == $senha)){
						if($saldoXml < $valor){
							header("Location:erro_transferencia.php");
						}
						else{
							$p->saldo = $saldoXml - $valor;
						}
					}
				}
					
					file_put_contents("../xml/clientes.xml",$xml-> asXML());
					echo "<br /> Saque efetuado com sucesso!";
			}
		}
		
		else{
			header("Location:erro_transferencia.php");
		}
		
		rodape();		
	?>
</body>

</html>