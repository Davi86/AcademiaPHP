<!DOCTYPE html>
<?php include ('conexao_db.php'); ?>
<html lang="pt-br">
<head>
	<title>Mensalidades</title>
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

	<style type="text/css">
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
		  -webkit-appearance: none; 
		  margin: 0; 
		}
	</style>
<body class="grey">

	<?php
		require 'Cabecalho.html';
		$nome = $_POST['nome'];
		$somar = mysqli_query($conexao_bd,"SELECT SUM(valor) FROM mensalidade WHERE aluno = '$nome' and pago = 'Não'"); 
		$total = mysqli_fetch_assoc($somar);

		
	?>

	<div class="section">
		<div class="row">
			<div class="col s1"></div>
			<div class="col s10">
				<div class="card grey darken-4">
					<div class="card-content">
							<span class="card-title center white-text">MENSALIDADES DO <b style="font-size: 28px;"><?php echo "$nome"; ?></b></span>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div>

				<?php

			
					$sql = mysqli_query($conexao_bd,"SELECT * FROM alunos WHERE nome = '$nome'");
					while ($campo = mysqli_fetch_array($sql))
				{ ?>
			<div class="row">
				<div class="col s1"></div>
				<div class="col s10">
					<div class="card grey darken-4">
						<div class="card-content">
							<div class="input-field" style="width: 80px;display: inline-block;">
								<i class="material-icons prefix white-text">gesture</i>
								<input type="text" name="id" class="autocomplete white-text"value="<?= $campo['id'] ?>">
								<label>ID</label>
							</div>
							<div class="input-field" style="width: 250px;display: inline-block;">
								<i class="material-icons prefix white-text">gesture</i>
								<input type="text" name="nome" id="autocomplete2" class="autocomplete white-text"  value="<?= $campo['nome'] ?>">
								<label>Nome</label>
							</div>
							<div class="input-field" style="width: 150px;display: inline-block;">
								<i class="material-icons prefix white-text">gesture</i>
								<input type="text" name="debito" id="autocomplete3" class="autocomplete white-text" value="<?= $total['SUM(valor)'] ?>" >
								<label>Débito</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col s1"></div>
			</div>
			<?php } ?>
		</form>

		<div class="row">
			<div class="col s1"></div>
			<div class="col s10">
				<table class="centered grey darken-4 white-text">
					<thead>
						<tr>
							<th>Código</th>
							<th>Aluno</th>
							<th>Plano</th>
							<th>Data de Lançamento</th>
							<th>Valor</th>
							<th>Pago</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$plano = mysqli_query($conexao_bd,"SELECT * FROM mensalidade WHERE aluno = '$nome'");
						while($campo = mysqli_fetch_array($plano))
						{ ?>
							<tr>
								<td><?= $campo['id'] ?></td>
								<td><?= $nome ?></td>
								<td><?= $campo['plano'] ?> </td>
								<td><?= $campo['dia'] ?> / <?= $campo['mes'] ?> / <?= $campo['ano'] ?></td>
								
								<td>R$<?= $campo['valor'] ?></td>
								<td><?= $campo['pago'] ?></td>

							</tr>
						<?php } 
						?>	
					</tbody>
				</table>
			</div>
			<div class="col s1"></div>
		</div>

		<div class="row">
			<div class="col s1"></div>
			<div class="col s10">
				<div class="card grey darken-4">
					<div class="card-content">
						<center>
							<i class="material-icons prefix white-text">add_alert</i>
							<span style="font-size: 25px;color: white;">GERAR PAGAMENTO</span><br>
							<a class="btn black-text amber modal-trigger" href="#modal1"><b>PAGAR</b></a>
						</center>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div><!-- Fechamento da ROW -->

		<div id="modal1" class="modal modal-fixed-footer amber lighten-4">
			<div class="modal-content">
				<div class="grey darken-4 white-text center" style="font-size: 35px; border-radius: 20px;">
					<span>PAGAMENTO</span>
				</div><br>
				<form method="post" action="Pagar.php">
					<div class="card grey darken-3">
						<div class="card-content">
							<div class="input-field" style="width: 150px;display: inline-block;">
								<select type="text" name="id">
									<option class="white-text" required>Escolha o Id da conta</option>
										<?php 
											$sql = "SELECT id FROM mensalidade WHERE aluno = '$nome' AND pago = 'Não'";
											$conta = mysqli_query($conexao_bd,$sql);
											while ($nome = mysqli_fetch_assoc($conta)) 
											{ ?>
												<option><?php echo $nome['id']; ?></option>
											<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="card grey darken-3">
						<div class="card-content">
							<center>
								<div class="input-field">
									<input name="group6" type="radio" /><span class="white-text">Débito</span>
									<input name="group6" type="radio" /><span class="white-text">Crédito</span>
									<input name="group6" type="radio" /><span class="white-text">À Vista</span>
								</div>
							</center>
						</div>
					</div>
				<div class="">
					<center>
						<input href="#" class="btn modal-close purple" type="submit" value="pagar">
					</center>
				</div>
			</div>
				</form>
			<div class="col s1"></div>
		</div>
	</div><!-- Fechamento da SECTION -->

	<!-- Script do JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript">
		M.AutoInit();

		

	</script>