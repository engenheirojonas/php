<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short tag</title>
</head>
<body>
    <!-- Short open tag 
     para usar short open tag, é necessário habilitar a diretiva short_open_tag no arquivo php.ini, caso contrário, o código não será interpretado corretamente.
     passos para habilitar short open tag:
     1. Abra no vscode o arquivo php.ini (geralmente localizado na pasta de instalação do PHP: C:\xampp\php\php.ini).
     2. Procure pela diretiva short_open_tag no vscode (Ctrl + F) e altere o valor de Off para On.  
     3. Salve o arquivo php.ini e reinicie o servidor web (Apache) para que as alterações tenham efeito.
     4. Agora você pode usar short open tag no seu código PHP, como mostrado abaixo.


     Atençao:
        Não é recomendado o uso de short open tag, pois pode causar problemas de compatibilidade em diferentes ambientes de servidor. É preferível usar a tag completa <?php ?> para garantir que o código seja interpretado corretamente em qualquer configuração do PHP.
    -->

    <?
        phpinfo();
    ?>
</body>
</html>