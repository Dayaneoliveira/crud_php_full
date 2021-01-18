<?php

// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo médico </h3>
		<form action="php_acao/insert_medico.php" method="POST">
		
			<div class="input-field col s12">
				<input type="text" name="id">
				<label for="nome">ID</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" name="nome" >
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="CRM" >
				<label for="nome">CRM</label>
			</div>

			<div class="input-field col s12">
				<input type="tel" name="telefone" >
				<label for="nome">Telefone</label>
			</div>

			<div class="input-field col s12">
				<select name="especialidade">
					<option> Ginecologia</option>
					<option> Dermatologia</option>
					<option> Fonoaudiologia</option>
					<option> Hematologia</option>
					<option> Endocrinologia</option>
					<option> Geriatria</option>
				</select>
				
			</div>
			

			

			<button type="submit" name="btn-cadastrar-medico" class="btn"> Cadastrar médico </button>
			<a href="indexmedico.php" class="btn green"> Lista de Médicos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
