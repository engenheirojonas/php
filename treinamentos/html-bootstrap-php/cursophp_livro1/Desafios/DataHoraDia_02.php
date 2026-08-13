<html>
<head>
<title>Dia <?php echo date('d'); ?></title>
</head>
<body>
    <?php
        $data = 22;//date('H');

        function saudar() {
            if ('$data' < 12) {
                echo "Bom dia";
            } else if ('$data'  > 11 || '$data' < 18) {
                echo "Boa tarde";
            } else {
                echo "Boa noite";
            }
        }
        echo "Agora são $data horas <br>";
        saudar();

    ?>
</body>
<html>