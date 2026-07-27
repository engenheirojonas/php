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
        $val1 = $_GET['n1'] ?? 0;
        $val2 = $_GET['n2'] ?? 0;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

                <label for="n1">Valor 1:</label>
                <Input type="number" name="n1" id="n1" value="<?= $val1?>">
                <label for="n2">Valor 2:</label>
                <Input type="number" name="n2" id="n2" value="<?=$val2?>">
                <input type="submit" value="Dividir">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado da operação</h2>
            <?php
                $cons = intdiv($val1, $val2);
                $resto = $val1 % $val2;

                echo "
                        <table style='border:none;'>
                            <tr style='text-align: center;background-color:white; '>
                                <td style='font-size:20pt; width:50px; padding-bottom:20px;'>$val1</td>
                                <td style='font-size:20pt; width:50px;  border-bottom: 2px solid black; border-left: 2px solid black; padding-bottom:20px;'>$val2</td>
                            </tr>
                            <tr style='text-align: center;background-color:white;'>
                                <td>$resto</td>
                                <td>$cons</td>
                            </tr>
                        </table>
                    ";      
            ?>
    </section>


            

</body>
</html>