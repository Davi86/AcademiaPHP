<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Index</title>
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
<body style="background-image: url(https://www.harpersbazaararabia.com/sites/default/files/images/2017/03/22/The-Gym-15.jpg); ">
	<div class="row">
		<div class="col s3"></div>
		<div class="col s6">
			<br><br><br><br><br><br><br>
		</div>
		<div class="col s3"></div>
	</div>
		<form action="1_Login.php" method="post">
		<div class="row">
			<div class="col s4"></div>
			<div class="col s4" style="border-radius: 40px;text-align: center;">
					<img src="imagens/eagles.png" style="width: 400px; border-radius: 100px;height: 380px; margin-bottom: -40px; margin-top: -150px;">
				<div class="card black" style="border-radius: 100px;">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">face</i>
							<input type="text" name="usuario" id="autocomplete1" class="autocomplete white-text" placeholder="Usuário">
						</div>
						<div class="input-field">
							<i class="material-icons prefix white-text">lock</i>
							<input type="password" name="senha" id="autocomplete2" class="white-text" placeholder="Senha">
						</div>
					</div>
					<div class="card-action amber" style="border-radius: 100px;">
						<center>
							<input type="submit" value="LOGAR" class="btn-large black">
						</center>
					</div>
				</div>
			</div>
		</div>
		<div class="col s4"></div>
		</form><!-- Fechamento da FORM -->
	</div><!-- Fechamento do CONTAINER -->
	




	<script type="text/javascript">
        M.AutoInit();
    </script>

</body>
</html>