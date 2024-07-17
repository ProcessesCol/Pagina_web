<?php
	include 'php/controlador.php';
	$controlador = new controlador();
?>
<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<title>WISNETWORKS | WIS Networks | WDC MAYORISTA</title>
	<?php $controlador->head(); ?>
</head>
<body>
	
	 <?php $controlador->menu(); ?>
	 <!--Carousel-->
	  <div style="height: 450px;" class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="http://serverdesarrollo/Proyectos_actuales/wdcmayorista.com/codigo/frontpage/v6/imagenes/ruijie-networks-proteccion-cloud.png"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
  </div>
<!--panel-->
 	<div class="row">
 		<div class="center">Wis Networks</div>
 	</div>
 	<div>
 		<div class="row">
 			<div class="col s9">1</div>
 			<div class="col s3">233333333333333333333333333333333333333333</div>
 		</div>
 	</div>
  <!--fooder-->
  <?php $controlador->footer_principal(); ?>

	<?php $controlador->footer(); ?>

</body>
</html>