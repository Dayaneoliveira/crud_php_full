# Dayane - Sistema de Clina em PHP

## Tecnologias utilizadas

- Linguagem PHP
- Banco de dados MySQL
- Framework Materize CSS

## Estrutura do projeto

`\pastas---------------------------------------------------------------------------`
	`\raiz`: Nesta pasta tem os comandos de select e filtros:
	
	 index.php: Arquivo principal que contém botões para as páginas de listagem:
	 indexmedico.php: Listagem de medicos
	 adicionarMedico.php: formulario para adicionar medicos
	 editarmedico.php: formulario para editar medicos
	 table.css: Responsividade aplicada a tabela da pagina medicos
	 crud: BD em sql, com tabelas criadas
	 

	 
	`\php_acao`: Nesta pasta está o arquivo `conexao.php`, responsável por acessar o banco de dados, nela também tem os DMLS, updtade e delete das páginas:
	
	insert-medico.php: Insere dados no banco;
	update-medico.php: Altera os dados no banco;
	delete-medico.php: Altera os dados no banco;
	
	
	`\include`: Nesta página os links para Materialize.css ocorrem.
	header.php: css do Materialize;
	footer.php: js do Materialize;
	
	
## Arquivo de conexão
	Neste exemplo, a conexão foi setada no arquivo conexao.php com as seguintes credenciais
	Usuário: root
	Senha: 
	(nao há senha)
	Banco: crud
	
## Executando a aplicação
	1. Colar diretório na pasta xampp - htdocs
	2. Ligar o xampp
	3. Checar se a senha e o usuário do banco estão corretos, para isso altere no arquivo confi.inc.php as variáveis do tópico anterior  ^ ## Arquivo de conexão
	4. Criar a tabela e o banco, contidos no arquivo crud.sql no MySQL
