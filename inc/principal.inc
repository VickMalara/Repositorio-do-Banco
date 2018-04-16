<?php
	session_start();


	function cabecalho(){		
?>
		<header> 
			<p class="header"> BANCO DTVM </p>
		</header>	
<?php
	}
	
	
	function menu(){
		if(!isset ($_SESSION["nome"])){
			echo "<div class='link'>";
				echo '<p><a href = "form_cadastro1.php"> Cadastro </a></p>';
				echo '<p><a href = "form_login1.php"> Login </a></p>';
			echo "</div>";
		}
		else{
			echo "<div class='link'>";
				echo '<p id="saldo">Saldo: R$'. $_SESSION["saldo"] .'</p>';
				echo '<p><a href = "index.php"> Home </a></p>'; 
				echo '<p><a href = "deposito1.php"> Depósito </a></p>'; 
				echo '<p><a href = "saque1.php"> Saque </a></p>';
				echo '<p><a href = "transferencia1.php"> Transferência </a></p>';
				echo '<p><a href = "logout.php"> Logout </a></p>';
			echo "</div>";
		}	
	}
	
	function rodape(){
?>	
		<footer>
			</br>
			<p>Criado por: 
				<i>Danielli Teixeira</i> e 
				<i>Victória Malara</i> 
			</p>
			<p>Todos os direitos reservados &copy; </p></br>
			
		</footer>
<?php	
	}
?>
