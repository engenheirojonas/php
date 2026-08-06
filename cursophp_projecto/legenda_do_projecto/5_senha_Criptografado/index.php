<?php
	//verificaçao para que quando nao houver um usuario no banco de dados ele criará um usuario padrao para que o sistema possa ser testado, caso nao haja um usuario no banco de dados, ele criará um usuario padrao.
	//se nao haver nenhum usuario cadastrado ou se as linhas forem 0, bastara atualizar o sistema.

	require_once("conexao.php");
	$consult = $pdo->query("SELECT * from usuarios");
	$res = $consult->fetchAll(PDO::FETCH_ASSOC);
	$linhas = @count($res);	

	$senha_sistema = "123";
    $senha_sistema_cripto = md5($senha_sistema); //criptografando a senha padrao do usuario padrao

	if($linhas == 0){
		/**
		 	* 	$consult->query("INSERT INTO usuarios (nome, email, senha, nivel, ativo) VALUES ('Administrador', 'admin@gmail.com', '123456', 'admin', 1)"); 

			*	Ou usando variaveis globais definidos desde o arquivo conexao.php, que é mais seguro, pois caso eu queira mudar o email e senha do usuario padrao, eu posso mudar apenas no arquivo conexao.php, sem precisar mudar em todos os arquivos que usam o usuario padrao.
		*/

		$pdo->query("INSERT INTO usuarios SET nome = '$nome_sistema', email = '$email_sistema', senha = '$senha_sistema', senha_cripto = '$senha_sistema_cripto', nivel = 'Administrador', ativo = 'Sim' ");
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo do Sistema</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/icone.png">  
</head>
<body>
     <div class="login">		
		<div class="form">
			<img src="img/logo.png" class="imagem">
			<form method="post" action="autenticar.php">
				<input type="email" name="usuario" placeholder="Seu Email" required>
				<input type="password" name="senha" placeholder="Senha" required>
				<button>Login</button>
			</form>	
			<br>
			<p class="recuperar"><a title="Clique para recupearar a senha" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Recuperar Senha</a></p>
		</div>
	</div>
</body>
</html>