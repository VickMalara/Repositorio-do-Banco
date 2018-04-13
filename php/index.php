<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="UTF-8" />
		<title> Bem-vindo! </title>
		<link href="../css/css.css" type="text/css" rel="stylesheet" />
	
	</head>
	
	<body>
	
<?php
	include "../inc/principal.inc";
		cabecalho();	
		menu();	
?>
		
		<h1 class="principal"> 
			
				<?php 
				
					if(isset ($_SESSION["nome"])){
					
				?>
						Bem-vindo(a),
				<?php
						$nome = $_SESSION["nome"];
					
						echo $nome;
					}
					
					else{
				?>
					Bem-vindo(a)
				<?php
					}
				?>! 
				
		</h1>
		
		<?php
			
			rodape();
			
		?>
	</body>

</html>