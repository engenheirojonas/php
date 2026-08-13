<?php
        // função que imprime uma linha de calendário em HTML
        // recebe um array $semana com 7 valores, onde cada valor é um dia do mês ou string vazia
        // mantém o comentário antigo e adiciona explicações de significado
    function linha(array $semana) {
        echo "<tr>"; // inicia a linha HTML da tabela (tr = table row)

            // percorre todas as 7 posições da semana, correspondendo a Dom, Seg, Ter, Qua, Qui, Sex, Sáb
        for ($i = 0; $i < 7; $i++) {

                // usa operador null coalescing para evitar aviso de índice não definido
                // se $semana[$i] não existir, usa string vazia
                // isso garante que as células da semana sempre existam
            $valor = $semana[$i] ?? '';

            echo "<td>"; // abre a célula HTML da tabela (td = table data)

                // imprime o valor do dia quando houver, senão imprime vazio
                // mantém colunas alinhadas mesmo em semanas incompletas
            echo $valor !== '' ? $valor : '';
            echo "</td>"; // fecha a célula HTML
        }

        echo "</tr>"; // finaliza a linha HTML da tabela
    }

        // função que monta o calendário de um mês e ano específicos
        // $mes deve ser entre 1 (janeiro) e 12 (dezembro); $ano é o ano completo, por exemplo 2026
        // o objetivo é alinhar o primeiro dia do mês na coluna correta e preencher cada semana com 7 colunas
    function calendario(int $mes, int $ano) {

            // calcula a quantidade de dias no mês usando o calendário gregoriano
            // por exemplo, fevereiro terá 28 ou 29 dias dependendo do ano
        $diasNoMes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

            // mktime cria um timestamp para o primeiro dia do mês e date('w') retorna o dia da semana
            // 0 = domingo, 1 = segunda, ..., 6 = sábado
            // essa informação é necessária para saber quantos espaços vazios inserir antes do dia 1
        $primeiroDiaSemana = date('w', mktime(0, 0, 0, $mes, 1, $ano));

        $semana = []; // array vazio que será preenchido com os dias de uma linha semanal

            // preenche os espaços iniciais vazios até o primeiro dia do mês
            // se o mês começa na quarta-feira, adicionamos três valores vazios
            // isso posiciona o dia 1 na coluna correta do calendário
        for ($i = 0; $i < $primeiroDiaSemana; $i++) {
            $semana[] = '';
        }

            // percorre cada dia válido do mês, adicionando ao array da semana
        for ($dia = 1; $dia <= $diasNoMes; $dia++) {
            $semana[] = $dia; // adiciona o número do dia ao final do array

                // quando o array alcança 7 elementos, ele forma uma semana completa
            if (count($semana) === 7) {
                linha($semana); // imprime a semana completa na tabela
                $semana = []; // esvazia o array para iniciar a próxima semana
            }
        }

            // se restar uma semana incompleta após o último dia do mês
        if (count($semana) > 0) {

                // completamos a semana com valores vazios até chegar a 7 colunas
                // sem isso, a última linha do calendário teria menos colunas e deixaria a tabela desigual
            while (count($semana) < 7) {
                $semana[] = '';
            }
            linha($semana); // imprime a última semana com espaços vazios no final
        }
    }

        // obtém o ano atual do sistema, por exemplo 2026
        // essa variável é usada para gerar o calendário do ano corrente automaticamente
    $anoAtual = date('Y');
?>

<table>
    <tr>
        <td>
            <h3>Janeiro</h3>
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
                <?php calendario(1, $anoAtual); ?>
            </table>
        </td>

        <td>
            <h3>Fevereiro</h3>
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
                <?php calendario(2, $anoAtual); ?>
            </table>
        </td>

        <td>
            <h3>Março</h3>
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
                <?php calendario(3, $anoAtual); ?>
            </table>
        </td>

        <td>
            <h3>Abril</h3>
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
                <?php calendario(4, $anoAtual); ?>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Maio</h3>
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
                <?php calendario(5, $anoAtual); ?>
            </table>
        </td>
        <td>
            <h3>Junho</h3>
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
                <?php calendario(6, $anoAtual); ?>
            </table>
        </td>
        <td>
            <h3>Julho</h3>
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
                <?php calendario(7, $anoAtual); ?>
            </table>
        </td>
        <td>
            <h3>Agosto</h3>
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
                <?php calendario(8, $anoAtual); ?>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Setembro</h3>
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
                <?php calendario(9, $anoAtual); ?>
            </table>
        </td>
        <td>
            <h3>Outubro</h3>
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
                <?php calendario(10, $anoAtual); ?>
            </table>
        </td>
        <td>
            <h3>Novembro</h3>
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
                <?php calendario(11, $anoAtual); ?>
            </table>
        </td>
        <td>
            <h3>Dezembro</h3>
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
                <?php calendario(12, $anoAtual); ?>
            </table>
        </td>
    </tr>
</table>