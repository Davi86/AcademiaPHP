<?php  
	include("conexao_db.php");


	$nome = $_POST['nome'];
	$modalidade = $_POST['modalidade'];
	$professor = $_POST['professor'];


	$sql = "INSERT INTO turmas(nome,modalidade,professor) VALUES('$nome','$modalidade','$professor')";

	if (mysqli_query($conexao_bd,$sql)) 
	{
		?>
		<script>
			alert
			('Turma cadastrado com Sucesso!');
			window.location.href='Inicio.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert('Cadastro Inválido!');
			window.location.href='Cadastro_Turma.php';
		</script>
		<?php
	}


?>