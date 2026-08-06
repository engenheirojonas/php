<?php 

    @session_start();

        //pode ser com nome ['nome']
    if (@$_SESSION ['id'] == "") {
        //echo 'Você não tem permissão para acessar esta página! Não está logado no sistema, faça login para acessar o sistema.';
        echo '<script>window.location="../index.php"</script>';
        exit();
    }

?>