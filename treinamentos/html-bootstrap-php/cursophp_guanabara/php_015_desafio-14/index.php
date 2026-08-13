<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio_08</title>
    <link rel="stylesheet" href="style.css">
 
</head>
<body>
    
    <?php 
        $num = $_GET['temp'] ?? 0;
    ?>

    <main>
        <h1>Calculadora do Tempo</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
                <label for="temp">Informe os segundos:</label>
                <Input type="number" name="temp" id="temp" value="<?= $num ?>">
         
                <input type="submit" value="Analizar">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado da Operação</h2>
            <?php
                $min = $num/60;

                $hora =  $min/60;
                    //como calcular a hora outramente
                    /**
                    * $partInteiro = (int) $horaProv;
                    * $partdecimal = $horaProv - $partInteiro;
                    * $hora = ($partdecimal - $partdecimal) + $partInteiro;
                    */
                $dia = $hora/24;
                $semana = $dia/7;

                print "Este valor equivale a:";
                echo " <ul>
                            <li> Minuto: <strong>" . number_format($min, 0, ",", " ") . "</strong> </li>
                            <li> Hora: <strong>" . number_format($hora, 0, ",", " ") . "</strong> </li>
                            <li> Dia(s): <strong>" . number_format($dia, 0, ",", " ") . "</strong> </li>
                            <li> Semana(s): <strong>" . number_format($semana, 0, ",", " ") . "</strong> </li>
                      </ul>"; 
            ?>
    </section>
</body>
</html>