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
		cabecalho();	
		menu();
		
		$nome = $_SESSION["nome"];
		$senha = $_SESSION["senha"];
		$saldo = $_POST["saldo"];
		
		if($saldo != ''){
			
			if(file_exists("../xml/clientes.xml")){
				
				$xml = simplexml_load_file("../xml/clientes.xml");
					
					foreach( $xml->children() as $c ){
							
							$nomeXml = $c->nome;
							$senhaXml = $c->senha;
							$saldoXml = (int)($c->saldo);
							
						if( ($nomeXml == $nome) && ($senhaXml == $senha) ){
						
							$c->saldo = $saldoXml + $saldo;
							$_SESSION["saldo"] = $saldoXml + $saldo;
		
						}
					}
					
					file_put_contents("../xml/clientes.xml",$xml-> asXML());
					header("Location:index.php");
			}
		}
		
		else{
			header("Location:erro_transferencia.php");
		}
			rodape();		
		?>
</body>

</html>