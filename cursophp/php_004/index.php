<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short open tag 2</title>
</head>
<body>

<!----/**aqui colocamos apenas 1 comando php; não pode ter dois comandos de tipo diferente e deve ser apenas print ou echo
            
            Mas isso não é recomendavel*/---->
        <?php 
            $nome = "Jonas Giona";
            echo "Olá, todos!";
        ?>

   
        <?= 
            "Olá $nome, tudo bem?";
        ?>
</body>
</html>