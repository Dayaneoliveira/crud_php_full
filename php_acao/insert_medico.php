<?php
// Sessão
session_start();
// Conexão
require_once 'conexao.php';
// Clear
function clear($input) {
	global $conecta;
	// sql
	$var = mysqli_escape_string($conecta, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar-medico'])):
	$id = clear($_POST['id']);
	$nome= clear($_POST['nome']);
	$CRM = clear($_POST['CRM']);
	$telefone = clear($_POST['telefone']);
	$especialidade = clear($_POST['especialidade']);


	$sql = "INSERT INTO medicos (id , nome, CRM, telefone, especialidade) VALUES ('$id ', '$nome', '$CRM', '$telefone','$especialidade')";

	if(mysqli_query($conecta, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;