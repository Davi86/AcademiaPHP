<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar Turma</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
							<span class="card-title center white-text">CADASTRO DA TURMA</span>
					</div>
				</div>
			</div>
		</div>

		<form method="post" action="Turma_Funcao.php">
		<div class="row">
			<div class="col s1"></div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">gesture</i>
							<input type="text" name="nome" id="autocomplete1" class="autocomplete white-text" required>
							<label for="autocomplete1" class="white-text">Nome</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">fitness_center</i>
							<input type="text" name="modalidade" id="autocomplete2" class="autocomplete white-text" required>
							<label for="autocomplete2" class="white-text">Modalidade</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div><!-- Fechamento da ROW -->

		<form method="post" action="Funcionario_Funcao.php">
		<div class="row">
			<div class="col s1"></div>
			<div class="col s10">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">perm_identity</i>
							<input type="text" name="professor" id="autocomplete4" class="autocomplete white-text" required>
							<label for="autocomplete4" class="white-text">Professor</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div><!-- Fechamento da ROW -->




		<div class="row">
			<div class="col s4"></div>
			<div class="col s4">
				<center>
					<input type="submit" value="Cadastrar" class="btn grey darken-4">
				</center>
			</div>
			<div class="col s4"></div>
		</div>



		</form><!-- Fechamento do Formul??rio -->
	</div><!-- fechamento da section -->

</body>
</html>