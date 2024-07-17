<?php
	include 'php/controlador.php';
	$controlador = new controlador();
	$pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Suministros en DataCenter | Implementaciones en DataCenter | Proyectos IT en DataCenter | WDC MAYORISTA</title>
	<?php $controlador->head('externo'); ?>
</head>
<body>
	<?php
		$controlador->menu('externo');
		$pagina->index();
    	$controlador->footer('externo');
    	$controlador->pop_up();
    	$controlador->scripts('externo');
    ?>
</body>
</html>