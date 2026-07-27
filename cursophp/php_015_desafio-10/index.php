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
        $VAL = $_GET['val'] ?? 0;
    ?>

    <main>
        <h1>Queres saber a Raiz?</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="n1">Insira um número</label>
                <Input type="number" name="val" id="val" value="<?= $VAL?>">
                <input type="submit" value="Analizar">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado da Analise</h2>
            <?php
                $raizQ = sqrt($VAL);
                $raizC = $VAL ** (1/3);

                print "A sua raiz quadrado é: $raizQ" . "<br>"; 
                print "A sua raiz Cúbico é: $raizC";
            ?>
    </section>


            

</body>
</html>