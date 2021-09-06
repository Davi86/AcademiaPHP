<?php 

	include('conexao_db.php');
	$nome = $_POST['nome'];
	$grupo = $_POST['grupo'];
	$obs = $_POST['obs'];


	$sql = "INSERT INTO exercicios(nome,grupo,obs) VALUES ('$nome','$grupo','$obs');";

	if(mysqli_query($conexao_bd,$sql)){
		?>
		<script>
			alert('Exercício cadastrado com Sucesso!');
			window.location.href='Inicio.php';
		</script>
		<?php
	}else{
		?>
		<script>
			alert('Cadastro Inválido!');
			window.location.href='Cadastro_Exercicios.php';
		</script>
		<?php
	}



 ?>