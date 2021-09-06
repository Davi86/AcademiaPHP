<?php
	require 'conexao_db.php';

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if($usuario != "" && $senha!=""){
		$sql = "SELECT usuario FROM funcionarios WHERE usuario = '$usuario' AND senha = '$senha'";
		$res = mysqli_query($conexao_bd,$sql) or die(mysqli_error);
		$total = mysqli_num_rows($res);

		if($total > 0){
			?>
			<script>
				window.location.href="Inicio.php";
			</script>
			<?php
		}else{
			?>
			<script>
				alert('Usuário ou senha Inválidos!');
				window.location.href='Index.php';
			</script>
			<?php
		}
	}else{
		?>
		<script>
			alert('Preencha todos os campos!');
			window.location.href='Index.php';
		</script>
		<?php
	}
		

?>