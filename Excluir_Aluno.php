<?php 
include('conexao_db.php');


$id_excluir = $_GET['excluir_id'];


mysqli_query($conexao_bd,"DELETE FROM alunos WHERE id = $id_excluir");

header("location:Exibir_Alunos_Cadastrados.php");

 ?>