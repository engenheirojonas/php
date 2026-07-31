<?php
    $hoje = date('d:m:Y');

    function linha($semana) {

              
        echo "<tr>";
            for ($i = 0; $i <= 6; $i++) {
                    if (isset($semana[$i]) || isset($semana[$i]) ==  '$hoje' ) {
                        echo "<td>{$semana[$i]}</td>";
                    } else {
                        echo "<td></td>";
                    }
                }
        echo "</tr>";
    } 

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
        linha($semana);
    }
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

                    <!--Adicionamos cinco chamadas à função linha(); -->
                <?php calendario(); ?>
            </table>
        </td>

        <td>
            <h3>Fevereiro</h3>
            <table border="1">
                <tr>
                    
                    
                    <th>Qua</th>
                    <th>Qui</th>
                    <th>Sex</th>
                    <th>Sáb</th>
                    <th>Dom</th>
                    <th>Seg</th>
                    <th>Ter</th>
                </tr>

                    <!--Adicionamos cinco chamadas à função linha(); -->
                <?php calendario(); ?>
            </table>
        </td>

        <td>
            <h3>Março</h3>
            <table border="1">
                <tr>
                    
                    <th>Seg</th>
                    <th>Ter</th>
                    <th>Qua</th>
                    <th>Qui</th>
                    <th>Sex</th>
                    <th>Sáb</th>
                    <th>Dom</th>
                </tr>

                    <!--Adicionamos cinco chamadas à função linha(); -->
                <?php calendario(); ?>
            </table>
        </td>
    </tr>
    <tr>
</table>