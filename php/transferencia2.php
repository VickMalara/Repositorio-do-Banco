<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="UTF-8" />
		<title> Transferência </title>
		<link href="../css/css.css" type="text/css" rel="stylesheet" />
	
	</head>
	
	<body class="action">
		<?php
		
			include "../inc/principal.inc";
			cabecalho();	
			menu();	
			
			$conta = $_POST["conta"];
			$valor = $_POST["valor"];
			$nome = $_SESSION["nome"];
			$senha = $_SESSION["senha"];

			if($valor != '' && $conta != ''){
				
				if(file_exists("../xml/clientes.xml")){
					
					$xml = simplexml_load_file("../xml/clientes.xml");
					
					foreach($xml->children() as $p){
						
						$nomeXml = $p->nome;
						$senhaXml = $p->senha;
						$saldoXml = (int)($p->saldo);
						
						if(($nomeXml == $nome) && ($senhaXml == $senha)){
							if($saldoXml < $valor){
								header("Location:erro_transferencia.php");
							}
							else{
								$p->saldo = $saldoXml - $valor;
								$_SESSION["saldo"] = $saldoXml - $valor;
							}
						}
					}
					
					foreach($xml->children() as $p){
						$nomeXml = $p->nome;
						$senhaXml = $p->senha;
						$saldoXml = $p->saldo;
						
						if($nomeXml == $conta){
							$p->saldo = $saldoXml + $valor;
						}
					}
					
					file_put_contents("../xml/clientes.xml",$xml-> asXML());
					echo "</br><h2>Transferência efetuada com sucesso!</h2>";
		
				}
			}
			else{
				header("Location:transferencia1.php");
			}
			
		rodape();		
	?>
</body>

</html>
