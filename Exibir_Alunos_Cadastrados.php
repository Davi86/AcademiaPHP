<!DOCTYPE html>
<?php include ('conexao_db.php'); ?>
<html lang="pt-br">
<head>
	<title>Alunos Cadastrados</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
	<!--Import Google Icon Font-->
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<!--Let browser know website is optimized for mobile-->
   		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Link jQuery -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
</head>
<body class="grey lighten-1">

	<?php
		require 'Cabecalho.html';
	?>

	<div class="section">
		<div class="row">
			<div class="col s1"></div>
			<div class="col s10">
				<div class="card amber" style="padding: 2px;">
					<div class="card-content grey darken-4">
							<span class="card-title center white-text">ALUNOS CADASTRADOS</span>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div>

		<div class="row">
			<div class="col s12">
				<table class="centered grey darken-4 white-text">
					<thead>
						<tr>
							<th>Nome</th>
							<th >Idade</th>
							<th>Telefone</th>
							<th>Email</th>
							<th>CPF</th>
							<th>CEP</th>
							<th>Rua</th>
							<th>Número</th>
							<th>Bairro</th>
							<th>Cidade</th>
							<th>UF</th>
							<th>Turma</th>
							<th>Plano</th>
							<th>Editar</th>
							<th>Excluir</th>
							<th>Lançar Mensalidade</th>
						</tr>
					</thead>
					<tbody>
						<?php  

						$sql = mysqli_query($conexao_bd,"SELECT * FROM alunos ORDER BY nome ASC");
						while ($campo = mysqli_fetch_array($sql)) 
						{ ?>
							<tr>
								<td><?= $campo['nome'] ?></td>
								<td><?= $campo['idade'] ?></td>
								<td><?= $campo['telefone'] ?> </td>
								<td><?= $campo['email'] ?></td>
								<td><?= $campo['cpf'] ?></td>
								<td><?= $campo['cep'] ?></td>
								<td><?= $campo['rua'] ?></td>
								<td><?= $campo['numero'] ?></td>
								<td><?= $campo['bairro'] ?></td>
								<td><?= $campo['cidade'] ?></td>
								<td><?= $campo['uf'] ?></td>
								<td><?= $campo['turma'] ?></td>
								<td><?= $campo['plano'] ?></td>

								<td>
									<a href="Editar_Aluno.php?editar_id= <?= $campo['id'] ?>">
										<button class="btn-small amber black-text"><b>Editar</b></button>
									</a>
								</td>
								
								<td>
									<a href="Excluir_Aluno.php?excluir_id= <?= $campo['id'] ?>">
										<button class="btn-small amber black-text"><b>Excluir</b></button>
									</a>
								</td>


								<td>
									<a href="Mensalidade_Aluno.php?mensalidade_id= <?= $campo['id'] ?>">
										<button class="btn-small amber black-text"><b>Lançar Mensalidade</b></button>
									</a>
								</td>


							</tr>
						<?php } ?>	
					</tbody>
				</table>
			</div>
		</div>
	</div><!-- Fechamento Section -->

</body>
</html>