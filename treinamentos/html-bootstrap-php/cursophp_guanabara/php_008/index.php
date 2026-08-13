<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
                //string entre aspas
                //'' ou ""

        //Double quoted
            /**
                * existe interpretação ou a interpolação do conteudo da string, o php vai analisar e depois gerar um resultado para o comando print
             * 
            */

                $titulo = "php\u{1f418}";
                print "O titulo é $titulo <br>";

        //Single quoted
            /**
                * não existe interpretação do conteudo da string, o php reproduzir na leitura o que mencionamos dentro do print para o comando print
                * 
            */
                $titulo2 = 'php \u{1f418}';
                print "O titulo é $titulo2 <br>";

                        //ou

                $titulo2b = 'php \u{1f418}';
                print 'O titulo é $titulo2b <br>';

            //ATENÇÃO 

                $nome = "Hilsong";
                $sobrenome = "Red";

                //erro de sintaxe
                //echo "$nome "Biobio" $sobrenome";

                //erro semantico
                echo '$nome "Biobio" $sobrenome <br>';

                //a forma certa é usar a" sequencia de escape":     \"xxx\"
                echo "$nome \"Biobio\" $sobrenome <br>";

            /**SEQUENCIAS DE ESCAPE PARA ASPAS DUPLAS:
                \n  nova linha ou quebra linha
                \t  tabulação horizontal
                \\  barra invetida
                \$  sinal de cifrão (dolar) ou mostrar este sinal
                \u{}    codepoind unicode
            *
            */

        //String Heredoc
            /*
                A vantagem é sobre quebrar linha em varios textos. Estes string estao para o tipo de aspas duplas ou double quoted permetindo a interpretaçao de variaveis e unicodes...
            */
                $curso = "PHP";
                $ano = date('Y');
                echo <<< Minha_frase
                        Eu estou estudando 
                            $curso em $ano
                        Está sendo muito bom
                        \u{1f596}
                            <br>
                Minha_frase;


        //String Nowdoc
            /*Aceitam quebra de varias linhas mas não fazem interpolação ou interpretação. 
                A string nowdoc só serve para as aspas simples ou single quoted
            */

                $curso = "PHP";
                $ano = date('Y');
                echo <<< 'Minha_frase'
                        Eu estou estudando 
                            $curso em $ano
                        Está sendo muito bom
                        \u{1f596}
                            <br>
                Minha_frase;

    ?>
</body>
</html>