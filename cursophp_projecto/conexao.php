<?php 
        //definir primeiramente o fuso horário
    date_default_timezone_set('Africa/Luanda');

        //dados conexão bd local
    $servidor = "localhost";
    $banco = "bd_projecto";
    $usuario = "root";
    $senha = "";

    try{
        $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo "Erro na conexão ao banco de dados! <br>" . $e;
    }
?>