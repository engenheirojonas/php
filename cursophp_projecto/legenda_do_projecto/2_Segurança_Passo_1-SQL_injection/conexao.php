<?php 
        //definir primeiramente o fuso horário
    date_default_timezone_set('Africa/Luanda');

        //dados conexão bd local
    $servidor = "localhost";
    $banco = "bd_projecto";
    $usuario = "root";  //root é um ambiente de teste, nao precisa de senha
    $senha = "";

        //a instruçao try serve para tratamento de erros
    try{
            //conexao com o banco de dados via "pdo" é a mais seguro mas temos tabem via "mysqli", mas é menos seguro
            //a variavel $pdo (que eu posso renomear tambem de $conexao) recebe a função "PDO" que por si carrega a conexao com o banco de dados
        $pdo = new PDO("mysql:host=$servidor;dbname=$banco; charset=utf8", $usuario, $senha);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(Exception $e){
        echo "Erro na conexão ao banco de dados! <br>" . $e;
        
            //para o projecto pronto faz assim, para nao mostrar a descripçao do erro
            /*  catch(Exception){
                echo "Erro na conexão ao banco de dados! <br>";
        */
    }
?>