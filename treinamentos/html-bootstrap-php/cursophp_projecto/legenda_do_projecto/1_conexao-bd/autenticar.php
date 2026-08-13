<?php 

		//iniciando a sessão do usuário quando estiver a entrar no arquivo autenticar.php, para que o usuário possa acessar as páginas do sistema, caso ele tenha digitado o email e senha corretos.
		//o arroba (@) é para suprimir os erros ou evitar as alertas que possam ocorrer, caso a sessão já tenha sido iniciada em outro arquivo, pois não é possível iniciar a sessão mais de uma vez.
	@session_start();
		
		//fazer requisição para o arquivo .php que permite a conexao com o banco de dados
	require_once("conexao.php");

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$senha_cripto = sha1($senha);


		//verificar se o usuário existe no banco de dados
			/**tipos de pdo
			 * 
			 * 					query
			 * $consult = $pdo->query("SELECT * from usuarios where email = '$email' and senha = '$senha'");
			 * 
			 * 	$res = $consult->fetchAll(PDO::FETCH_ASSOC);
			 * 	$linhas = @count($res);
			 * 
			 * o query é mais simples, mas não é seguro, pois permite SQL Injection, então o ideal é usar o prepare
			 * 
			 * 					prepare
			 * $consult = $pdo->prepare("SELECT * from usuarios where email = :email and senha = :senha");
			 * 
			 * 		:email é um parametro que será substituido pelo valor do campo email
			 */
	$consult = $pdo->prepare("SELECT * from usuarios where email = :email and senha = :senha");

		//interpolando os valores do email e senha nos parametros :email e :senha para evitar SQL Injection
	$consult->bindValue(":email", "$usuario");
	$consult->bindValue(":senha", "$senha");

		//executando a consulta no banco de dados
	$consult->execute();

	$res = $consult->fetchAll(PDO::FETCH_ASSOC);

		//o total de registros ou linhas que foram encontrados no banco de dados, com base na consulta feita acima que logo devera dar em 1 ou 0, pois só pode existir um usuário com o mesmo email e senha, caso exista mais de um, é porque tem algo errado no banco de dados. e se for 0 , é porque o usuário não existe no banco de dados.
		//o arroba (@) é para suprimir os erros ou evitar as alertas que possam ocorrer, caso a consulta não retorne nenhum registro, pois não é possível contar o número de registros de uma consulta que não retornou nenhum registro.
	$linhas = @count($res);	

		/**todas as vezes que eu quiser buscar dados no banco de dados, eu vou usar estas duas linhas principais
		 * 				//Sem filtro
		 * $consult = $pdo->query("SELECT * from usuarios");
		 * $res = $consult->fetchAll(PDO::FETCH_ASSOC);
		 * 				
		 * 				//Com filtro
		 * $consult = $pdo->query("SELECT * from usuarios where email = '$email' and senha = '$senha' ");
		 * $res = $consult->fetchAll(PDO::FETCH_ASSOC);
		*/

	if($linhas > 0){

		if($res[0]['ativo'] != 'Sim'){
			echo '<script>window.alert("Seu acesso foi desativado!!")</script>'; 
			echo '<script>window.location="index.php"</script>';  
		}

			//para recuperar os dados do banco de dados e visualizar na tela, eu uso o array $res, que é um array associativo, onde cada posição do array é um registro do banco de dados, e cada registro é um array associativo, onde cada posição do array é um campo do registro.
				/**
				 * 		$nome = $res[0]['nome'];
				 * 		$id = $res[0]['id'];
				 * 		$nivel = $res[0]['nivel'];
				 * 
				 * 			//isso mostrara o nivel do usuário 
				 * 				que está logado no sistema, que 
				 * 			pode ser "Administrador" ou 
				 * 			"Usuário" nesta mesma pagina do 
				 * 				arquivo autenticar.php, ou seja, 
				 * 				o usuário que está logado no 
				 * 				sistema, poderá ver o seu nivel 
				 * 				de acesso.
				 * 		echo $nivel;
				 * 
				 * 			//nao esqueça de colocar o exit()
				 *				para que o script pare de
				 *				executar, caso contrário, ele 
				 *				continuará executando e poderá 
				 *				dar erro. ou prosseguir para a 
				 *				próxima linha de código.
				 * 		exit();	
				 * 
				 * 
				 */

			//usamos esta forma para nao perdermos os dados do usuário que está logado no sistema, pois se o usuário fechar o navegador, ele perderá os dados do usuário que está logado no sistema, então usamos a sessão para armazenar os dados do usuário que está logado no sistema, para que ele possa acessar as páginas do sistema sem precisar digitar o email e senha novamente.
			//assim poderemos chamar estes valores em qualquer página do sistema, pois a sessão é global, ou seja, ela é acessível em qualquer página do sistema.
		$_SESSION['nome'] = $res[0]['nome'];
		$_SESSION['id'] = $res[0]['id'];
		$_SESSION['nivel'] = $res[0]['nivel'];


			//o script do javascript "location" abaixo é para redirecionar o usuário para a página painel.php, caso ele tenha digitado o email e senha corretos.
		echo '<script>window.location="painel.php"</script>';
	} else {
		echo '<script>window.alert("Dados Incorretos!!")</script>'; 
		echo '<script>window.location="index.php"</script>';  
	}


 ?>


