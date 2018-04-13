<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="UTF-8" />
		<title> Bem-vinda! </title>
		<link href="../css/css.css" type="text/css" rel="stylesheet" />
	
	</head>
	
	<body>
	
<?php
	include "../inc/principal.inc";
		cabecalho();	
		menu();	
?>
		
		<h1 class="index"> 
			
				<?php 
				
					if(isset ($_SESSION["nome"])){
					
				?>
						Bem-vinda(o)
				<?php
						$nome = $_SESSION["nome"];
					
						echo $nome;
					}
					
					else{
				?>
					Bem-vinda(o)
				<?php
					}
				?>
				
		</h1>
		
		<?php
			
			rodape();
			
		?>
	</body>

</html>
