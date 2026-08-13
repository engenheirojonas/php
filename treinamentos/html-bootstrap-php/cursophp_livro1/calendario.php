

<?php
        //esta é uma funçao que vai criar 1 linha <tr> e 7 colunas <td> na tabela a cada vez que for chamada.
    function linha($semana) {

                /**
                    * para testar se os índices existem antes de exibi-los. Para isso, vamos usar um laço for, que é bem parecido com o for de outras linguagens. Dentro do laço, 

                    *vamos usar a função "isset" que verifica se uma variável existe ou se um índice em um array foi definido
                 */
        echo "<tr>";
            for ($i = 0; $i <= 6; $i++) {
                    if (isset($semana[$i])) {
                        echo "<td>{$semana[$i]}</td>";
                    } else {
                        echo "<td></td>";
                    }
                }
        echo "</tr>";
    } 


        //função para desenhar o calendário
    function calendario() {
        $dia = 1;
        $semana = array();
        while ($dia <= 31) {
            array_push($semana, $dia);

            if (count($semana) == 7) {
                    linha($semana);
                    $semana = array();
            }
        $dia++;
        }
            /** O problema é que este número não vai chegar a sete, já que de 28 para 31 são apenas 3 dias de diferença. Umapossível solução seria chamar a função linha()apósolaço whilepassando o array semana com menos dias. */
        linha($semana);
    }
?>



<table border="1">
    <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sáb</th>
    </tr>

        <!--Adicionamos cinco chamadas à função linha(); -->
    <?php calendario(); ?>
</table>