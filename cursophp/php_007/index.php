<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>    

    <?php 
        /**tipos primitivos no php
         * Escalares
                string 
                    (cadeias ou corrente de textos, sequencias de letras, numeros e simbolos sempre representados entre aspas simples ou duplas. exemplo: "Jonas")

                integer ou int
                    (um valor numerico inteiro, positivo ou negativo, sem casas decimais. ex: 2)

                float ou double
                    (um valor numerico real, positivo ou negativo, com casas decimais. ex: 2,5)

                boolean  ou bool
                    (um valor logico, que pode ser verdadeiro (sim) ou falso (não). ex: true ou false

         * Compostos
         
         
         * Especiais
         */


        /**
             * 0x1A
             * O valor para o PHP é tipo ínter. Em php esse tipo pode ter dígitos de acordo com a base numérica nesse caso aqui todo valor em PHP começado com 0x é um número representativo da base hexadecimal e na base hexadecimal os dois primeiros  0x identificam um número hexadecimal, e,  1A é um número em hexadecimal. Pois os dígitos decimal não são de 0 a 9 são de 0 a f Então 0x1A é um valor inteiro

            *
            *3e2
            *em php isto significa 3 vezes 10 elevado a 2, ou seja, 3 vezes 100, ou seja, 300. Quere dizer 3*(10^2).
            *E o valor para o PHP é tipo float. 
            *todo número representado por potências é um número decimal ou float, e 3e2 é um número decimal.
         */
    
        //Ox = hexadecimal (0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F)
        //0b = binario (0,1)
        //0 = octal (0,1,2,3,4,5,6,7)

        $num = 300;
        echo "O valor da variável é $num <br>";

            //0x número hexadecimal
        $num2 = 0x1A; 
            //0x = 16
            //1
            //A = 10
            // ==> 16 * 1 + 10 = 26
        echo "O valor da variável é $num2 <br>";


            //0b número binario
        $num3 = 0b1011; 
            //10 = 1
            //11 = 1
            //00 = 0
        echo "O valor da variável é $num3 <br>";


            //0b número octal
        $num4 = 010; 
            //010 = 8
        echo "O valor da variável é $num4 <br>";

        $v = 300;
        $v2 = 0x1A;
        $v3 = 0b1011;
        $v4 = 010;
        $v5 = 45.2;
        $v6 = true;
        
            //vai mostrar na tela todas informaçoes sobre esta variavel
            //isto serve para testar o tipo primitivo de uma variavel
        var_dump($v);
        var_dump($v2);
        var_dump($v3);
        var_dump($v4);
        var_dump($v5);
        var_dump($v6);
        

        $v7 = 3e2;
            //3*(10^2)
        var_dump($v7);

            //forçar a declaração duma variavel
            //declaraçao forçada: isso chama-se coerção
        $v8 = (int) 3e2;
        var_dump($v8);

        $v8 = (int) "950";
        var_dump($v8);

/**
* php não tem declaração de variaveis, 
* php apenas atribui o valor.
*/
        $v8 = (float) "950";  //o valor 950 do tipo string sera considerado do tipo float.
        var_dump($v8);

        /**Variaveis booleanos
         * quando eu mandar escrever na tela com print:
            * Quando for true o valor será 1 ou todo valor diferente de 0, null,
            * Quando for false é o valor 0, null,vazio...
         */
        $casado = true;
            //var_dump($casado);
        print "O valor para casado é $casado <br><br>";

        
        //ARRAYS ou VETORES

            $vet = [6,2,9,3,5];
            var_dump($vet);

            print "<br>";
                //usar varios tipos primitivos num array no php
            $vet2 = [6,2.5,"Indiana",3,false];
            var_dump($vet);

            print "<br>";

        //OBJECTS
            class pessoa {
                private string $nome;
            }
            $p = new pessoa;
            var_dump($p);
    ?>
</body>
</html>