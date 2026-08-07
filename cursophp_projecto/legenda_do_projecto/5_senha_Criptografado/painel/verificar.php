<?php 

    @session_start();

        //pode ser com nome ['nome']
    if (@$_SESSION ['id'] == "") {
        echo '<script>window.location="../index.php"</script>';
        exit();
    }

?>