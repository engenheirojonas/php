<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        /**Diferença entre variáveis e constantes
                variáveis são valores que você vai colocar ali mas que é em qualquer momento pode ser trocado por outro valor então Reserva um espaço na memória do computador e você pode colocar um dado ali e a qualquer momento você pode trocar esse dado por outro dado então é uma variável.

                os constantes são valores que você vai colocar ali mas que não podem ser trocados por outro valo, até o programa terminar. então Reserva um espaço na memória do computador e você pode colocar um dado ali e esse dado não pode ser trocado por outro dado então é uma constante

                Então eu vou pegar uma gavetinha e vou colocar um dado dentro dessa gavetinha
                eu pego uma gavetinha e diga aqui ó vai eu vou colocar aqui dentro se esse dado puder ser alterado Para o Futuro esse espaço é uma variável se eu coloco um dado numa determinada gaveta e digo olha não pode mudar esse dado que tá dentro da gaveta tem que ficar até o final da execução do programa Isso é uma constante nesse caso nesse exemplo aí que a gente tá vendo na tela eu quero que seja uma variável eu botei Guanabara que é o meu sobrenome mas a qualquer momento do meu programa eu posso substituir pelo seu sobrenome que nesse caso nesse momento você tá pensando aí Ah meu sobrenome é Almeida ou Silva eu posso tirar Guanabara e colocar Silva Sem problema nenhum então isso é uma variável Então vou colocar ali a identificação de sobrenome vou escolher ali ó sobrenome você vai procurar aí tá escrito sobrenome e tem um símbolozinho na frente esse símbolo que a gente chama de cifrão ou os programadores um pouquinho mais antigo chamam de dólar ou alguns programadores gringos chamam de curvance ou curry Sider o sinal de moeda 
        */
    
        /**no php toda variável é precedida pelo símbolo $ que é um cifrão
             * variaveis simples são aquelas que guardam apenas um valor, por exemplo, uma string, um número inteiro, um número decimal, um booleano, etc.
             
             * variáveis compostas ou de coleções são aquelas que guardam mais de um valor, por exemplo, arrays, objetos, etc.
             * 
        tanto as variaveis como as constantes tem um identificadeor:

            const Pais = "Brasil"; // constante
            $pais = "Brasil"; // variável

                aqui neste caso o identificador é Pais e pais, a diferença é que o identificador da constante é escrito com a primeira letra maiúscula e o identificador da variável é escrito com a primeira letra minúscula.

            #case sensitive deve determina que o identificador seja sempre escrito da mesma forma que foi definido, ou seja, se você definiu uma variável com o identificador $pais você não pode escrever $Pais ou $PAIS ou $pAIS, tem que ser sempre escrito da mesma forma que foi definido.

            #camelCase é uma convenção de escrita de identificadores que determina que o identificador seja escrito com a primeira letra minúscula e as demais palavras com a primeira letra maiúscula, por exemplo: $nomeCompletoCliente, $nomeCompletoCliente, $nomeCompletoCliente, etc.
                $nomeCompletoCliente = "Gustavo Almeida"; 

            #snake_case é uma convenção de escrita de identificadores que determina que o identificador seja escrito com todas as letras minúsculas e as palavras separadas por underline, por exemplo: $nome_completo_cliente, $nome_completo_cliente, $nome_completo_cliente, etc.

                $nome_completo_cliente = "Gustavo Almeida";
         */

        $nome = "Jonas";
        $sobrenome = "Sambo";
        const Naturalidade = "Angola";

        echo "O Senhor se chama $nome $sobrenome, e você és de " . Naturalidade;
    ?>
</body>
</html>