<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
            <?php   
                
                $min = 1;
                $max = 90;

                    /**                            rand() 
                    *a funçao rand() é usa um algoritimo muito antigo que data de 1951 que se chama linear congruential generator, que é um algoritmo de geração de números pseudo-aleatórios. mas atualmente a funçao rand() é considerada obsoleta e pouco confiavel, e a funçao mt_rand() é mais confiavel e mais rapida que a funçao rand().

                    *gera um numero aleatorio entre 0 e 100 ou pode tambem ser o inverso quer seja entre 100 e 0, ou seja, o primeiro parametro é o minimo e o segundo parametro é o maximo. se nao for passado nenhum parametro, a funçao rand() gera um numero aleatorio entre 0 e RAND_MAX, que é uma constante do PHP que representa o maior valor inteiro que pode ser retornado pela funçao rand(). RAND_MAX é definido como 2147483647, que é o maior valor inteiro que pode ser representado em 32 bits.

                    *                           $num = rand($min, $max); 
                    */


                    /**                  mt_rand() 
                    *a funçao mt_rand() é mais confiavel e mais rapida que a funçao rand(). ele é dum algoritimo chamado Mersenne Twister, que é um algoritimo de geração de números pseudo-aleatórios e que surgiu em 1997, e é considerado um dos melhores algoritimos de geração de números pseudo-aleatórios. ele é 4 vezes mais rapido que a funçao rand() e é mais rapido e mais confiavel. mas nao aceita o inverso quer seja entre 100 e 0.
                    *Mas isso é mais recomendado hoje.
                    */

                        //   $num = mt_rand($min, $max); //gera um numero aleatorio entre 0 e 90


                    /**                 random_int()
                    * A funçao random_int() é mais confiavel e mais rapida que a funçao rand() e a funçao mt_rand(). ele é dum algoritimo chamado Mersenne Twister, que é um algoritimo de geração de números pseudo-aleatórios e que surgiu em 1997, e é considerado um dos melhores algoritimos de geração de números pseudo-aleatórios. 
                    
                    *ele gera numeros aleatorios criptograficamente seguros, ou seja, ele é mais confiavel e mais seguro que a funçao rand() e a funçao mt_rand(). mas ele é mais lento que a funçao rand() e a funçao mt_rand().

                    *so usa a quando se for necessario gerar numeros aleatorios criptograficamente seguros, ou seja, quando for necessario gerar numeros aleatorios para senhas, tokens, chaves de criptografia, algoritimos para geraçao de codigos hash etc.
                    */
                    
                            $num = random_int($min, $max); //gera um numero aleatorio entre 1 e 90

                echo "<p>Gerando um número entre $min e $max: ... \n";
                echo "O número gerado é: <strong>$num</strong></p>";
            ?>

                            <!-- Botao gerar
                                        significara recarregar a pagina e gerar outro numero aleatorio, podendo ser feito de duas formas, uma atraves do evento html e outra atraves do evento javascript. mas a forma mais recomendada é
                             
                                    1. atraves dos eventos html
                            -->
            <button onclick="location.reload()">&#x1F504; Gerar outro número</button>
            
                            <!-- 
                                    2. atraves do evento javascript

                                        <button onclick="javascript:document.location.reload()">Gerar outro número</button> 
                            -->
    </main>
</body>
</html>