<?php
	include '../php/controlador.php';
	$controlador = new controlador();
	$pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubicación | WDC MAYORISTA</title>
	<?php $controlador->head('interno'); ?>
</head>
<body>
	<?php
		$controlador->menu('interno');
		$pagina->ubicacion();
		$controlador->footer('interno');
		$controlador->scripts('interno');
	?>
</body>
</html>