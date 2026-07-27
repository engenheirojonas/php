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
        $preco = $_GET['precario'] ?? 0;
        $perc = $_GET['porcento'] ?? 0;
    ?>

    <main>
        <h1>Queres saber o preço do Reajuste?</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
                <label for="precario">Informe o preço:</label>
                <Input type="number" name="precario" id="precario" value="<?= $preco ?>">
                <label for="porcento">Percentagem do reajuste (%):</label>
                <Input type="number" name="porcento" id="porcento" value="<?= $perc ?>">
         
                <input type="submit" value="Analizar">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado da Operação</h2>
            <?php
                $reajuste =  $preco * ($perc/100);
                $res =  $preco + $reajuste;

                echo "O produto que custava <strong>$preco</strong>, com R$<strong>" . $perc . "</strong> % de aumento vai passar a custar R$<strong>$res</strong>"; 
            ?>
    </section>
</body>
</html>