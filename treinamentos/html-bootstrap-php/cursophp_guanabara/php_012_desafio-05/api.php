
<pre>
    <?php   

            /**API
             * puxar dados do banco central do brasil para o meu site
             * 
             *       /**API
         * 
         *                      - Dados abertos;
         *                              https://dadosabertos.dominio/
         *          
         *                      - Banco Central do Brasil;
         *                                 https://dadosabertos.bcb.gov.br/
         */

        /* codigo base

            $URL = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'07-13-2026\'&@dataFinalCotacao=\'07-24-2026\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                //json_decode é a funçao de tratar dadoos em json, o true é para transformar em array, se não colocar ele vai transformar em objeto
            $dados = json_decode(file_get_contents($URL), true);

            //var_dump($dados);

                    //no json confirmado no var dump, cotacaoCompra esta dentro do [0] e este por sua vez esta dentro do ['value']
            $cotacao = $dados['value'][0]['cotacaoCompra'];
            echo "A contaçao foi $cotacao"

        */
                //Amelhorado
            $data_inicio = date("m-d-Y", strtotime("-7 days")); //strtotime("-7 days): começar apartir de 7 dias antes
            $data_fim = date("m-d-Y");

                //fazendo isso o teu software passara a ser atualizado automaticamente para o dia de hoje e 7 dias antes
            $URL = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $data_inicio .'\'&@dataFinalCotacao=\''. $data_fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($URL), true);
            $cotacao = $dados['value'][0]['cotacaoCompra'];
            
            echo "A contaçao foi $cotacao"

    ?>

</pre>