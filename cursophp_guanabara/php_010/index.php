<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        /**
            ** exponenciaçao ou potencia
            * multiplicaçao
            / divisao
            % resto da divisao ou o modulo
            + adiçao
                no php o operador de adiçao só funciona com numeros, se for usado com string ele nao vai concatenar porque o operador de concatenacao no php é o ponto (.)
            - subtraçao
        */

        /*
            $r = "Roltec" + "Tecnologia";
            var_dump($r);
        */


        /**aqui o resultado sera 25 */
        $r2 = "13" + "12";
        var_dump($r2);

        /**mas a melhora forma é 25 */
        $r2 = (int)"13" + (int)"12";
        var_dump($r2);

        /**ou */
        $r2 = 13 + 12;
        var_dump($r2);
    ?>

</body>
</html>