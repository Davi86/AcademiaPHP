<!DOCTYPE html>
<?php  
		include('conexao_db.php');
		//Variável id_editar recebendo o ID da informação selecionado ao pressionar o botão EDITAR no arquivo lista.php via GET(pela URL do Browser).
		$id_editar = $_GET['editar_id'];
		$seleciona = mysqli_query($conexao_bd,"SELECT * FROM alunos WHERE id = $id_editar");
		$campo = mysqli_fetch_array($seleciona);
?>
<html lang="pt-br">
<head>
	<title>Cadastrar Aluno</title>
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

	<script>
			function isEmail(email_user){
				var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

				return regex.test(email_user);
			}
	</script>
	<style type="text/css">
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
		  -webkit-appearance: none; 
		  margin: 0; 
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $(".cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $(".rua").val("...");
                        $(".bairro").val("...");
                        $(".cidade").val("...");
                        $(".uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $(".rua").val(dados.logradouro);
                                $(".bairro").val(dados.bairro);
                                $(".cidade").val(dados.localidade);
                                $(".uf").val(dados.uf);
                                
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
	                    } //end if.
	                    else {
	                        //cep é inválido.
	                        limpa_formulário_cep();
	                        alert("Formato de CEP inválido.");
	                    }
		                } //end if.
		                else {
		                    //cep sem valor, limpa formulário.
		                    limpa_formulário_cep();
		                    alert('Algum Campo está Vazio, verifique se você preencheu tudo corretamente!')
		                }
	            });
	        });
	</script>
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
							<span class="card-title center white-text">EDITAR ALUNOS</span>
					</div>
				</div>
			</div>
		</div>
		<form method="post" action="Salvar_Edicao_Aluno.php">
		<div class="row">
			<div class="col s1"></div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">gesture</i>
							<input type="text" name="nome" id="autocomplete1" class="autocomplete white-text" value="<?= $campo['nome'] ?>">
							<label for="autocomplete1" class="white-text">Nome</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">exposure</i>
							<input type="number" max="120" name="idade" id="autocomplete2" class="autocomplete white-text" value="<?= $campo['idade'] ?>">
							<label for="autocomplete2" class="white-text">Idade</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div><!-- Fechamento da ROW -->

		<div class="row">
			<div class="col s1"></div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">email</i>
							<input type="email" name="email" id="autocomplete3" class="autocomplete validate white-text" value="<?= $campo['email'] ?>">
							<label for="autocomplete3" class="white-text">Email</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">phone</i>
							<input type="number" name="telefone" id="autocomplete5" class="autocomplete white-text" value="<?= $campo['telefone'] ?>">
							<label for="autocomplete5" class="white-text">Telefone</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div><!-- Fechamento da ROW -->
		<div class="row">
			<div class="col s1"></div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">public</i>
							<input type="number" name="cpf" id="autocomplete6" class="autocomplete white-text" value="<?= $campo['cpf'] ?>">
							<label for="autocomplete6" class="white-text">CPF</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">map</i>
							<input type="number" name="cep" id="autocomplete7" class="autocomplete cep white-text" value="<?= $campo['cep'] ?>">
							<label for="autocomplete7" class="white-text">CEP</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div><!-- Fechamento da ROW -->

		<div class="row">
			<div class="col s1"></div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">streetview</i>
							<input type="text" name="rua" id="autocomplete8" class="autocomplete rua white-text" value="<?= $campo['rua'] ?>">
							<label for="autocomplete8" class="white-text">Rua</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">looks_one</i>
							<input type="number" name="numero" id="autocomplete9" class="autocomplete white-text" value="<?= $campo['numero'] ?>">
							<label for="autocomplete9" class="white-text">Número</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div><!-- Fechamento da ROW -->

		<div class="row">
			<div class="col s1"></div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">home</i>
							<input type="text" name="bairro" id="autocomplete10" class="autocomplete bairro white-text" value="<?= $campo['bairro'] ?>">
							<label for="autocomplete10" class="white-text">Bairro</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">location_city</i>
							<input type="text" name="cidade" id="autocomplete11" class="autocomplete cidade white-text" value="<?= $campo['cidade'] ?>">
							<label for="autocomplete11" class="white-text">Cidade</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div><!-- Fechamento da ROW -->


		<div class="row">
			<div class="col s1"></div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">event</i>
							<input type="text" name="" class="datepicker white-text" id="autocomplete12">
							<label for="autocomplete12" class="white-text">Data de nascimento</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">flag</i>
							<input type="text" name="uf" class="autocomplete uf white-text" value="<?= $campo['uf'] ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="col s1"></div>
		</div><!-- Fechamento da ROW -->

		<div class="row">	
			<div class="col s1"></div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">gradient</i>
							<select multiple name="turma">
							    <option disabled selected class="white-text"><?= $campo['turma'] ?></option>
							   <?php 
								$sql = "SELECT nome FROM turmas";
								$resultado_turmas = mysqli_query($conexao_bd,$sql);
								while ($nome = mysqli_fetch_assoc($resultado_turmas)) 
								{ ?>
									<option>
										<?php echo $nome['nome']; ?>
									</option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col s5">
				<div class="card grey darken-4">
					<div class="card-content">
						<div class="input-field">
							<i class="material-icons prefix white-text">functions</i>
							<select type="text" name="plano">
								<option class="white-text"><?= $campo['plano'] ?></option>
								<?php 
									$sql = "SELECT nome FROM planos";
									$planos = mysqli_query($conexao_bd,$sql);
									while ($nome = mysqli_fetch_assoc($planos)) 
									{ ?>
										<option>
											<?php echo $nome['nome']; ?>
										</option>
									<?php } ?>
							</select>
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
					<input type="hidden" name="id" value="<?= $campo['id'] ?>">
					<input type="submit" value="Atualizar" class="btn grey darken-4">
				</center>
			</div>
			<div class="col s4"></div>
		</div>
		</form><!-- Fechamento do Formulário -->
	</div><!-- fechamento da section -->

	<script type="text/javascript">
		$(document).ready(function(){
		    $('.datepicker').datepicker();
		  });
	</script>

	<!-- Script do JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript">
		M.AutoInit();
	</script>

	</form>

</body>
</html>