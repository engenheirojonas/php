<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios RectroAlimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <!--Formularios RectroAlimentado

                todo trabalho do html é feito num documento apenas com extensão .php
        
        -->
    
    <?php 
            /** capturando os dados do formulario RectroAlimentado */
        $val1 = $_GET['v1'] ?? 0;
        $val2 = $_GET['v2'] ?? 0;
    
    ?>

    <main>
        <h1>Somador de Valores</h1>
            <!--
                Mandar dados no mesmo formulario do ficheiro php
                
                presta  atençao no atributo action da tag form deste documento. é isso que permite fazer funcionar o formulario rectroalimentado

                neste caso vamos usar a short tag do php considerando o comando echo que sera:
            -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="v1">Valor 1:</label>

                    <!--o valor do atributo value mantem o mesmo valor(digitado) enviado apos o envio do formulario-->
                <Input type="number" name="v1" id="v1" value="<?= $val1?>">
                <label for="v2">Valor 2:</label>
                <Input type="number" name="v2" id="v2" value="<?=$val2?>">
                <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado da Soma</h2>
            <?php
                $soma =  $val1 + $val2;
                print "A soma entre os valores $val1 e $val2 é <strong>$soma</strong>";
            ?>
    </section>


            

</body>
</html>