<?php
	require 'conexao_db.php';

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$cargo = $_POST['cargo'];
	echo "$cep";

	$sql = "INSERT INTO funcionarios(cpf,idade,email,nome,telefone,cep,rua,bairro,cidade,uf,cargo,usuario,senha) Values ('$cpf','$idade','$email','$nome','$telefone','$cep','$rua','$bairro','$cidade','$uf','$cargo','$usuario','$senha')";

	if(mysqli_query($conexao_bd,$sql)){
		?>
		<script>
			alert('Funcionário cadastrado com Sucesso!');
			window.location.href='Inicio.php';
		</script>
		<?php
	}else{
		?>
		<script>
			alert('Cadastro Inválido!');
			window.location.href='Cadastro_Funcionario.php';
		</script>
		<?php
	}




?>