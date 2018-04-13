<?php
	session_start();
	
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];
	
	if($nome != '' && $senha != ''){
	
		if(file_exists("../xml/clientes.xml")){
			
			$achou = 0;
			
			$xml = simplexml_load_file("../xml/clientes.xml");
			
			foreach( $xml->children() as $c ){
				
				$nomeXml = $c->nome;
				$senhaXml = $c->senha;
				
				if( ($nomeXml == $nome) && ($senhaXml == $senha) ){
					
					$_SESSION["nome"] = $nome;
					$_SESSION["senha"] = $senha;
					
					$achou = 1;
					
					header("Location:index.php");
					
				}
				
			}
			
			if($achou == 0){
				
				header("Location:erro_login.php");
				
			}
			
		}
	}
	else{
		header("Location:form_login1.php");
	}
?>