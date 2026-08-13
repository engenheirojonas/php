<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>
<body>
    
    <?php
            /**retorna para o Valor absoluto, ou o numero positivo */
        echo abs(-5)."<br>"; // Saída: 5 // ou // echo abs(5);  // Saída: 5
        
        $r = abs(-10.5);
        var_dump("$r.<br>"); // Saída: float(10.5)

        /********************************* */
                /**base_convert
                 *      converte um número de uma base para outra. A função recebe três parâmetros: o número a ser convertido, a base de origem e a base de destino.
                 */

            $r2 = base_convert(100, 10, 2);
            var_dump("$r2.<br>"); // Saída: string(7) "1100100" 

            $r2 = base_convert(100, 10, 8);
            var_dump("$r2.<br>"); // Saída: string(3) "144" 


            $r2 = base_convert(100, 10, 16);
            var_dump("$r2.<br>"); // Saída: string(2) "64"

                //converter um numero do binario para decimal
            $r2 = base_convert(10010100, 2, 10);
            var_dump("$r2.<br>"); // Saída: string(3) "148"

        /********************************* */

                /**arrendondamentos
                 * ceil() arrendonda para cima
                * floor() para arrendondar para baixo
                * roundu() arrendondamento total ou aritmetico
            */

                /**Divisao inteira ou o resto
                     * intdiv()
                     *  difere com o operador % que mostra o resto da divisao mas a funçao intdiv() mostra a resposta ou o valor da divisao
                     */
            $r2 = intdiv(5,2);
            var_dump("A resposta é $r2.<br>"); // Saída: string(3) "2"

            $r2 = 5 % 2;
            var_dump("A resposta é $r2.<br>"); // Saída: string(3) "1"

        /********************************* */

                /**Máximo e Mínimo
                 * min()
                 * max()
                 */
            $r2 = min(5,8,3);
            var_dump("o valor minimo é $r2.<br>"); 

            $r2 = min(5,8,3,4,6,7);
            var_dump("o valor maximo é $r2.<br>");

        /********************************* */

                /**função pi
                 */
            $r2 = pi();
            var_dump("o valor do pi é $r2.<br>");
                
                /**declarar pi como contante
                 * e nesse caso nao é preciso declarar const pi */
            $r = M_PI; //em maiuscula
            var_dump("o valor do pi é $r.<br>");

        /********************************* */

            /**Funçao de potencia*/
            $r3 = pow(5,2); 
            var_dump("$r3.<br>");

            /**atençao
             * quando voce usa a funçao de potencia no lugar do operador de potencia (**) voce perdes a ordem de precedencia
             * 
             */

    /********************************* */

                /**Funçao de raiz quadrado*/
            $r4 = sqrt(25);
            var_dump("A raiz quadrado de 25 é $r4.<br>");

                /**Ou */
            $r4 = 25 ** (1/2);
            var_dump("A raiz quadrado de 25 é $r4.<br>");

            
                /**raiz cúbico */
            $r4 = 27 ** (1/3);
            var_dump("A raiz cubico de 27 é $r4.<br>");
    ?>

</body>
</html>