<?php  

	include("conexao_db.php");


	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cpf = $_POST['cpf'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$turma = $_POST['turma'];
	$plano = $_POST['plano'];


	$sql = "INSERT INTO alunos (nome,idade,email,telefone,cpf,cep,rua,numero,bairro,cidade,uf,turma,plano) VALUES('$nome','$idade','$email','$telefone','$cpf','$cep','$rua','$numero','$bairro','$cidade','$uf','$turma','$plano')";

	if(mysqli_query($conexao_bd,$sql)){
		?>
		<script>
			alert('ALuno cadastrado com Sucesso!');
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