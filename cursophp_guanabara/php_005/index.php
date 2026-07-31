<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando códigos</title>
</head>
<body>
    
    <h1>Hora e data</h1>
    <?php 
            /* a função date diz a data atual do sistema 
                    D para dia da semana
                    d para data
                    M para mês
                    Y para ano
                    y para o ano com dois digitos
                    
                a concatenação é feita com o ponto (.) e nao com o sinal de mais (+) como em outras linguagens

                a função date diz tambem a hora atual do sistema 
                    G para hora em formato 24h
                    g para hora em formato 12h
                    i para minutos
                
                    s para segundos
                    a para am ou pm
                    t para o total de dias do mês
                    
                    T para o fuso horário do sistema

            */
        
        # para definir o fuso horário do sistema, usamos a função date_default_timezone_set() e passamos como parâmetro o fuso horário desejado
        date_default_timezone_set("Africa/Luanda");

        $nome = "Jonas Giona";
        echo "Olá, $nome, tudo bem?". "<br>"; 

        # a função date() retorna a data e hora atual do sistema, e podemos formatar a saída usando os caracteres de formatação mencionados acima
        /**o que inicialmente aparece nao é a hora ou data atual, mas sim a hora e data do servidor, que pode estar em outro fuso horário, por isso é importante definir o fuso horário correto antes de usar a função date()*/
        echo "Hoje é dia ". date("d / M / Y") . "<br>";
        echo "e já sao " . date("G:i:s T") . "<br>";
        echo " ou " . date("g:i:s a") . "<br>";
    ?>
</body>
</html>