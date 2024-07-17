<?php
    include '../php/controlador.php';
    $controlador = new controlador();
    $pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Yorking | Plantas Electricas</title>
    <?php $controlador->head('interno'); ?>
</head>
<body>
    <?php
        $controlador->menu('interno');
        $pagina->yorking();
        $controlador->footer('interno');
        $controlador->scripts('interno');
    ?>
</body>
</html>