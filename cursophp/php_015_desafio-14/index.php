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
                <label for="temp">Informe o preço:</label>
                <Input type="number" name="temp" id="temp" value="<?= $num ?>">
         
                <input type="submit" value="Analizar">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado da Operação</h2>
            <?php
                $sec = 60;
                $min = 360;
                $hora = 2100;
                $dia = 518400;
                $dia = 3628800;

                $temporal =  $dia = 3628800;

                echo "O produto que custava <strong>$temporal</strong>"; 
            ?>
    </section>
</body>
</html>