<?php
    include '../php/controlador.php';
    $controlador = new controlador();
    $pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
    <title>CDP Chicago Digital Power | UPS CDP para Protección de Energía | WDC MAYORISTA</title>
    <?php $controlador->head('interno'); ?>
</head>
<body>
    <?php
        $controlador->menu('interno');
        $pagina->cdp();
        $controlador->footer('interno');
        $controlador->scripts('interno');
    ?>
</body>
</html>