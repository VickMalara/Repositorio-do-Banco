<?php
	$igual = 0;

	$nome = $_POST["nome"];
	$senha = $_POST["senha"];
	$_SESSION["saldo"] = 0;
	$saldo = $_SESSION["saldo"];
	
	if($nome != '' && $senha != ''){
		if(!file_exists('../xml/clientes.xml') ){
			
			$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
			
				<clientes>
				
					<user>
					
						<nome>$nome</nome>
						<senha>$senha</senha>				
						<saldo>$saldo</saldo>
					</user>
				
				</clientes>
			
			";
			
			file_put_contents("../xml/clientes.xml", $xml);
			header("Location:form_login1.php");
			
		}
		else{
			
			$xml = simplexml_load_file("../xml/clientes.xml");
			
			foreach($xml->children() as $u){
				
				$uu = $u->nome;
				
				if(strtolower ($uu) == strtolower ($nome)){
					
					$igual++;
					
					break;
					
				}
				
			}
			
			if($igual == 0){
				
				$user = $xml -> addChild('user');
			
				$user -> addChild('nome', $nome);
				$user -> addChild('senha', $senha);
				$user -> addChild('saldo', $saldo);
				
			}
			else{
				header("Location:erro_cadastro.php");
			}
			
			file_put_contents("../xml/clientes.xml",$xml-> asXML());
			header("Location:form_login1.php");
		}
	}
?>