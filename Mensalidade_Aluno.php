<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Tela Incial</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
	<!--Import Google Icon Font-->
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<!--Let browser know website is optimized for mobile-->
   		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   		<link href="https://fonts.googleapis.com/css?family=Fjalla+One | Anton | Narrow | Marvel | Raleway | Khand " rel="stylesheet">
   		<link href="https://fonts.googleapis.com/css?family=Passion+One|Montserrat" rel="stylesheet">

    <!-- Link jQuery -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
		<link href="Hover-master/css/hover.css" rel="stylesheet" media="all">

</head>
<body class="grey lighten-1">

	<?php
		require 'Cabecalho.html';
	?>

<?php  
		include('conexao_db.php');
		//Variável id_editar recebendo o ID da informação selecionado ao pressionar o botão EDITAR no arquivo lista.php via GET(pela URL do Browser).
		$id_editar = $_GET['mensalidade_id'];
		$seleciona = mysqli_query($conexao_bd,"SELECT * FROM alunos WHERE id = $id_editar");
		$campo = mysqli_fetch_array($seleciona);
		$plano = $campo['plano'];
		$sqli = "SELECT * FROM planos WHERE nome = '$plano';";
		$plano = mysqli_query($conexao_bd,$sqli);
		$valor = mysqli_fetch_assoc($plano);
		
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Lançar Mensalidade</title>
	<meta charset="utf-8">
</head>
<body>

	<div class="section">
		<div class="row">
			<div class="col s1"></div>
			<div class="col s10">
				<div class="card amber" style="padding: 2px;">
					<div class="card-content grey darken-4">
							<span class="card-title center white-text">LANÇAMENTO DAS MENSALIDADES</span>
					</div>
				</div>
			</div>
		</div>
		<form method="post" action="Mensalidade_Funcao_Lanca.php">
		<div class="row">
			<div class="col s1"></div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">gesture</i>
							<input type="text" class=" white-text" name="aluno" value="<?= $campo['nome'] ?>">
							<label for="autocomplete1" class="white-text">Aluno</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">gesture</i>
							<input class=" white-text" type="text" name="valor" value="<?= $campo['plano'] ?>" id="autocomplete3">
							<label for="autocomplete3" class="white-text">Plano</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div> 
		<div class="row">
			<div class="col s1"></div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">gesture</i>
							<input type="text" name="valor" class=" white-text" value="<?= $valor['mensalidade'] ?>" id="autocomplete3">
							<label for="autocomplete3" class="white-text">Mensalidade</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">event</i>
							<input type="text" name="" class="datepicker white-text" class=" white-text" id="autocomplete12">
							<label for="autocomplete12" class="white-text">Data de nascimento</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div>

		<div class="row">
			<div class="col s4"></div>
			<div class="col s4">
				<center>
					<input type="submit" value="Lançar" class="btn grey darken-4">
				</center>
			</div>
			<div class="col s4"></div>
		</div>
		</form><!-- Fechamanto do Form -->
	</div>

<!-- Script do JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript">
		M.AutoInit();
	</script>
</body>
</html>