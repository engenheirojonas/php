
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <header>
        <h1>Informe a sua carteira em Reais</h1>
    </header>
<pre>
    <main>
    <?php   
                    /**cotaçao direito da api do banco central do brasil */
            $data_inicio = date("m-d-Y", strtotime("-7 days")); 
            $data_fim = date("m-d-Y");

            $URL = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $data_inicio .'\'&@dataFinalCotacao=\''. $data_fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            

            $dados = json_decode(file_get_contents($URL), true);
            $cotacao = $dados['value'][0]['cotacaoCompra'];
/***************************************************************************** */
            
            $carteira = $_REQUEST['cart'] ?? 0;
            $convert = $carteira /  $cotacao;

/***************************************************************************** */
                    /**O formato internacional de moedas */
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

/**************************************************************************** */
            echo "<p>A equivalencia de <strong>" . numfmt_format_currency($padrao, $carteira, "BRL") . "</strong> em <strong>" . numfmt_format_currency($padrao, $convert, "USD") . "</strong></p>";
            
            echo "<p>A contaçao atual é de: <strong>" . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> por cada dólar americano!</p>";
    ?>

        <P><a href="javascript:history.back()">&#x2B05; Voltar para pagina anterior</a></P>

    </main>
</pre>

</body>
</html>