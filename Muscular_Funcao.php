<?php  
	include("conexao_db.php");


	$muscular = $_POST['muscular'];

	$sql = "INSERT INTO grupos (nome) VALUES ('$muscular')";


	if(mysqli_query($conexao_bd,$sql)){
		?>
		<script>
			alert('Grupo Muscular cadastrado com Sucesso!');
			window.location.href='Inicio.php';
		</script>
		<?php
	}else{
		?>
		<script>
			alert('Cadastro Inválido!');
			window.location.href='Cadastro_Grupo_Muscular.php';
		</script>
		<?php
	}
?>