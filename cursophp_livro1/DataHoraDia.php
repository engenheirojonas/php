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
    echo "Hoje é dia " . date('d/m/Y') . "<br>";

    echo "Hoje é dia " . date('d/m/y') . "<br>";
    
    echo "Agora são " . date('H:i:s') . "<br>";

    echo "Agora são " . date('g:i:s') . "<br>";

    echo "Hoje é dia " . date('d') . "e é uma " . date('D') . "<br>";

    echo "Estamos no Mês de " . date('m') . "ou " . date('M') . "<br>";

    echo "Hoje é " . date('D') . " e faltam 4 dia para terça-feira";

?>