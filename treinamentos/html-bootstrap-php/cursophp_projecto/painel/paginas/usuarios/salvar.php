<?php 

$tabela = 'usuarios';
require_once("../../../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$nivel = $_POST['nivel'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];
$senha_cripto = md5($senha);


$query = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = '$senha', senha_cripto = '$senha_cripto', nivel = 'Sim', ativo = 'Sim', telefone = :telefone_sistema, Data = curDate(), endereco = :endereco ");


$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone_sistema", "$telefone");
$query->bindValue(":endereco", "$endereco");
$query->bindValue(":senha", "$senha");
$query->execute();


?>