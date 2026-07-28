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
        $valores = $_GET['val'] ?? 0;
    ?>

    <main>
        <h1>Multi-Caixa</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
                <label for="val">Quanto queres levantar? </label>
                <Input type="number" name="val" id="val" value="<?= $valores ?>">
         
                <input type="submit" value="Processar">
        </form>
    </main>
    <section id="resultado">
            <h2>Relatório do Levantamento</h2>
            <?php
                $notasCinco_Mil = $valores / ($valores - 5000) ;
                $notasDois_Mil = $valores / ($valores - 2000);
                $notas_Mil = $valores / ($valores - 1000);

                print "Você requisitaste $valores iras levantar: ";
                echo " <ul>
                            <li>
                                <div style='background:green; color:white; font-weight:800; font-size:16pt; text-align:center;'>
                                     ". $notasCinco_Mil . " Notas de 5.000 Kz
                                </div> 
                             </li>
                            <li> 
                                <div style='background:blue; color:white; font-weight:800; font-size:16pt;text-align:center;'>
                                   Notas de 2.000 Kz
                                </div> 
                             </li>
                            <li>
                                <div style='background:red; color:white; font-weight:800; font-size:16pt;text-align:center;'>
                                    Notas de 1.000 Kz
                                </div> 
                             </li>
                      </ul>"; 
            ?>
    </section>
</body>
</html>