<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <h1>Analisador de Número Real</h1>

        <?php
            $num = $_POST['n'] ?? 0;
            
            echo "<p>Analisando o numero <strong>" . number_format($num, 3, ",", ".") . " </strong> informado pelo usuário:</p>";

            $part_int = (int) $num;
            $part_fra = $num - $part_int;

            echo "<ul>
                        <li> A parte inteira do número é <strong>" .number_format($part_int, 0, ",", ".") . "</strong> </li>
                        <li> A parte inteira do número é <strong>" .number_format($part_fra, 3, ",", ".") . "</strong> </li>
                  <ul>";
                
        ?>

        <button><a href="javascript:history.back()">&#x2B05; Voltar para pagina anterior</a></button>
    </main>

</body>
</html>