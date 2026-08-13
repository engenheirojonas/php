<?php 
    
    /*
        //nunca esqueça de usar a função session_start() no início de cada arquivo que você deseja usar sessões, para que o usuário possa acessar as páginas do sistema, caso ele tenha digitado o email e senha corretos.
    @session_start();

        //exibir o valor dumaa variável de sessão, que foi criada no arquivo autenticar.php, para exibir o nome do usuário logado no sistema.
    echo $_SESSION ['nome'];

    */

        //vai chamar o arquivo verificar.php, que vai verificar se o usuário está logado no sistema, caso ele não esteja logado, ele será redirecionado para a página index.php, caso ele esteja logado, ele poderá acessar as páginas do sistema se os dados estiverem corretos.
    require_once("verificar.php");

        
?>

<a href="logout.php">Sair</a>