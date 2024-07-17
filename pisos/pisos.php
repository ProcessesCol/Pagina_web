<?php
	include '../php/controlador.php';
	$controlador = new controlador();
	$pagina = new paginas();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pisos falsos | Pisos Elevados, Soportes y Estructuras | WDC MAYORISTA</title>
	<?php $controlador->head('interno'); ?>
</head>
<body>
	<?php
		$controlador->menu('interno');
		$pagina->pisos();
		$controlador->footer('interno');
		$controlador->scripts('interno');
	?>
</body>
</html>