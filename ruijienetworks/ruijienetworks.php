<?php
    include '../php/controlador.php';
    $controlador = new controlador();
    $pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rujie Networks y Cloud | Conectividad y Networking Rujie Networks | WDC MAYORISTA</title>
    <?php $controlador->head('interno'); ?>
</head>
<body>
    <?php
        $controlador->menu('interno');
        $pagina->ruijienetworks();
        $controlador->footer('interno');
        $controlador->scripts('interno');
    ?>
</body>
</html>