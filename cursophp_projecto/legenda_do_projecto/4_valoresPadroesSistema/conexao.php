<?php 
        //definir primeiramente o fuso horário
    date_default_timezone_set('Africa/Luanda');

        //dados conexão bd local
    $servidor = "localhost";
    $banco = "bd_projecto";
    $usuario = "root";  
    $senha = "";

    try{
        
        $pdo = new PDO("mysql:host=$servidor;dbname=$banco; charset=utf8", $usuario, $senha);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(Exception $e){
        echo "Erro na conexão ao banco de dados! <br>" . $e;
    }


//Variaveis globais
    $nome_sistema = "Sistema de Login";
    $email_sistema = "admin@gmail.com";
?>