<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
                //podemos acessar os dados enviados pelo formulário através do array superglobal $_GET ou o $_POST, dependendo do método de envio do formulário.
                // mas o uso do $_REQUEST é mais abrangente, pois ele acessa os dados enviados por qualquer método, seja GET ou POST.
                //superglobal $_REQUEST = s_get + s_post + s_cookie

            /* Primeira forma de acessar os dados enviados pelo formulário

                var_dump($_REQUEST);
            */
            
                //  $nome é variavel do php que recebe o valor do campo 'nome' enviado pelo formulário.
                //'nome' é atributo name do input do formulário, que é o que identifica o campo.
            $nome = $_REQUEST['nome'] ?? "Sem nome"; 
            
            // operador de coalescência nula (??) para evitar erro caso o campo não seja enviado. 

            $sobrenome = $_REQUEST['snome'] ?? "És um desconhecido"; 
            
            echo "<p>Olá, <strong>$nome $sobrenome</strong>! Seja bem-vindo(a) ao meu site!</p>";
        ?>

            <!-- link para voltar para a página anterior -->

        <p><a href="javascript:history.back()">Voltar para pagina anterior</a></p>

            <!--ou então
                <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
            -->

    </main>

</body>
</html>