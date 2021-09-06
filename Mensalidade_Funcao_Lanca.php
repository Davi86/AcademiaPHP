<?php  
	require('conexao_db.php');



	$aluno = $_POST['aluno'];
	$plano = $_POST['plano'];
	$valor = $_POST['valor'];
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];


	$sql = "INSERT INTO mensalidade(aluno,plano,valor,dia,mes,ano,pago) VALUES ('$aluno','$plano','$valor','$dia','$mes','$ano','Não');";

	if(mysqli_query($conexao_bd,$sql)){
		?>
		<script>
			alert('Mensalidade Lançada com Sucesso!');
			window.location.href='Inicio.php';
		</script>
		<?php
	}else{
		?>
		<script>
			alert('Cadastro Inválido!');
			window.location.href='Cadastro_Funcao_Lanca.php';
		</script>
		<?php
	}


?>