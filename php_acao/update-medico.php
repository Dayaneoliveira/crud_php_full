<?php
// Sessão
session_start();
// Conexão
require_once 'conexao.php';

if(isset($_POST['btn-editar-medico'])):
	$id = mysqli_escape_string($conecta, $_POST['id']);
	$nome= mysqli_escape_string($conecta, $_POST['nome']);
	$CRM = mysqli_escape_string($conecta, $_POST['CRM']);
	$telefone= mysqli_escape_string($conecta, $_POST['telefone']);
	$especialidade = mysqli_escape_string($conecta, $_POST['especialidade']);



	$id = mysqli_escape_string($conecta, $_POST['id']);

	$sql = "UPDATE medicos SET id='$id', nome ='$nome', CRM ='$CRM', telefone='$telefone', especialidade='$especialidade' WHERE id = '$id'";
		

	if(mysqli_query($conecta, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;