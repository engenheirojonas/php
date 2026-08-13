<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <pre>
    <main>
        <?php

            /**OUTRAS SUPERGLOBAIS
         * 
         * $_COOKIE
         *      sao pequenas variaveis que servem para guardarem ficheiros temporariamente.
         * 
         * $_FILES
         *      consegue pegar os dados que estiverem dentro dum documento que fizemos upload ou estiver mandando arquivo para net
         * 
         * $_SESSIONS
         *      permite que variaveis de sessao ou variaveis que nao sao perdidas durante a navegaçao para nao serem perdidas.
         * 
         * $_ENV
         *      De environment, significa ambiente do servidor sao variaveis do ambiente do servidor.
         * 
         * $_SERVER
         * 
         * $GLOBAIS
         *      é a superglobal mais completa, ela mostra os dados de todas outras superglobais.
         */

            /**antes de usar superglobal cookie
             * permite que voce configure um cookie novo  
            * time() + 3600 quere dizer do momento atual mais uma(1) hora. quere dizer: 3600segundos igual a 1 hora
            */
        setcookie("dia-da-semana", "SEGUNDA", time() + 3600);


            //antes de usar surpglobal session
        session_start();
            //criar uma variavel de sessão
        $_SESSION["teste"] = "FUNCIONOU";

            
            
            echo "<h1>SuperGlobal GET</h1>";
                /**mostrar array na tela de get */
            var_dump($_GET);

            /**             URL
             * http://localhost/cursophp/php_013/superglobal.php
             */

            /**
             *              Query String
             * 
             * é uma solicitação
             *  é a url quando tem estes parametros
             *      http://localhost/cursophp/php_013/superglobal.php?nome=%22jonas%22&profissao=12
             * 
             */

            echo "<h1>SuperGlobal POST</h1>";
                /**mostrar array na tela de post */
            var_dump($_POST);
            
            
            echo "<h1>SuperGlobal REQUEST</h1>";
                /**mostrar array na tela de request */
            var_dump($_REQUEST);
            

            echo "<h1>SuperGlobal COOKIE</h1>";
            var_dump($_COOKIE);
            
            echo "<h1>SuperGlobal SESSION</h1>";
            var_dump($_SESSION);
            

                //mostra as informaçoes relativas ao ambiente do teu navegador ou pagina do teu navegador
            echo "<h1>SuperGlobal ENV</h1>";
            var_dump($_ENV);
                /* mas deves inserir isso
                      foreach (getenv() as $c => $v) {
                        echo "<br> $c -> $v";
                    }
                */
                
            echo "<h1>SuperGlobal SERVER</h1>";
            var_dump($_SERVER);
            
            
            echo "<h1>SuperGlobal GLOBALS</h1>";
            var_dump($GLOBALS);
        ?>
    </main>
    </pre>
</body>
</html>