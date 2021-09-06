<?php  
	include('conexao_db.php');

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$obs = $_POST['obs'];


	$sql = "INSERT INTO interessados(nome,idade,email,telefone,obs) VALUES ('$nome','$idade','$email','$telefone','$obs')";


	if(mysqli_query($conexao_bd,$sql)){
		?>
		<script>
			alert('Interessado cadastrado com Sucesso!');
			window.location.href='Inicio.php';
		</script>
		<?php
	}else{
		?>
		<script>
			alert('Cadastro Inválido!');
			window.location.href='Cadastro_Aluno.php';
		</script>
		<?php
	}




?>