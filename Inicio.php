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

	<div class="row">
		<div class="col s3" style="padding: 30px;">
			<a href="Cadastro_Funcionario.php" class="hvr-hang black" style="text-decoration: none; padding-right: 10px;padding-left: 10px;">
				<div class="card amber" style="width: 220px; height: 280px;">
					<div class="card-content">
						<center>
						<img src="imagens/worker.png" class="responsive-img" style="width: 150px; height: 150px;"><br><br>
						<span class="black-text" style="font-size: 25px;font-family: 'Spicy Rice', cursive;"><b>CADASTRAR FUNCIONÁRIO</b></span>
						</center>
					</div>
				</div>
			</a>
		</div>

		<div class="col s3" style="padding: 30px;">
			<a href="Cadastro_Aluno.php" class="hvr-hang black" style="text-decoration: none; padding-right: 10px;padding-left: 10px;">
				<div class="card amber" style="width: 220px; height: 280px;">
					<div class="card-content">
						<center>
						<img src="imagens/student1.png" class="responsive-img" style="width: 150px; height: 150px;"><br><br>
						<span class="black-text" style="font-size: 25px;font-family: 'Spicy Rice', cursive;"><b>CADASTRAR ALUNO</b></span>
						</center>
					</div>
				</div>
			</a>
		</div>

		<div class="col s3" style="padding: 30px;">
			<a href="Cadastro_Turma.php" class="hvr-hang black" style="text-decoration: none; padding-right: 10px;padding-left: 10px;">
				<div class="card amber" style="width: 220px; height: 280px;">
					<div class="card-content">
						<center>
						<img src="imagens/turma.png" class="responsive-img" style="width: 150px; height: 150px;"><br><br>
						<span class="black-text" style="font-size: 25px;font-family: 'Spicy Rice', cursive;"><b>CADASTRAR TURMA</b></span>
						</center>
					</div>
				</div>
			</a>
		</div>

		<div class="col s3" style="padding: 30px;">
			<a href="Cadastro_Plano.php" class="hvr-hang black" style="text-decoration: none; padding-right: 10px;padding-left: 10px;">
				<div class="card amber" style="width: 220px; height: 280px;">
					<div class="card-content">
						<center>
						<img src="imagens/plan.png" class="responsive-img" style="width: 150px; height: 150px;"><br><br>
						<span class="black-text" style="font-size: 25px;font-family: 'Spicy Rice', cursive;"><b>CADASTRAR PLANO</b></span>
						</center>
					</div>
				</div>
			</a>
		</div>

	</div><!-- Fechamento da ROW -->

	<div class="row">

		<div class="col s3" style="padding: 30px;">
			<a href="Cadastro_Muscular.php" class="hvr-hang black" style="text-decoration: none; padding-right: 10px;padding-left: 10px;">
				<div class="card amber" style="width: 220px; height: 280px;">
					<div class="card-content">
						<center>
						<img src="imagens/muscles.png" class="responsive-img" style="width: 130px; height: 130px;"><br><br>
						<span class="black-text" style="font-size: 20px;font-family: 'Spicy Rice', cursive;"><b>CADASTRAR GRUPOS MUSCULARES</b></span>
						</center>
					</div>
				</div>
			</a>
		</div>

		<div class="col s3" style="padding: 30px;">
			<a href="Cadastro_Exercicios.php" class="hvr-hang black" style="text-decoration: none; padding-right: 10px;padding-left: 10px;">
				<div class="card amber" style="width: 220px; height: 280px;">
					<div class="card-content">
						<center>
						<img src="imagens/barbell.png" class="responsive-img" style="width: 150px; height: 150px;"><br><br>
						<span class="black-text" style="font-size: 25px;font-family: 'Spicy Rice', cursive;"><b>CADASTRAR EXERCÍCIOS</b></span>
						</center>
					</div>
				</div>
			</a>
		</div>

		<div class="col s3" style="padding: 30px;">
			<a href="Cadastro_interessados.php" class="hvr-hang black" style="text-decoration: none; padding-right: 10px;padding-left: 10px;">
				<div class="card amber" style="width: 220px; height: 280px;">
					<div class="card-content">
						<center>
						<img src="imagens/customer.png" class="responsive-img" style="width: 150px; height: 150px;"><br><br>
						<span class="black-text" style="font-size: 25px;font-family: 'Spicy Rice', cursive;"><b>CADASTRAR INTERESSADOS</b></span>
						</center>
					</div>
				</div>
			</a>
		</div>
		
		<div class="col s3" style="padding: 30px;">
			<a href="Mensalidade.php" class="hvr-hang black" style="text-decoration: none; padding-right: 10px;padding-left: 10px;">
				<div class="card amber" style="width: 220px; height: 280px;">
					<div class="card-content">
						<center>
						<img src="imagens/give-money.png" class="responsive-img" style="width: 150px; height: 150px;"><br><br>
						<span class="black-text" style="font-size: 25px;font-family: 'Spicy Rice', cursive;"><b>MENSALIDADES</b></span>
						</center>
					</div>
				</div>
			</a>
		</div>
	</div>
	

	<!-- Script do JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript">
		M.AutoInit();
	</script>
</body>
</html>