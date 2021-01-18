<?php
// Sessão
session_start();
// Conexão
require_once 'conexao.php';

if(isset($_POST['btn-deletar-medico'])):
	
	$id = mysqli_escape_string($conecta, $_POST['id']);

	$sql = "DELETE FROM medicos WHERE id = '$id'";

	if(mysqli_query($conecta, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: ../index.php');
	endif;
endif;