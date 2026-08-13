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
                <label for="temp">Quantos dias te resta? Informa-me: </label>
                <Input type="number" name="temp" id="temp" value="<?= $num ?>">
         
                <input type="submit" value="Analizar">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado da Operação</h2>
            <?php
                $dia = $num;
                $semana = $dia/7;
                $hora =  $num * 24;
                $min = $hora * 60;
                $sec = $min * 60;
                
                print "Pelo tempo informado você tens: ";
                echo " <ul>
                            <li> <strong>" . number_format($semana, 0, ",", " ") . " </strong> Semana(s) </li>
                            <li> <strong>" . number_format($hora, 0, ",", " ") . " </strong> Hora(s) </li>
                            <li> <strong>" . number_format($min, 0, ",", " ") . " </strong> Minutos </li>
                            <li> <strong>" . number_format($sec, 0, ",", " ") . " </strong> Segundos </li>
                      </ul>"; 
            ?>
    </section>
</body>
</html>