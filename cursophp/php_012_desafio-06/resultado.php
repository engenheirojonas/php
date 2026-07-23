<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php   
                /**a coalicença deve ser numero e nao entre aspas porque se carega os dados dum input do tipo number */

            $num = $_REQUEST['Num'] ?? 0; 

            $antec = $num - 1;
            $suc = $num + 1;
            
            echo "<p>O número escolhido foi: <strong>$num</strong></p>";
            echo "<p>O número antecessor é: <strong>$antec</strong></p>";
            echo "<p>O número sucessor é: <strong>$suc</strong></p>";
        ?>

        <!--
            /**
            para pouparmos a memoria podemos nao criar as variaveis $antec e $suc

                $num = $_REQUEST['Num'] ?? "Sem numero"; 

                /** 
                    $antec = $num - 1;
                    $suc = $num + 1; 
                */
            e no echo sera assim
            
                echo "<p>O número antecessor é: <strong>($num - 1)</strong></p>";
                echo "<p>O número sucessor é: <strong>($num + 1)</strong></p>";
                
            */
        -->
            
        
        
       

        <button><a href="javascript:history.back()">&#x2B05; Voltar para pagina anterior</a></button>

         <!--
        outra forma de voltar para tras e sobretudo chamando um arquivo especifico

            <button onclick=javascript:window.location.href="index.html">
                &#x2B05; Voltar para pagina anterior 
            </button>
        
        -->
    </main>

</body>
</html>