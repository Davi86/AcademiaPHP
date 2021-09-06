<?php 
	require 'conexao_db.php';

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$mensalidade = $_POST['mensalidade'];
	$modalidade = $_POST['modalidade'];

	$sql = "INSERT INTO planos(nome,descricao,mensalidade,modalidade) VALUES ('$nome','$descricao','$mensalidade','$modalidade')";

	if(mysqli_query($conexao_bd,$sql)){
		?>
		<script>
			alert('Plano cadastrado com Sucesso!');
			window.location.href='Inicio.php';
		</script>
		<?php
	}else{
		?>
		<script>
			alert('Cadastro Inválido!');
			window.location.href='Cadastro_Plano.php';
		</script>
		<?php
	}

 ?>