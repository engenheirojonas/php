<?php 

	@session_start();
	require_once("conexao.php");

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$senha_cripto = md5($senha);

	$consult = $pdo->prepare("SELECT * from usuarios where email = :email and senha_cripto = :senha");

	$consult->bindValue(":email", "$usuario");
	$consult->bindValue(":senha", "$senha_cripto");
	$consult->execute();

	$res = $consult->fetchAll(PDO::FETCH_ASSOC);

	$linhas = @count($res);	

	if($linhas > 0){

			//verifica se o usuario esta ativo, caso nao esteja ele vai mostrar uma mensagem de alerta e vai redirecionar para a pagina de login
		if($res[0]['ativo'] != 'Sim'){
			echo '<script>window.alert("Seu acesso foi desativado!!")</script>'; 
			echo '<script>window.location="index.php"</script>';  
		}
		
		$_SESSION['nome'] = $res[0]['nome'];
		$_SESSION['id'] = $res[0]['id'];
		$_SESSION['nivel'] = $res[0]['nivel'];

		echo '<script>window.location="painel"</script>';
	} else {
		echo '<script>window.alert("Dados Incorretos!!")</script>'; 
		echo '<script>window.location="index.php"</script>';  
	}


 ?>


