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
        <h1>Conversão</h1>
    </header>
    <main>
        <?php   
            $VAL = $_REQUEST['val'] ?? 0; 

            $dolar = 5.17;
            $convert = $VAL / $dolar;

            /* Formatação Geral de numeros
                    com a função number_format() você pode formatar os numeros de acordo com a sua necessidade, mas ela não é a melhor forma de formatar moedas, pois ela não formata de acordo com o país e a moeda que você deseja exibir.

                // number_format(variavel, numero de casas decimais)
                    // number_format(variavel, numero de casas decimais, separador decimal, separador de milhar)
            
                        echo "<p>A equivalencia de R\$ <strong>" .  number_format($VAL,2, ",", ".") . " </strong> em US\$ : <strong>" . number_format($convert, 2, ",", " ") . "</strong></p>";
            */

            /* Formataçao de moedas com internacionalização de moedas 
                    Esta é a format mais profissional e mais recomendada, pois ela formata a moeda de acordo com o país e a moeda que você deseja exibir.

                    mas deve habilitar a extensão intl no php.ini, para isso basta descomentar a linha extension=intl e reiniciar o servidor.
                    e no php.ini, descomentar a linha extension=intl e reiniciar o servidor.ou escrever manualmente extension=intl, e reiniciar o servidor.

                    caso nao dar, usa isso so quando fores a hospedar o teu site, pois a maioria dos servidores ja vem com a extensão intl habilitada.
            */

                //esta propria internacionalizaçao vai cuidar em apresentar as moedas de acordo com o país e a moeda que você deseja exibir.
                //é so mudar o "pt_BR" para o país que você deseja exibir a moeda e o "BRL" para a moeda que você deseja exibir. por exemplo, se você quiser mostrar as moedas no formato americano, você pode mudar o "pt_BR" para "en_US" e o "BRL" para "USD".

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>A equivalencia de <strong>" . numfmt_format_currency($padrao, $VAL, "BRL") . "</strong> em <strong>" . numfmt_format_currency($padrao, $convert, "USD") . "</strong></p>";
        ?>

        <P><a href="javascript:history.back()">&#x2B05; Voltar para pagina anterior</a></P>

    </main>

</body>
</html>