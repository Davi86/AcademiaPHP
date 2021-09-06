<!DOCTYPE html>
<?php include ('conexao_db.php'); ?>
<html lang="pt-br">
<head>
	<title>Frequência</title>
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

		<style type="text/css">
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
		  -webkit-appearance: none; 
		  margin: 0; 
		}
	</style>
</head>
<body class="grey lighten-1">

	<?php
		require 'Cabecalho.html';
		$turma = $_POST['turma'];
	?>

	<div class="section">
		<div class="row">
			<div class="col s1"></div>
			<div class="col s10">
				<div class="card amber" style="padding: 2px;">
					<div class="card-content grey darken-4">
							<span class="card-title center white-text">FREQUÊNCIA</span>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div>

		<?php
			$atual = new DateTime();
	        $especifica = new DateTime('1990-01-22');
	        $texto = new DateTime(' +1 month');

			$sql = "SELECT nome FROM turmas WHERE nome = '$turma'";
			$turmas = mysqli_query($conexao_bd,$sql);
			while ($campo = mysqli_fetch_assoc($turmas))
			{

		?>
		<div class="row">
			<div class="col s1"></div>
			<div class="col s10">
				<div class="card grey darken-4 center-align">
					<div class="card-content">
						<div class="input-field" style="display: inline-block;">
							<i class="material-icons prefix white-text">gradient</i>
							<input type="text" id="autocomplete1" class="autocomplete white-text" value="<?= $campo['nome'] ?>">
							<label for="autocomplete1" class="white-text">Turma</label>
						</div>
						<div class="input-field" style="display: inline-block;">
							<i class="material-icons prefix white-text">event</i>
							<input type="text" name="date" class="datepicker white-text" id="autocomplete12">
							<label for="autocomplete12" class="white-text">Data</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div>

		<?php } ?>
		<div class="row">
			<style>
				input{
					color: white;
				}
			</style>
			<div class="col s12">
				<table class="centered grey darken-4 white-text">
					<thead>
						<tr>
							<th>Número</th>
							<th style="border-right: 1px solid grey;padding: 2px;">Nome</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>6</th>
							<th>7</th>
							<th>8</th>
							<th>9</th>
							<th>10</th>
							<th>11</th>
							<th>12</th>
							<th>13</th>
							<th>14</th>
							<th>15</th>
							<th>16</th>
							<th>17</th>
							<th>18</th>
							<th>19</th>
							<th>20</th>
							<th>21</th>
							<th>22</th>
							<th>23</th>
							<th>24</th>
							<th>25</th>
							<th>26</th>
							<th>27</th>
							<th>28</th>
							<th>29</th>
							<th>30</th>
							<th>31</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$sql = mysqli_query($conexao_bd,"SELECT * FROM alunos ORDER BY nome ASC");
						while ($campo = mysqli_fetch_array($sql)) 
						{ ?>
							<!--<?php $x++ ?>-->
							<tr>
								<td type="number" name="numero"><?= $x ?></td>
								<td style="width: 80px;"><?= $campo['nome'] ?></td>
								<td style="cursor: pointer;width: 50px; background-color: grey; border: 1px solid black;" class="campo" id="freq">
								</td>
								<td style="cursor: pointer;width: 50px; background-color: grey; border: 1px solid black;" class="campo" id="freq">
								</td>
								<td style="cursor: pointer;width: 50px; background-color: grey; border: 1px solid black;" class="campo" id="freq">
								</td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
								<td><input type="number" name="frequencia"></td>
							</tr>
						<?php } ?>	
					</tbody>
				</table>
			</div>
		</div>
	</div><!-- Fechamento Section -->


	<script type="text/javascript">
		$(document).ready(function(){
			$cor = "grey";
			$(".campo").click(function(){
				if ($cor == "grey"){
					$("#freq").css("background-color", "yellow");
					$cor = "yellow";
				}else{
					$("#freq").css("background-color", "grey");
					$cor = "grey";
				}
        	});

		    $('.datepicker').datepicker();
		  });
	</script>

	<!-- Script do JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript">
		M.AutoInit();
	</script>

</body>
</html>