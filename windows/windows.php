<?php
    include '../php/controlador.php';
    $controlador = new controlador();
    $pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Windows server | Sistema Operativo Windows Server | WDC MAYORISTA</title>
    <?php $controlador->head('interno'); ?>
</head>
<body>
    <?php
        $controlador->menu('interno');
        $pagina->windows();
        $controlador->footer('interno');
        $controlador->scripts('interno');
    ?>
</body>
</html>