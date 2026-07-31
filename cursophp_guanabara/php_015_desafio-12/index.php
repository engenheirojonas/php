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
        $nasc = $_POST['anoNasci'] ?? 0;
        $anoCompar = $_POST['anoDeter'] ?? 0;
    ?>

    <main>
        <h1>Queres saber quantos anos tens?</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="anoNasci">Informe o que foste nascido:</label>
                <Input type="number" name="anoNasci" id="nasceu" value="<?= $nasc ?>">
                <label for="anoDeter">o limite determinado:</label>
                <Input type="number" name="anoDeter" id="anoDeter" value="<?= $anoCompar ?>">

                <input type="submit" value="Analizar">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado da Operação</h2>
            <?php
                $res = $anoCompar - $nasc;

                print "Quem nasceu em <strong>$nasc</strong>, vai ter <strong>$res</strong> anos em <strong>$anoCompar</strong>" . "<br>"; 
            ?>
    </section>
</body>
</html>