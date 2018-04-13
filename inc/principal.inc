<?php
	session_start();


	function cabecalho(){		
?>
		<header> 
			<p> BANCO DTVM </p>
		</header>	
<?php
	}
	
	
	function menu(){
		if(!isset ($_SESSION["nome"])){
			echo '<a href = "form_cadastro1.php"> Cadastro </a> &nbsp;&nbsp; | &nbsp;&nbsp;';
			echo '<a href = "form_login1.php"> Login </a> &nbsp;&nbsp; &nbsp;&nbsp;';
		}
		else{
			echo '<a href = "saque1.php"> Saque </a> &nbsp;&nbsp; | &nbsp;&nbsp;'; 
			echo '<a href = "deposito1.php"> Depósito </a> &nbsp;&nbsp; | &nbsp;&nbsp;';
			echo '<a href = "transferencia1.php"> Transferência </a> &nbsp;&nbsp; | &nbsp;&nbsp;';
			echo '<a href = "logout.php"> Logout </a>';
		}	
	}
	
	function rodape(){
?>	
		<footer>
		
			<p>Criado por: 
				<i>Danielli Teixeira</i> e 
				<i>Victória Malara</i> 
			</p>
			
			<p>Todos os direitos reservados &copy; </p>
		
		</footer>
<?php	
	}
?>