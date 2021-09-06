<?php
	$conexao_bd = mysqli_connect('localhost','root','','academia');


	if(mysqli_connect_errno()){
		echo 'Erro ao conectar com o BD Academia'.mysqli_connect_error();
	}

	mysqli_set_charset($conexao_bd,'utf8');




?>