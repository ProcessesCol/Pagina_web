<?php
    include '../php/controlador.php';
    $controlador = new controlador();
    $pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tableros de Transferencia | ¿Qué son y porque usar tableros de transferencia? | WDC MAYORISTA</title>
    <?php $controlador->head('interno'); ?>
</head>
<body>
    <?php
        $controlador->menu('interno');
        $pagina->tablero_transferencia();
        $controlador->footer('interno');
        $controlador->scripts('interno');
    ?>
</body>
</html>