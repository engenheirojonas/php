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
        $salario = $_GET['sal'] ?? 0;
        $salmin = 50000;
    ?>

    <main>
        <h1>Avaliação do teu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

                <label for="sal">Quanto ganhas em kwanza? </label>
                <Input type="number" name="sal" id="sal" value="<?= $salario?>">
                <input type="submit" value="Processar">
                <label for="">N.B: O salário mínimo é de <strong>50.000 Kz</strong></label>
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado da operação</h2>
            <?php
                $moeda = numfmt_create("Angola", NumberFormatter::CURRENCY);
                $vezes = intdiv( $salario, $salmin);
                $salprovi = $vezes * $salmin;
                $resto = $salario - $salprovi;

                echo "<p>Considerando o salário mínimo atual de <strong>" . numfmt_format_currency($moeda, $salmin, "AOA") . "</strong>. O teu salário cabe <strong>" . number_format($vezes, 0, ",", " ") .  "</strong> vezes o salario minimo mais <strong>" . numfmt_format_currency($moeda, $resto , "AOA") . "</strong></p>"; 
            ?>
    </section>


            

</body>
</html>