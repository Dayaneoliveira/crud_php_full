<?php
// Conexão
include_once 'php_acao/conexao.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conecta, $_GET['id']);

	$sql = "SELECT * FROM medicos WHERE id = '$id'";
	$resultado = mysqli_query($conecta, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Médico </h3>
		<form action="php_acao/update-medico.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="CRM" value="<?php echo $dados['CRM'];?>" >
				<label for="nome">CRM</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="telefone" value="<?php echo $dados['telefone'];?>" >
				<label for="int">Telefone</label>
			</div>

			<div class="input-field col s12">
				<select name="especialidade"   >
				<option > <?php echo $dados['especialidade'];?></option>	
				<option> Ginecologia</option>
					<option> Dermatologia</option>
					<option> Fonoaudiologia</option>
					<option> Hematologia</option>
					<option> Endocrinologia</option>
					<option> Geriatria</option>
				</select>
				
			</div>
			

			<button type="submit" name="btn-editar-medico" class="btn"> Atualizar</button>
			<a href="indexmedico.php" class="btn green"> Lista de medicos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
