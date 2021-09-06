<?php  

	require('conexao_db.php');

	$id = $_POST['id'];


	$sql = "UPDATE mensalidade SET pago = 'Sim' WHERE id = '$id'";

	if(mysqli_query($conexao_bd,$sql)){
		?>
		<script>
			alert('Mensalidade paga com Sucesso!');
			window.location.href='Inicio.php';
		</script>
		<?php
	}else{
		?>
		<script>
			alert('Cadastro Inválido!');
			window.location.href='Mensalidade_Funcao.php';
		</script>
		<?php
	} 


?>