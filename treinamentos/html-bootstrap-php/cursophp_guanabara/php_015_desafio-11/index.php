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
        $VAL1 = $_GET['val1'] ?? 0;
        $VAL2 = $_GET['val2'] ?? 0;
        $VAL3 = $_GET['val3'] ?? 0;
        $VAL4 = $_GET['val4'] ?? 0;
    ?>

    <main>
        <h1>Calcular a Média</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="val1">Primeiro Valor</label>
                <Input type="number" name="val1" id="val1" value="<?= $VAL1 ?>">
                <label for="val2">Segundo Valor</label>
                <Input type="number" name="val2" id="val2" value="<?= $VAL2 ?>">
                <label for="val3">Terceiro Valor</label>
                <Input type="number" name="val3" id="val3" value="<?= $VAL3?>">
                <label for="val4">Quarto Valor</label>
                <Input type="number" name="val4" id="val4" value="<?= $VAL4 ?>">

                <input type="submit" value="Analizar">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado da Operação</h2>
            <?php
                $med = ($VAL1+$VAL2+$VAL3+$VAL4)/4;

                print "A media destes valores é: <strong>$med</strong>" . "<br>"; 
            ?>
    </section>
</body>
</html>