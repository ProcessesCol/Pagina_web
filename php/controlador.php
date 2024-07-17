<?php
	class controlador {
		function head($a) {
			$directorio = '';
			if ($a == 'interno') {
				$directorio = '../'; 
			}
			?>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				<link rel="shortcut icon" href="<?php echo $directorio; ?>almacenamiento/img/favicon.png">
				<link rel="stylesheet" href="<?php echo $directorio; ?>librerias/materialize/css/materialize.min.css">
				<link rel="stylesheet" href="<?php echo $directorio; ?>librerias/socicon/socicon.css">
				<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
				<link rel="stylesheet" href="<?php echo $directorio; ?>css/completos/index.css?id=<?php echo date('dmYHis'); ?>">
				<link rel="stylesheet" href="<?php echo $directorio; ?>css/completos/media_queries.css?id=<?php echo date('dmYHis'); ?>">
			<?php
		}
		function menu($a) {
			$directorio = '';
			if ($a == 'interno') {
				$directorio = '../';
			}
			?>
				<nav style="height: 120px; position: fixed; top: 0; z-index: 2;" class="grey lighten-4 footer navbar-menu">
				    <div class="container" style="position: relative;">
				        <div class="nav-wrapper">
				            <a href="<?php echo $directorio; ?>index.php" class="brand-logo"><img class="brand-logo" src="<?php echo $directorio; ?>almacenamiento/img/logo.png" height="110px" style="padding: 5px;"></a>
				            <a href="#" data-target="mobile-demo" class="sidenav-trigger sub-titulo"><i class="material-icons">menu</i></a>
				            <div class="hide-on-med-and-down" style="line-height: 0;position: absolute;right: 0;top: 0;width: 108px;">
				            	<a href="https://facebook.com" target="_blank" class="btn-flat waves-effect waves-dark" style="height: auto;"><i class="socicon socicon-facebook" style="color: #3b5998;"></i></a>
				            	<a href="https://instagram.com" target="_blank" class="btn-flat waves-effect waves-dark" style="height: auto;"><i class="socicon socicon-instagram" style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);-webkit-background-clip: text;background-clip: text;-webkit-text-fill-color: transparent"></i></a>
				            </div>
				            <ul class="hide-on-med-and-down" style="bottom: -120px;position: absolute;right: 0;">
				                <li><a class="sub-titulo" href="<?php echo $directorio; ?>index.php"><b style="font-weight: 500;">Inicio</b></a></li>
				                <li><a class='dropdown-trigger sub-titulo' href='#' data-target='dropdown1'><b style="font-weight: 500;">Portafolio</b><i class="material-icons right">arrow_drop_down</i></a></li>
				                <ul id='dropdown1' class='dropdown-content'>
				                    <li><a href="<?php echo $directorio; ?>portafolio/wdc.php">Por que WDC es mayorista</a></li>
				                    <li><a href="<?php echo $directorio; ?>portafolio/wdc.php#marcas" id="link_marcas">Marcas</a></li>
				                </ul>
				                <li><a class='dropdown-trigger sub-titulo' href='#' data-target='dropdown2'><b style="font-weight: 500;">Contactenos</b><i class="material-icons right">arrow_drop_down</i></a></li>
				                <ul id='dropdown2' class='dropdown-content'>
				                    <li><a href="<?php echo $directorio; ?>contacto/contacto.php">Formulario</a></li>
				                    <li><a href="<?php echo $directorio; ?>contacto/distribuidor.php">Como ser nuestro distribuidor</a></li>
				                    <li><a href="<?php echo $directorio; ?>contacto/ubicacion.php">Como llegar</a></li>
				                    <li><a target="_blank" href="<?php echo $directorio; ?>almacenamiento/POLITICAS-TRATAMIENTO-DE-DATOS-WDC.pdf">Politica de tratamiento de datos</a></li>
				                </ul>
				                <li><a class='dropdown-trigger sub-titulo' href='#' data-target='dropdown3'><b style="font-weight: 500;">Novedades</b><i class="material-icons right">arrow_drop_down</i></a></li>
				                <ul id='dropdown3' class='dropdown-content'>
				                    <li><a href="<?php echo $directorio; ?>novedades/pagos.php">Pagos con datáfonos</a></li>
				                </ul>
				            </ul>
				        </div>
				    </div>
				</nav>
				<ul class="sidenav" id="mobile-demo">
				    <li><a class="sub-titulo" href="<?php echo $directorio; ?>index.php">Inicio</a></li>
				    <ul class="collapsible collapsible-accordion">
				        <li class="">
				            <a class="collapsible-header sub-titulo" tabindex="0">Portafolio<i class="material-icons">arrow_drop_down</i></a>
				            <div class="collapsible-body" style="">
				                <ul>
				                    <li><a class="sub-titulo" href="<?php echo $directorio; ?>portafolio/wdc.php">Por que WDC es mayorista</a></li>
				                    <li><a class="sub-titulo" id="sidenav_marcas" href="<?php echo $directorio; ?>portafolio/wdc.php#marcas">Marcas</a></li>
				                </ul>
				            </div>
				        </li>
				    </ul>
				    <ul class="collapsible collapsible-accordion">
				        <li class="">
				            <a class="collapsible-header sub-titulo" tabindex="0">Contactenos<i class="material-icons">arrow_drop_down</i></a>
				            <div class="collapsible-body" style="">
				                <ul>
				                    <li><a class="sub-titulo" href="<?php echo $directorio; ?>contacto/contacto.php">Formulario</a></li>
				                    <li><a class="sub-titulo" href="<?php echo $directorio; ?>contacto/distribuidor.php">Como ser nuestro distribuidor</a></li>
				                    <li><a class="sub-titulo" href="<?php echo $directorio; ?>contacto/ubicacion.php">Como llegar</a></li>
				                    <li><a target="_blank" class="sub-titulo" href="<?php echo $directorio; ?>almacenamiento/POLITICAS-TRATAMIENTO-DE-DATOS-WDC.pdf">Politica de tratamiento de datos</a></li>
				                </ul>
				            </div>
				        </li>
				    </ul>
				    <ul class="collapsible collapsible-accordion">
				        <li class="">
				            <a class="collapsible-header sub-titulo" tabindex="0">Novedades<i class="material-icons">arrow_drop_down</i></a>
				            <div class="collapsible-body" style="">
				                <ul>
				                    <li><a class="sub-titulo" href="<?php echo $directorio; ?>novedades/pagos.php">Pagos con datáfonos</a></li>
				                </ul>
				            </div>
				        </li>
				    </ul>
				</ul>
				<div style="padding: 60px;"></div>
			<?php
		}
		function footer($a) {
			$directorio = '';
			if ($a == 'interno') {
				$directorio = '../';
			}
			?>
				<div class="row" style="margin-bottom: 0;">
				    <div class="col s12 grey lighten-4">
				        <div class="col s12 l3">
				            <h3 class="center parrafo-titulo">WDC MAYORISTA</h3>
				            <p class="parrafo center">
				                Con una experiencia orientada a centros de datos, Suministro en DataCenter, implementaciónes en DataCenter y proyectos de IT. Nos hemos enfocado al 	suministro de sus proyectos corporativos. Continuamente integramos un portafolio con nuevas tecnologías y solidas marcas, cubriendo sus necesidades 	especializadas de: infraestructura, conectividad, seguridad informática, autonomía energética, Procesamiento, acceso remoto, entre otros.
				            </p>
				            <p class="parrafo center">
				                <b>WDC MAYORISTA</b> es su aliado tecnológico en proyectos corporativos, Trabajando constantemente en un servicio diferencial al mercado, y día a día alcanzando la excelencia y liderazgo para ustedes nuestros clientes y proveedores. Hemos logrado posicionarnos como los mejores proveedores de 	Suministro en DataCenter, implementaciones en DataCenter y proyectos de IT.
				            </p>
				        </div>
				        <div class="col s12 l6 center">
				            <h3 class="center marcas-title">MARCAS</h3>
				            <div class="col s12 marcas-icons">
				                <a class="color" href="<?php echo $directorio; ?>cdp/cdp.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">battery_full</i>
				                        <p style="margin-top: 0;">CDP</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>tenda/tenda.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">wifi</i>
				                        <p style="margin-top: 0;">TENDA</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>wisnetworks/wisnetworks.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">signal_cellular_alt</i>
				                        <p style="margin-top: 0;">WIS-NETWORK</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				            </div>
				            <div class="col s12 marcas-icons">
				                <a class="color" href="<?php echo $directorio; ?>ruijienetworks/ruijienetworks.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">rss_feed</i>
				                        <p style="margin-top: 0;">RUIJIE</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>bitdefender/bitdefender.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">security</i>
				                        <p style="margin-top: 0;">BITDEFENDER</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>inspur/inspur.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">dns</i>
				                        <p style="margin-top: 0;">INSPUR</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				            </div>
				            <div class="col s12 marcas-icons">
				                <a class="color" href="<?php echo $directorio; ?>yorking/yorking.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">power</i>
				                        <p style="margin-top: 0;">YORKING</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>tsplus/tsplus.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">qr_code_scanner</i>
				                        <p style="margin-top: 0;">TS-PLUS</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>tablero_transferencia/tablero_transferencia.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">bolt</i>
				                        <p style="margin-top: 0;">TAB. DE TRANSFERENCIA</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				            </div>
				            <div class="col s12 marcas-icons">
				                <a class="color" href="<?php echo $directorio; ?>pisos/pisos.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">apps</i>
				                        <p style="margin-top: 0;">PISOS FALSOS</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>windows/windows.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">desktop_windows</i>
				                        <p style="margin-top: 0;">WINDOWS SERVER</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				                <a class="color" href="<?php echo $directorio; ?>metal-mecanica/metal-mecanica.php">
				                    <div class="col s4 icon">
				                        <i class="material-icons">view_in_ar</i>
				                        <p style="margin-top: 0;">METAL MECANICA</p>
				                    	<div class="barra-marca-footer"></div>
				                    </div>
				                </a>
				            </div>
				        </div>
				        <div class="col s12 l3 contactenos">
				            <div class="row">
					                <div class="row">
					                	<button class="col s6 offset-s3 btn-flat waves-effect waves-dark telefono-footer" style="text-align: left;"><i class="socicon-whatsapp" style="color: #00c853;"></i> <span style="font-size: 18px;color: #566573;">+57 301 535 09 64</span></button>
					                	<div class="divider container col s6 offset-s3"></div>
					                </div>
					            	<div class="row">
					            		<button class="col s6 offset-s3 btn-flat waves-effect waves-dark telefono-footer" style="text-align: left;"><i class="material-icons blue-text">call</i> <span style="font-size: 18px;color: #566573;">+507 462 0060</span></button>
					                	<div class="divider container col s6 offset-s3"></div>
					            	</div>
				            </div>
				            <div class="col s12 center">
				                <a href="<?php echo $directorio; ?>contacto/contacto.php" class="btn-flat green white-text waves-effect waves-light col s8 offset-s2"><i class="material-icons left">email</i><b>CONTACTENOS</b></a>
				            </div>
				            <div class="col s12 center contactenos-icons" >
				                <a href="https://facebook.com" target="_blank" class="btn-flat waves-effect waves-dark" style="height: auto;"><i class="socicon socicon-facebook" style="color: #3b5998;"></i></a>
				            	<a href="https://instagram.com" target="_blank" class="btn-flat waves-effect waves-dark" style="height: auto;"><i class="socicon socicon-instagram" style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);-webkit-background-clip: text;background-clip: text;-webkit-text-fill-color: transparent"></i></a>
				            </div>
				        </div>
				        <!--fin-->
				    </div>
				</div>
				<!--cliengo-->
				<div class="chat-whatsapp-wrapper">
				    <div class="col s12 center titulo-chat-whatsapp">
				        <i class="socicon-whatsapp white-text"></i>
				        <b class="white-text">WhatsApp</b>
				        <i class="material-icons white-text">close</i>
				    </div>
				    <div class="col s12 contenido-chat-whatsapp">
				        <h6 class="center"><b>Completa con tus datos</b></h6>
				        <p class="center">Te comunicaremos con uno de nuestros asesores</p>
				        <div class="input-field col s12">
				            <input id="nombre_whatsapp" type="text" class="validate" required>
				            <label for="nombre_whatsapp" class="black-text">Nombre</label>
				        </div>
				        <div class="row">
				            <div class="col s12">
				                <div class="col s5" style="padding-left: 0;">
				                    <div class="input-field col s12 no-padding">
				                        <select id="indicativo">
				                            <option value="1" selected>CO (+57)</option>
				                            <option value="2">PA (+507)</option>
				                        </select>
				                    </div>
				                </div>
				                <div class="input-field col s7 no-padding">
				                    <input id="telefono_whatsapp" type="number" min="10000000" max="9999999999" class="validate" required>
				                    <label for="telefono_whatsapp" class="black-text">Teléfono</label>
				                </div>
				            </div>
				            <div class="input-field col s12">
				                <input id="mensaje_whatsapp" type="text" class="validate" required>
				                <label for="mensaje_whatsapp" class="black-text">Mensaje</label>
				            </div>
				            <div class="col s12 center">
				                <button class="btn-flat waves-effect waves-light white-text" id="iniciar_chat"><b>Iniciar Chat</b></button>
				            </div>
				        </div>
				    </div>
				</div>
				<button class="btn-whatsapp btn-large waves-effect waves-light white-text no-padding"><i class="socicon-whatsapp"></i></button>
				<!--End Chat WhatsApp -->
				<!--Start Chat Chatbot -->
				<div class="chat-chatbot-wrapper">
				    <div class="col s12 center titulo-chatbot">
				        <i class="material-icons">brightness_1</i>
				        <b class="white-text">WDC Mayorista</b>
				        <i class="material-icons white-text">close</i>
				    </div>
				    <div class="contenido-chatbot">
				        <div class="row">
				            <div class="col s12 contenido-chat-chatbot grey lighten-3" id="contenido-chat-chatbot">
				                <div class="col s12 no-padding nombre-bot">
				                    Camilo:
				                </div>
				                <div class="col s10 mensaje-bot white-text">
				                    Hola, Me gustaría poderte ayudar, Claro!!! solo en temas comerciales o de ventas, cuéntame como:
				                </div>
				            </div>
				            <div class="col s12">
				                <div class="input-field col s9 no-padding" style="margin: 0;">
				                    <input id="mensaje_chatbot" type="text" required placeholder="Escribe un mensaje..." class="validate" style="border: none;box-shadow: none;">
				                </div>
				                <button class="btn-flat blue waves-effect waves-light right" data-position="left" id="enviar_mensaje" style="margin-top: 6px;"><i class="material-icons white-text">send</i></button>
				            </div>
				        </div>
				    </div>
				</div>
				<i class="notificacion-chatbot">1</i>
				<button class="btn-chatbot btn-large waves-effect waves-light white-text no-padding"><i class="socicon-identica"></i></button>
				<div class="col s12 l12" style="padding: 0; margin: 0">
				    <div class="center" style="background: #259B40; color: white;">
				        Teléfonos: <b>+571 462 0060</b> | 
				        <a href="mailto:comercial@wdcmayorista.com"><b class="white-text">Envienos un correo haciendo clic aquí</b></a> | Dirección: Calle 88 # 30 - 49 | Barrio San Martín |<b>Bogotá - Colombia</b><br>
				        <a href="<?php echo $directorio; ?>almacenamiento/POLITICAS-TRATAMIENTO-DE-DATOS-WDC.pdf" target="_blank">
				        <b class="white-text">Politicas de tratamiento de datos</b>
				        </a>
				        <br>
				        © <?php echo date('Y'); ?>, todos los derechos reservados  ||  
				        <b>Desarrollado por: 
				        <a class="white-text" target="_blank" href="http://www.grupotecnologico.org">Grupo Tecnológico</a>
				        </b>
				    </div>
				</div>
			<?php
		}
		function scripts($a) {
			$directorio = '';
			if ($a == 'interno') {
				$directorio = '../';
			}
			?>
				<script src="<?php echo $directorio; ?>librerias/jquery-3.6.0.min.js"></script>
				<script src="<?php echo $directorio; ?>librerias/materialize/js/materialize.min.js"></script>
				<script src="<?php echo $directorio; ?>js/completos/index.js?id=<?php echo date('dmYHis'); ?>"></script>
			<?php
		}
		function pop_up() {
			?>
				<div class="fondo_pop_up">
					<center>
						<div style="margin-top: 20px;">
							<a href="pagos.php"><img class="img-pop-up" src="almacenamiento/img/mini_datafono.jpg" draggable="false" alt="Ahora con la incorporación de este mini datafono, podrá 		realizar sus compras con tarjetas crédito y débito"></a>
							<br><br>
							<button class="btn_cerrar_popup btn-large red waves-effect waves-light"><div class="icono_cerrar">&times;</div>Cerrar</button>
							<br><br>
							<button class="btn-small white black-text btn_cerrar_perma_popup waves-effect waves-light"><div class="icono_cerrar">&times;</div>Cerrar 		permanentemente</button>
						</div>
					</center>
				</div>
			<?php
		}
	}
	class paginas {
		function index() {
			?>
				<div class="row">
			        <div class="col s12 no-padding">
			            <div class="carousel carousel-slider">
			            	<a class="carousel-item" href="#one!"><img class="responsive-img" src="almacenamiento/carousel/inicio/ruijie-networks-proteccion-cloud.webp"></a>
			            	<a class="carousel-item" href="#one!"><img class="responsive-img" src="almacenamiento/carousel/inicio/comprar-con-tarjetas-credito-debito.webp"></a>
			            	<a class="carousel-item" href="#one!"><img class="responsive-img" src="almacenamiento/carousel/inicio/ups-planta-electrica.webp"></a>
			            	<a class="carousel-item" href="#one!"><img class="responsive-img" src="almacenamiento/carousel/inicio/infraestructura-requerida.webp"></a>
			            	<a class="carousel-item" href="#one!"><img class="responsive-img" src="almacenamiento/carousel/inicio/proteger-datos.webp"></a>
			            </div>
			        </div>
			    </div>
			    <h1 style="font-size:37px;" class="center">Suministros de DataCenter</h1>
			    <div class="container">
					<div class="row">
						<div class="row">
							<a href="wisnetworks/wisnetworks.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/wis-networks.png"></div></a>
							<a href="kipor/kipor.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/kipor.jpg"></div></a>
							<a href="yorking/yorking.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/yorkingg.png"></div></a>
							<a href="tenda/tenda.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/tenda.jpg"></div></a>
						</div>
						<div class="row">
							<a href="bitdefender/bitdefender.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/bitdefender.png"></div></a>
							<a href="inspur/inspur.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/inspur.png"></div></a>
							<a href="pisos/pisos.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/pisos-falsos-elevados.png"></div></a>
							<a href="cdp/cdp.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/cdp.png"></div></a>
						</div>
						<div class="row">
							<a href="tablero_transferencia/tablero_transferencia.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/tableros-transferencia.png"></div></a>
							<a href="windows/windows.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/sistemas-operativos.png"></div></a>
							<a href="ruijienetworks/ruijienetworks.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/ruijie.png"></div></a>
							<a href="tsplus/tsplus.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/ts-plus.png"></div></a>
						</div>
						<div class="row">
							<a href="metal-mecanica/metal-mecanica.php"><div class="col s6 m3 center offset-m3"><img class="img1" src="almacenamiento/img/rack-gabinetes-metalmecanica.jpg"></div></a>
							<a href="pentesting/pentesting-pruebas-vulnerabilidad.php"><div class="col s6 m3 center"><img class="img1" src="almacenamiento/img/pentesting-pruebas-vulnerabilidad.png"></div></a>
						</div>
					</div>
			    </div>
			<?php
		}
		function wisnetworks(){
			?>
				<div class="row">
      				<div class="col s12 no-padding">
       					<div class="carousel carousel-slider">
       					  <?php
       					    $imagenes_carousel = scandir('../almacenamiento/carousel/wisnetworks');
       					    for ($i=0; $i < count($imagenes_carousel); $i++) { 
       					      if ($imagenes_carousel[$i] != '.' && $imagenes_carousel[$i] != '..') {
       					        ?>
       					          <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/wisnetworks/<?php echo $imagenes_carousel[$i]; ?>"></a>
       					        <?php
       					      }
       					    }
       					  ?>
       					</div>
      				</div>
  				</div>
				<div class="col s12 center">
					<h1 class="title-wisnetworks">Wis Networks</h1>
				</div>
 				<br /><div class="divider container"></div><br /><br />
				<div class="container">
 					<div class="row">
 						<div class="col s12 l9">
 							<div class="col s12">
 								<div class="col s12 center">
 									<img class="responsive-img" src="../almacenamiento/img/logo-wis-networksll.png">
 								</div>
 								<div class="col s12 l12">
 									<p class="text-wisnetworks" style="line-height: 1.2;">
										<b>
											WISNETWORKS es la marca actual con la cual ofrecemos productos WIFI/LAN para todo el mundo, como estaciones base WIFI, Antenas WIFI, CPE’s WIFI, Bridges WIFI, puntos de acceso WIFI, punto a punto p+p y punto Multi-punto p+m, troncales centralizadas, enlaces, soluciones centralizadas de internet.
										</b>
									</p>
									<p class="text-wisnetworks" style="font-weight: 300;line-height: 1.2;">
										Con los productos de conectividad inalámbrica, podrás tener acceso a la red, ya que sus conexiones y enlaces  podrían alcanzar al menos de 10 a 40 km de distancia de cobertura de red, lo que la hace una solución estable, segura y asequible. 
									</p>
 								</div>
 							</div>
 						</div>
 						<div class="col s12 l2 center img-cont-wisnetworks">
 							<a href="http://www.wisnetworks.com/web/index.php" target="_blank"><img class="img-all borde responsive-img" src="../almacenamiento/img/wislinkll.png" title="ver link"><p>Ver mas productos...</p></a>
 						</div>
 					</div>
 				</div>	
 				<div class="divider container"></div><br>
 				<div class="container">
 					<img class="responsive-img" src="../almacenamiento/img/wis1.png">
 				</div>
			<?php
		}
		function kipor() {
			?>
				<div class="row">
				    <div class="col s12 no-padding">
				        <div class="carousel carousel-slider">
				            <a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/kipor/plantas_electricas_kipor.jpg"></a>
				            <a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/kipor/plantas-electricas-gran-gama-generadores-confiables.png"></a>
				        </div>
				    </div>
				</div>
				<h1 class="center title-wisnetworks">KIPOR</h1>
				<div class="divider container"></div>
				<br>
				<div class="row container">
				    <div class="col s12 l9">
				        <div class="col s12 l12 center">
				            <img class="responsive-img" src="../almacenamiento/img/logo-kipor.png">
				            <br>
				            <br>
				            <br>
				            <br>
				        </div>
				        <div>
				            <p class="text-wisnetworks" style="line-height: 1.2;">
				            	<b>
				            		Plantas Eléctricas KIPOR de gran gama y generadores confiables KIPOR, las Plantas Eléctricas KIPOR maneja potencias desde 0.7 Kva a 75 Kva en las versiones monofásico y trifásico, con combustible Gasolina y Diésel, abiertas e insonorizadas, Los motores KIPOR manejan revoluciones de motor de 1.800 RPM a 3.600 RPM.
				            	</b>
				            </p>
				        </div>
				    </div>
				    <div class="col s12 l3 center">
				        <a href="http://us.kipor.com/index.php?option=categories&category_id=82&category=general-generator&brand=&sort=&showPage=37" target="_black">
				            <img class="img-all borde responsive-img" src="../almacenamiento/img/kiporlink.png">
				            <p>Toca la imagen para mas informacion...</p>
				        </a>
				    </div>
				</div>
				<div class="row">
				    <div class="container">
				        <h2 class="center title"><b>Con plantas eléctricas KIPOR usted contará con los siguientes beneficios:</b></h2>
				        <div class="col s12">
				            <p class="title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Con Plantas Eléctricas KIPOR tendrá: Energía pura, silenciosa y eficiente.
				            </p>
				        </div>
				        <div class="col s12">
				            <p class="title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">El consumo de combustible es menos en las Plantas Eléctricas KIPOR al de un generador convencional, además de esto, restauran su poder en menos de 10 segundos.</p>
				        </div>
				        <div class="col s12">
				            <p class="title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Cuenta con un sistema de monitoreo remoto, el cual permite un control de las Plantas Eléctricas KIPOR desde cualquier lugar, con un dispositivo tu móvil, Tablet o computador.</p>
				        </div>
				        <div class="row">
				            <h2 class=" col s12 center title"><b>Las ventajas de tener su Planta Eléctrica monitoreada las 24 horas son:</b></h2>
				            <p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Acceso a encender y apagar su Planta Eléctrica KIPOR en cualquier momento y desde cualquier lugar.</p>
				            <p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Envío mediante email o mensajes de texto de alarmas, advertencias, arranques y paro del equipo, estado del nivel de ACPM según las programaciones realizadas en su Planta Eléctrica KIPOR.</p>
				            <p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Plataforma gráfica fácil de usar.</p>
				            <p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Localización constante del equipo (Estacionario o móvil).</p>
				            <p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Verificación y recomendaciones constantes del estado de su Planta Eléctrica KIPOR.</p>
				        </div>
				        <div class="col s12 m6 center">
				            <img class="responsive-img" src="../almacenamiento/img/generadores-kipor-de-nueva-generacion.jpg">
				        </div>
				        <div class="col s12 m6 center">
				            <h4 class="title-parrafo-n" style="border: none;font-size: 19.6px;line-height: 1.4;"><b>"Los generadores KIPOR llevan la nueva generación AVR que mantiene la fluctuación del voltaje en el nivel mínimo. <br>
				                El AVR tiene una función deportacción por sobrecargas, cuando la carga es mayor a 110% el exitador del AVR suspenderá la salida del voltaje."
				                </b>
				            </h4>
				        </div>
				    </div>
				</div>
			<?php
		}
		function yorking(){
			?>
				<div class="row">
					<div class="col s12 no-padding">
						<div class="carousel carousel-slider">
							<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/yorking/plantas_electricas_yorking.webp"></a>
							<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/yorking/plantas-electricas-y-diesel-yorking.webp"></a>
						</div>
					</div>
				</div>
 				<h1 class="center title">YORKING</h1>
 				<br>
 				<div class="center divider"></div>
 				<br>
 				<div class="container">
 					<div class="row">
 						<div class="col s12 l9 center">
 							<div class="col s12">
 								<img class="responsive-img" src="../almacenamiento/img/logo-yorking.png">
 							</div>
 						<div class="col s12">
 							<p class="text-wisnetworks" style="line-height: 1.2;">
 								<b>
 									La nueva línea de Plantas eléctricas YORKING o Generadores YORKING tienen un excelente desempeño con motores de alta gama, chasis robusto y módulo de control digital o analógico, las plantas eléctricas YORKING van desde 5 KVA a 110 KVA en las versiones monofásico y trifásico, con revoluciones de motor de 1.800 RPM a 3.600 RPM, las plantas eléctricas YORKING usan combustible Gasolina y Diésel
 								</b>
 							</p>
 						</div>
 					</div>
 					<div class="col s12 l3 center">
 						<a target="_blank" href="http://www.yorkingpower.com/index.php?lang=en-us"><img class="img-all borde responsive-img" src="../almacenamiento/img/Yorking-DieselGenerator.jpg"><p>Click para mas informacion...</p></a>
 					</div>
 					<div class="row">
 						<h2 class=" col s12 center title"><b>Las ventajas de tener su Planta Eléctrica Yorking:</b></h2>
 						<p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Las plantas eléctricas YORKING permiten no cortar el suministro eléctrico en sus oficinas, fábricas o almacenes, ya que están diseñadas para mantener continuamente la energía y así asegurar el normal funcionamiento de todos los procesos y equipos que requieran electricidad.</p>
 						<p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Las plantas eléctricas YORKING evitarán pérdidas económicas ya que impide que se afecte un proceso de fabricación, ya sean productos alimenticios, marroquinería, textiles, entre otros. También garantizará el normal funcionamiento de un evento social, oficina o local comercial.</p>
 						<p class="col s12 title-parrafo" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">Cada planta eléctrica YORKING, es sometida a exhaustivas pruebas y almacenada con todos los cuidados necesarios en un ambiente limpio y seco. Además, el despacho de nuestra parte es manejado por operadores especialmente entrenados.</p>
 						<div class="col s12 m6 center">
 							<img class="responsive-img" src="../almacenamiento/img/plantas-yorking-necesidades-empresa.jpg">
 						</div>
 						<div class="col s12 m6 center">

 							<h4 class="title-parrafo-n" style="border: none;font-size: 19.6px;line-height: 1.4;"><b>Las plantas eléctricas YORKING tienen una capacidad de entre 5 y 110 kilovatios (KVA), dependiendo de las necesidades de su empresa como: restaurantes, supermercados, hoteles, maquilas, oficina, local comercial, etc.
 							</b></h4>
 						</div>
 					</div>
 					</div>
 				</div>
			<?php
		}
		function tenda(){
			?>
				<div class="row">
					<div class="col s12 no-padding">
						<div class="carousel carousel-slider">
							<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/tenda/tenda-technology-proveedor-lider.webp"></a>
							<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/tenda/productos-tenda.webp"></a>
						</div>
					</div>
 				</div>
 				<h1 class="center title">TENDA TECHNOLOGY</h1>
 				<br>
 				<div class="center divider"></div>
 				<br>
 				<div class="container">
 					<div class="row">
 						<div class="col s12 l9 center">
 							<div class="col s12">
 								<img class="responsive-img" src="../almacenamiento/img/logo-tenda.png">
 							</div>
 							<div class="col s12">
 								<p class="text-wisnetworks" style="line-height: 1.2;">
 									<b>
 										TENDA Technology es nuestro proveedor líder de dispositivos y equipos de red. El compromiso de Tenda es proporcionar soluciones fáciles de instalar y con un precio asequible, ofreciendo productos innovadores de tecnología de punta, para satisfacer las necesidades de los usuarios. ya sean en linea de consumo (Hogar) o en la linea Corporativa (Small and Business).
 									</b>
 								</p>
 								<p class="text-wisnetworks" style="font-weight: 300;line-height: 1.2;">La gama de productos Tenda incluye redes domésticas, redes de empresas, conmutadores, CPE de banda ancha, puertas de enlace, línea eléctrica, banda ancha móvil, cámaras IP, etc. Todos los productos Tenda proporcionan un excelente rendimiento y una señal estable, son fáciles de usar e instalar y ofrecen una calidad superior a un precio competitivo.</p>
 								<p class="text-wisnetworks" style="font-weight: 300;line-height: 1.2;">Una gran empresa debe tener un excelente socio estratégico. Tenda estableció una asociación estratégica con Broadcom en 2012 y se convirtió en el socio más importante de Broadcom en China. Los productos de Tenda incorporan chips de Broadcom, similares a los de los dispositivos Apple, para ofrecer un rendimiento excelente.
 								</p>
 							</div>
 						</div>
 						<div class="col s12 l3 center">
 							<img class="img-all borde responsive-img" src="../almacenamiento/img/tendalink.png">
 							<br>
 							<a href="https://www.tendacn.com/mx/product/forbusiness-101.html" target="_blank">Mas informacion de productos inalimabicos</a>
 							<br>
 							<a href="https://www.tendacn.com/mx/product/forbusiness-103.html" target="_blank"><img class="img-all borde responsive-img" src="../almacenamiento/img/tendalink1.png"></a>
 						</div>
 						<div class="row">
 							<div class="col s12">
 								<p class="text-wisnetworks" style="font-weight: 300;line-height: 1.2;">Hoy día Tenda Technology desarrolla y comercializa sus productos basado en una Misión y visión: velocidad, seguridad y red inteligente en cualquier momento y en cualquier lugar. generando Valores principales hacia nuestros clientes como:</p>
 								<p class="title-parrafo-red" style="margin-bottom: -5px;line-height: 1.2;">Beneficio mutuo.</p>
	 							<p class="title-parrafo-red" style="margin-bottom: -5px;line-height: 1.2;">Satisfacción del cliente.</p>
	 							<p class="title-parrafo-red" style="margin-bottom: -5px;line-height: 1.2;">Cumplimiento.</p>
	 							<p class="title-parrafo-red" style="margin-bottom: -5px;line-height: 1.2;">Esfuerzo y empuje.</p>
	 							<p class="title-parrafo-red" style="margin-bottom: -5px;line-height: 1.2;">Trabajo en equipo.</p>
	 							<p class="title-parrafo-red" style="margin-bottom: -5px;line-height: 1.2;">Honestidad y consecución.</p>
	 							<p class="title-parrafo-red" style="margin-bottom: -5px;line-height: 1.2;">Servicios, calidad, excelencia y profesionalidad.</p>
	 							<p class="title-parrafo-red" style="margin-bottom: -5px;line-height: 1.2;">Espíritu, motivación, innovación y confianza.</p>
 							</div>
 						</div>
 					</div>
 				</div>
			<?php
		}
		function bitdefender(){
			?>
				<div class="row">
      				<div class="col s12 no-padding">
        				<div class="carousel carousel-slider">
							<?php
								$imagenes_carousel = scandir('../almacenamiento/carousel/bitdefender');
								for ($i=0; $i < count($imagenes_carousel); $i++) { 
									if ($imagenes_carousel[$i] != '.' && $imagenes_carousel[$i] != '..') {
										?>
											<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/bitdefender/<?php echo $imagenes_carousel[$i]; ?>"></a>
										<?php
									}
								}
							?>
        				</div>
      				</div>
  				</div>
 				<h1 class="center title">BITDEFENDER</h1>
 				<br>
 				<div class="center divider"></div>
 				<br>
 				<div class="container">
 					<div class="panel-body" style="background-color: #020202;">
 						<div class="row">
 							<div class="col s10 m12">
  							<div class="col s6" style="border-right: 1px #fff solid;">
  								<h3 class="center panel-body-text">HOGAR</h3>
  							</div>
  							<div class="col s6">
  								<h3 class="center panel-body-text">CORPORATIVO</h3>
  							</div>
							</div>
 						</div>
 					</div>
 					<div class="col s12 center"><img class="img-bitdefender" src="../almacenamiento/img/logo-bitdefender.png" style="margin-bottom: 20px;"><b class="subtitulo" style="font-size: 36px;">Bitdefender</b></div><br>
 					<div class="divider"></div>
 					<div class="row">
 						<div class="col m8 s12">
 							<div class="col l12 s12"><h2 class="center title-bitdefender"><b>PROTEJA SU COMPAÑÍA CONTRA LA AMENAZA DEL RANSOMWARE</b></h2></div>
 							<div class="col l12 s12">
 								<p class="center parrafo-bitdefender" style="line-height: 1.2;">
 									El Ransomware se ha convertido rápidamente en una de las amenazas más temidas en los entornos empresariales, donde su enfoque principal  es el Secuestro de la información y pedir un rescate por la liberación.
								</p>
							</div>
 						</div>
 						<div class="col m4 s12 border center" style="margin-top: 20px;">
 							<img class="img2-bitdefender" src="../almacenamiento/img/proteja-su-compania-contra-ransomware.png">
 						</div>
 					</div>
 					<div class="divider"></div><br>
 					<div class="row">
 						<div class="col s12 l12">
 							<div class="col m4 s12 center">
 								<img class="img3-bitdefender" src="../almacenamiento/img/soluciones-bitdefender.png">
 							</div>
 							<div class="col m8 s12">
 								<div class="col s12 l9"><h2 class="center title-bitdefender"><b>PARA CADA NECESIDAD ENCONTRARÁ UNA SOLUCIÓN</b></h2></div>
 								<div class="col s12"><p class="center parrafo-bitdefender" style="font-weight: 300;line-height: 1.2;text-align: center;">Excelente producto que ofrece la mejor seguridad y protección de su información, a muy bajo costo y con toda la facilidad de manejo.</p></div>
 							</div>
 						</div>
 					</div>	
 					<div class="divider"></div><br>
 					<div class="row">
 						<div class="col s12 l12">
 							<div class="col s12 m4">
 								<h2 class="center title-bitdefender"><b>BITDEFENDER VS RASOMWARE</b></h2>
 								<p class="center parrafo-bitdefender" style="font-weight: 300;line-height: 1.2;">
 									Con un Portafolio muy amplio, BITDEFENDER garantiza un 99.97% de efectividad en la Protección de la Información de su Compañía, con todas sus capas fusionadas, brindan solución en Prevención, Detección Temprana y Reparación.
 								</p>
 							</div>
 							<div class="col s12 m8">
 								<div class="title-parrafo-red"> 
 									<h4 class="col s12 title-bitdefender"><b>-PREVENCIÓN:</b></h4>
 									<p class="center parrafo-bitdefender" style="font-weight: 300;line-height: 1.2;">
 										Sin importar lo mucho que cambie el malware o el Ransomware, Bitdefender puede detectar con precisión los nuevos patrones de Ransomware, tanto en tiempo de 	ejecución como previamente
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<h4 class="col s12 title-bitdefender"><b>- DETECCIÓN TEMPRANA:</b></h4>
 									<p class="center parrafo-bitdefender" style="font-weight: 300;line-height: 1.2;">
 										Monitorización de procesos en tiempo real, cortando de raíz las actividades y procesos del Ransomware, como modificaciones de claves de registro, acciones de lectura, escritura, cifrados de información.
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<h4 class="col s12 title-bitdefender"><b>- REPARACIÓN / LIMPIEZA:</b></h4>
 									<p class="center parrafo-bitdefender" style="font-weight: 300;">
 										La solución tiene la capacidad de cerrar un proceso malicioso, revertir cambios y limpiar.
 									</p>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<img class="responsive-img" src="../almacenamiento/img/seguridad-bitdefender.png" width="100%">
			<?php
		}
		function inspur() {
			?>
				<div class="row">
					<div class="col s12 no-padding">
						<div class="carousel carousel-slider">
							<a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/inspur/servidores-inspur.webp"></a>
							<a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/inspur/servidor-tipo-torre-tipo-rack.webp"></a>
						</div>
					</div>
  				</div>
 				<h1 class="center title">INSPUR</h1>
 				<br>
 				<div class="center divider container"></div>
 				<br>
 				<div class="container">
 					<div class="row">
 						<div class="col s12 l9 center">
 							<div class="col s12">
 								<img class="responsive-img" src="../almacenamiento/img/logo-inspur.png">
 							</div>
 							<div class="col s12">
 							<p class="text-wisnetworks" style="line-height: 1.2;">
 								<b>
 									Los servidores de Inspur tienen una línea completa de productos desde lo inferior hasta lo superior, incluyendo la serie de servidor de tipo Torre tradicional y servidor en tipo Rack, son máquinas para satisfacer de todos aspectos las necesidades personalizadas de usuarios de la industria.
 								</b>
 							</p>
 							</div>
 						</div>
 						<div class="col s12 l3 center">
 							<a href="https://es.inspur.com/xibanya/504623/505108/504836/index.php" target="_blank"><img class="img-all borde responsive-img" src="../almacenamiento/img/inspurlink.png"><p>Mas informacion del producto...</p></a>
 						</div>
 					</div>
 					<div class="divider"></div>
 					<div class="row">
 						<div class="col s4 m3"></div>
 						<div class="col s12 m5 center">
 							<div class="title-bitdefender"><h4 class="title-bitdefender"><b>SERVIDOR FORMATO TORRE</b></h4></div>
 							<div class="title-parrafo-blue"> 
 								<p class="parrafo-inspur" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">
 								Procesador Intel® Xeon® E3-1270V5 (3.60 GHZ)/8M/4C
 								</p>
 							</div>
 							<div class="title-parrafo-blue"> 
 								<p class="parrafo-inspur" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">
 								Memoria RAM 8GB DDR4 UDIMM-EU
 								</p>
 							</div>
 							<div class="title-parrafo-blue"> 
 								<p class="center parrafo-inspur" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">
 								Disco Duro 2TB SATA (Enterprise)
 								</p>
 							</div>
 							<div class="title-parrafo-blue"> 
 								<p class="center parrafo-inspur" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">
 								2 Puertos Integrados de Red Gigabit
 								</p>
 							</div>
 							<div class="title-parrafo-blue"> 
 								<p class="center parrafo-inspur" style="font-weight: 300;margin-bottom: -5px;line-height: 1.2;">
 								Fuente de Poder 300W 100-240V
 								</p>
 							</div>
 						</div>
 						<div class="col s12 m4 center">
 							<img class="responsive-img" src="../almacenamiento/img/servidor-inspur-formato-torre.png">
 						</div>
 					</div>
 					<div class="divider"></div>
 					<br>
 					<div class="row">
 						<div class="col s12 l12 center">
 							<div class="col s12 m6 center"><img class="responsive-img" src="../almacenamiento/img/servidor-inspur-formato-rack-1u.png"></div>
 							<div class="col s12 m6">
 								<div class="title-bitdefender"><h4 class="title-bitdefender"><b>SERVIDOR FORMATO RACK DE 1U</b></h4></div>
 									<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;">
 										Con procesador Intel® Xeon® E5-2603V4 (1.7GHz/6c)/6.4GT/15ML3, socket para un 2do procesador disponible, Memoria RAM 8GB RDIMM DDR4, Disco Duro 300GB SAS 10K 2.5" Raid: Intergated 12G SAS controller + RAID 5, Key (NF5170M4 on board SAS controller), 2 Puertos Integrados de Red Gigabit, Fuente de Poder 100-240V X 2 Redundante, Riser PCI - E Riser card kit.
 									</p>
 								<div class="title-bitdefender"><h4 class="title-bitdefender"><b>INCLUYE:</b></h4></div>
 								<div class="title-parrafo-blue"> 
 									<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									SEGUNDO SOCKET PARA PROCESADOR.
 									</p>
 								</div>
 								<div class="title-parrafo-blue"> 
 									<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									DISCO DURO 300GB SAS 2.5
 									</p>
 								</div>
 								<div class="title-parrafo-blue"> 
 									<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									FUENTE DE PODER REDUNDANTE.
 									</p>
 								</div>
 								<div class="title-parrafo-blue"> 
 									<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									UNIDAD DE DVD.
 									</p>
 								</div>
 								<div class="title-parrafo-blue"> 
 									<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									KIT O CAJAS DE DISCOS DUROS.
 									</p>
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="divider"></div>
 					<br>
 					<div class="row">
 						<div class="col l12 s12 center">
 							<div class="col m7 s12">
 								<div class="title-bitdefender"><h4 class="title-bitdefender"><b>SERVIDOR FORMATO RACK DE 2U</b></h4></div>
 									<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;">
 										Con procesador Intel® Xeon® E5-2609V4 (1.7GHz/8c)/6.4GT/20ML3, socket para un 2do procesador disponible, Memoria RAM 8GBX2 (16GB) RDIMM DDR4, Disco Duro 300GB SAS 10K 2.5" Raid: 8 - channel SAS RAID - 9271-81 (1G EN CACHE), 2 Puertos Integrados de Red Gigabit, Fuente de Poder 300W 100-240V x 2 Redundante.
 									</p>
 									<div class="title-bitdefender"><h4 class="title-bitdefender"><b>INCLUYE:</b></h4></div>
 									<div class="title-parrafo-blue"> 
 										<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 										TARJETA CONTROLADORA SAS / SATA.
 										</p>
 									</div>
 									<div class="title-parrafo-blue"> 
 										<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 										SEGUNDO SOCKET PARA PROCESADOR.
 										</p>
 									</div>
 									<div class="title-parrafo-blue"> 
 										<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 										SEGUNDO SOCKET PARA PROCESADOR.
 										</p>
 									</div>
 									<div class="title-parrafo-blue"> 
 										<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 										DISCO DURO 300GB SAS 2.5.
 										</p>
 									</div>
 									<div class="title-parrafo-blue"> 
 										<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 										FUENTE DE PODER REDUNDANTE.
 										</p>
 									</div>
 									<div class="title-parrafo-blue"> 
 										<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 										 UNIDAD DE DVD.
 										</p>
 									</div>
 									<div class="title-parrafo-blue"> 
 										<p class="center parrafo-inspur" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 										KIT O CAJAS DE DISCOS DUROS.
 										</p>
 									</div>
 							</div>
 							<div class="col m5 s12">
 								<img class="responsive-img" src="../almacenamiento/img/servidor-inspur-formato-rack-2u.png">
 							</div>
 						</div>
 					</div>
 				</div>
			<?php
		}
		function pisos(){
			?>
				<div class="row">
      				<div class="col s12 no-padding">
        				<div class="carousel carousel-slider">
							<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/pisos/pisos-falsos-wdc-mayorista.webp"></a>
							<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/pisos/pisos-elevados-acero-fibra-celulosica.webp"></a>
        				</div>
      				</div>
 				</div>
 				<div class="container">
 					<br>
 					<div class="center divider"></div>
 					<br>
 					<div class="row">
 						<div class="col l12 s12">
 							<div class="col s12 l9">
 								<h1 class="title center"><b>WDC MAYORISTA PISOS FALSOS</b></h1>
 								<div class="text-wisnetworks">
 									<p class="title-all" style="line-height: 1.2;">
 										<b>PISOS ELEVADOS De alta resistencia en Acero - Fibra Celulósica, Recubrimiento Micarta Estructura Sismo Resistente, Utilizados en Centros de Cómputo, Centrales Telefónicas, Data Center, Edificios, Oficinas Inteligentes, Salas de Estudio, Salas de Monitoreo.</b>
 									</p>
 									<p class="title-all" style="line-height: 1.2;">
 										<b>Contamos con personal altamente calificado especializado en el desarrollo de proyectos e implementaciones de DATA CENTER, brindando soluciones e innovaciones en aplicaciones especializadas para todo el Diseño y Construcción.</b>
 									</p>
 								</div>
 							</div>
 							<div class="col s12 l3 center">
 								<a href="../contacto/contacto.php"><img class="img-all borde responsive-img" src="../almacenamiento/img/pisoslink.png"><p>Cotizar con WDC</p></a>
 							</div>
 						</div>
 					</div>
 					<div class="divider"></div><br>
 					<div class="row">
 						<div class="col m5 s12 center">
 							<div class="col s12 l12 center"><img class="responsive-img" src="../almacenamiento/img/piso-elevado-tipo-americano-acero-alta-resistencia.png" width="70%"></div>
 							<div class="col s12 l12 center"><img class="responsive-img" src="../almacenamiento/img/piso-elevado-tipo-americano-fibra-celulosica.png" width="70%"></div>
 							<div class="col s12 l12 center"><img class="responsive-img" src="../almacenamiento/img/piso-elevado-tipo-americano-acero-alta-resistencia-fibra-celulosica.png" width="70%"></div>
 						</div>
 						<div class="col m7 s12 borde">
 							<div class="title-all">
      							<h3 class="title-pisos center"><b>PISO ELEVADO TIPO AMERICANO</b></h3>
								<p class="title-all">
									<p style="line-height: 1.2;">
										<b style="font-weight: 400;">EN ACERO DE ALTA RESISTENCIA:</b> <span style="font-weight: 300;line-height: 1.2;">Es el piso más resistente que existe en el mercado colombiano y tiene excelente comportamiento en áreas de tráfico pesado donde instalan equipos hasta de 2.000 Kg.</span>
									</p>
									<h6 class="center"><b>CARACTERÍSTICAS TÉCNICAS </b></h6>
									<ul style="font-weight: 300;line-height: 1.2;">
					  					<li>MODULACIÓN DE BALDOSAS – 24” X 24”</li>
					  					<li>PROTECCIÓN – Pintura Electroestática</li>
					  					<li>
					  						MATERIAL – Paneles de acero SAE 1010, embutida en frío con 25 celdas y 36 nervaduras estructurales cada baldosa. Electro Soldadas.
					  					</li>
					  					<li>RECUBRIMIENTO SUPERIOR – Alfombra modular. Laminado de alta presión Antiestática Micarta 1/16.</li>
					  					<li>
					  						PROTECCIÓN PERIMETRAL – Empaque de PVC termo formado que sirven como ajuste del piso y como protector de los bordes de a lámide Micarta.
					  					</li>
					  					<li>ESPESOR – 30mm</li>
					  					<li>PESO POR METRO CUADRADO – 40kg</li>
					  					<li>RESISTENCIA – 2.000 Kg. Distribuido por M2.</li>
					  					<li>RESISTENCIA A RODAMIENTO DEL LAMINADO DE ALTA PRESIÓN – 10.000 Ciclos.</li>
									</ul>
									<p style="line-height: 1.2;">
										<b style="font-weight: 400;">EN FIBRA CELULÓSICA:</b> <span style="font-weight: 300;line-height: 1.2;">El sistema es acústico, evita la propagación de ruidos como el emitido por los equipos electromecánicos.</span>
									</p>
									<h6 class="center"><b>CARACTERÍSTICAS TÉCNICAS </b></h6>
									<ul style="font-weight: 300;line-height: 1.2;">
									  	<li>MODULACIÓN DE BALDOSAS – 24” X 24”</li>
									  	<li>RECUBRIMIENTO SUPERIOR – Alfombra modular. Laminado de alta presión Antiestática Micarta 1/16.</li>
									  	<li>RECUBRIMIENTO INFERIOR – Backer retardante al fuego.</li>
									  	<li>NÚCLEO – Fibra celulósica.</li>
									  	<li>PROTECCIÓN PERIMETRAL – Empaque de PVC termo.</li>
									  	<li>ESPESOR – 32mm</li>
									  	<li>PESO POR METRO CUADRADO – 28kg</li>
									  	<li>RESISTENCIA – 1.400 Kg. Distribuido por M2.</li>
									  	<li>RESISTENCIA A RODAMIENTO DEL LAMINADO DE ALTA PRESIÓN – 10.000 Ciclos.</li>
									</ul> 
								</p> 
								<br>
 							</div>
 						</div>
 					</div>	<br>
 					<div class="divider"></div><br>
 					<div class="row">
 						<div class="col s12 m7 title-all borde">
 							<div class="title-all">
								<h3 class="title-pisos center">SOPORTES Y ESTRUCTURAS</h3>
								<p class="title-all">
									<b style="font-weight: 400;">CABEZAL:</b>
									<p style="font-weight: 300;line-height: 1.2;">
										Acero calibre 12, estampado en forma de cruz para recibir cuatro, baldosas y los stringer. Soldado con un tornillo de acero rosca 5/8, ecual entra en la  tuerca del tubo base y se puede desplazar permitiendo la nivelación a la altura requerida.
									</p>
									<b style="font-weight: 400;">BASE:</b>
									<p style="font-weight: 300;line-height: 1.2;">
										Consta de un tubo en acero de 1” exterior calibre 80 con la longitud necesaria para alcanzar la altura requerida. En el extremo inferiolleva una platina de acero de 10cm x 10cm soldada al tubo. 
									</p>
									<b style="font-weight: 400;">TORRE PERIMETRAL:</b>
									<p style="font-weight: 300;line-height: 1.2;">
										Utiliza para el inicio del montaje y recibir los módulos recortados de piso elevado en las zonas donde se necesiten cortes por defectode área.
									</p>
								</p>
							</div>
 						</div>
 						<div class="col s12 m5 center">
 							<img class="inline" src="../almacenamiento/img/soportes-estructuras.png" width="50%">
 							<img class="inline" src="../almacenamiento/img/cabezales-bases-torres-perimetrales.png" width="50%">
 						</div>
 					</div>
 					<div class="divider"></div><br/>
 					<div class="row">
 						<div class="col s12 l12 center">
 							<div class="col s12 m5">
 								<img src="../almacenamiento/img/accesorios-vidrio-templado.png" width="60%">
 								<img src="../almacenamiento/img/accesorios-baldosas-perforadas.png" width="60%">
 							</div>
 							<div class="col s12 m7 borde">
 								<p class="title-all">
    								<h3 class="title-pisos center">ACCESORIOS</h3>
									<p style="text-align: justify;line-height: 1.2;font-size: 18px;">
										<b style="font-weight: 400;">BALDOSAS EN VIDRIO TEMPLADO</b> <span style="font-weight: 300;line-height: 1.2;">Fabricadas con dos láminas de vidrio templado, cada una de 1cm de espesor, unidas entre sí, con una película de seguridad que se adhiere entre los dos módulos para una mayor resistencia.
										Son utilizados en zonas de inspección donde se tienen que revisar constantemente las conexiones que son prioridad en los centros de cómputo, etc.</span>
									</p>
									<p style="text-align: justify;">
										<b style="font-weight: 400;font-size: 18px;">BALDOSA PERFORADA PARA SALIDA DE AIRE ACONDICIONADO</b>
									</p>
									<h6 class="center"><b>CARACTERÍSTICAS TÉCNICAS </b></h6>
									<ul style="text-align: justify;font-weight: 300;line-height: 1.2;font-size: 18px;">
								  		<li>MODULACIÓN DE BALDOSAS – 24” X 24”</li>
								  		<li>PROTECCIÓN – Pintura Electroestática.</li>
								  		<li>
								  			MATERIAL – Paneles de acero SAE 1010, perforación con diámetro de 5/16 en un 60% y o 40% según las necesidades y requerimientos técnicos para remitir el paso del aire acondicionado y para refrigeración de los equipos en los centros de cómputo.
								  		</li>
								  		<li>Electro soldado y protegido con pintura electrostática color aluminio.</li>
								  		<li>RECUBRIMIENTO SUPERIOR – Laminado de alta presión Antiestática Micarta 1/16.</li>
								  		<li>
								  			PROTECCIÓN PERIMETRAL – Empaque de PVC termo formado que sirven como ajuste del piso y como protector de los bordes de a lámina de Micarta.
								  		</li>
								  		<li>ESPESOR – 32mm</li>
								  		<li>PESO POR METRO CUADRADO – 26kg</li>
									</ul> 
								</p>
 							</div>
 						</div>
 					</div>
 				</div>
			<?php
		}
		function cdp(){
			?>
			<div class="row">
   		   		<div class="col s12 no-padding">
   		   		  <div class="carousel carousel-slider">
   		   		    <a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/cdp/ups-cdp-chicago-digital-power.webp"></a>
   		   		    <a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/cdp/productos-cdp.webp"></a>
   		   		  </div>
   		   		</div>
 			 </div>
 			<div class="container">
 				<div class="divider"></div>
 					<div class="row">
 						<div class="col s12 l12">
 							<div class="col m7 s12">
 								<h1 class="text-36" style="text-align: center;">UPS CDP - Chicago Digital Power</h1>
 								<div class="row">
 									<div class="col s12 center"><img class="responsive-img" src="../almacenamiento/img/logo-cdp.png"></div>
 								</div>
 								<p class="text-body" style="line-height: 1.2;">
									<b>
										CDP son los productos de protección de energía de Chicago Digital Power Inc. son conocidos por su confiabilidad y valor, se fabrican con estrictas normas ISO y se prueban por completo para garantizar que los clientes tengan los mejores productos para su inversión. CDP fabrica con muchos estándares de seguridad que incluyen UL, TUV, CE, NOM, RETIE y muchos otros. Cada uno de nuestros productos es una expresión de nuestro compromiso con la calidad y el valor.
									</b>
								</p>
								<p class="text-body" style="font-weight: 300;line-height: 1.2;">
									CDP es un verdadero fabricante de productos de protección de energía; Por lo tanto, podemos personalizar cualquiera de nuestros productos para cumplir con sus requisitos específicos y ofrece una tecnología avanzada que aumenta el rendimiento y la confiabilidad, tendrá la seguridad de tener sus equipos protegidos con una fuente de energía que le permitirá garantizar la sostenibilidad eléctrica 7*24*365. 
								</p>
 							</div>
 							<div class="col m4 s12 center">
 								<br>
 								<a target=":blank" href="https://www.cdpenergy.com/#page=page-1"><img class="img-all borde responsive-img" src="../almacenamiento/img/cdplink.png"><p>Mas informacion del producto...</p></a>
 							</div>
 						</div>
 					</div>
 					<img class="responsive-img" src="../almacenamiento/img/productos-cdp-proteccion-energia.png">
 				</div>
			<?php
		}
		function tablero_transferencia() {
			?>
				 <div class="row">
      				<div class="col s12 no-padding">
						<div class="carousel carousel-slider">
							<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/tablero_transferencia/tableros-transferencia-wdc-mayorista.webp"></a>
							<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/tablero_transferencia/tablero-transferencia-automatica-tta.webp"></a>
						</div>
      				</div>
  				</div>
 				<div class="container">
 					<div class="divider"></div>
 					<div class="row">
 						<div class="col s12 l12">
 							<div class="col s12 l9">
    							<h1 class="text-36 center">
        		    				<b>WDC MAYORISTA TABLERO DE TRANSFERENCIA AUTOMATICA</b>
        		 				 </h1>
	    					</div>
	    					<div class="col s12 l3 center">
	    						<br>
	    						<a target="_blank" href="https://www.ac-cc.com/blog/como-funciona-un-tablero-de-transferencia-automatica"><img class="borde" src="../almacenamiento/img/7.png"><p>Mas informacion del producto</p></a>
	    					</div>	
	    				</div>
	   				</div>
	    			<div class="row">
	    				<div class="col s12 l12">
	    					<p class="text-wisnetworks">
       		      				<b>¿Qué es un tablero de transferencia automatica?</b>
       		      				<p style="font-size: 18px;line-height: 1.2;text-align: justify;">
       		      					<b>
       		      						Un Tablero de Transferencia Automática (TTA) es un dispositivo que permite, ante la falla del suministro de energía eléctrica externa, poner en marcha la 		planta eléctrica de respaldo. Este dispositivo hace que se activen los contactores o breakers motorizados correspondientes a la entrada de emergencia y dar energía desde la planta eléctrica, luego de cumplir con las pautas de encendido previstas para el mismo.
       		      					</b>
       		      				</p>
       		      				<p style="font-weight: 300;font-size: 18px;line-height: 1.2;text-align: justify;">
       		      					El TTA incluye un pulsador que permite realizar un encendido del motor sin realizar ninguna operación de transferencia de cargas eléctricas. Es útil para 		hacer un test manual periódico de estado del motor, para detectar anomalías en el mismo y así saber que se dispone del normal funcionamiento del mismo, cuando 		sea solicitado por una transferencia automática. Cada generador tiene sus características particulares por eso es necesario adaptar el TTA a cada máquina. 		También cada usuario tiene diferentes necesidades.
       		      				</p>
       		      				<p style="font-weight: 300;font-size: 18px;line-height: 1.2;text-align: justify;">
       		      					Con los conmutadores de transferencia ASCO, aproveche la ventaja de contar con un sistema de alimentación de emergencia equipado con la mejor tecnología de su 		clase. Los conmutadores de transferencia de alimentación ASCO de la serie 7000 están disponibles en configuraciones de derivación y aislamiento a fin de 		permitir pruebas en el conmutador sin interrumpir la alimentación de la carga. Si se requiere una solución integrada, los centros de carga de transferencia de 		alimentación ASCO están disponibles en configuraciones que pueden incluir un panel de carga de conmutación de transferencia, disyuntores y supresión de picos 		de tensión precableados en un paquete compacto.
       		      				</p>
       		      				<b style="font-size: 18px;">¿Porqué Usar los tableros de transferencia?</b>
       		      				<p style="font-weight: 300;font-size: 18px;line-height: 1.2;text-align: justify;">
       		      					Un TTA resulta un complemento muy útil para su grupo electrógeno o plantas eléctricas, en aquellos casos en que uno necesite un suministro de energía constante. Éste le brindará comodidad y tranquilidad al momento de una falla en la red externa de energía, poniéndose en marcha el equipo; son programables según las necesidades, con fuente de energía propia para asegurar su funcionamiento.
       		      				</p>
       		     				<p style="font-weight: 300;font-size: 18px;line-height: 1.2;text-align: justify;">
       		     					Un tablero de transferencia es la única forma segura de conectar directamente el generador a su hogar/comercio ya que aísla circuitos seleccionados de su 		hogar de las líneas eléctricas. Esto evita la retroalimentación, que ocurre cuando la alimentación eléctrica se reestablece.
       		     				</p>
       		     				<p style="font-weight: 300;font-size: 18px;line-height: 1.2;text-align: justify;">
       		     					La retroalimentación no sólo puede dañar el generador, sino que puede provocar un incendio.
       		     				</p>
       		     				<p style="font-weight: 300;font-size: 18px;line-height: 1.2;text-align: justify;">
       		     					A su vez, brinda la comodidad de despreocuparse de poner en marcha el grupo ya que al reconocer que no hay energía de red automáticamente este envía la señal a la lógica del grupo electrógeno poniéndose automáticamente en funcionamiento, procedimiento viceversa cuando el suministro de red se restablece.
       		     				</p>
       		      				<b style="font-size: 18px;">Características:</b>
       		    			</p>
       		     			<div class="title-parrafo-naranja"> 
 								<p class="center parrafo-tablero" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									Comportamiento frente a una falla de energía externa.
 								</p>
 							</div>
 							<div class="title-parrafo-naranja"> 
 								<p class="center parrafo-tablero" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									Arranque de motor.
 								</p>
 							</div>
 							<div class="title-parrafo-naranja"> 
 								<p class="center parrafo-tablero" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									Transferencia de cargas.
 								</p>
 							</div>
 							<div class="title-parrafo-naranja"> 
 								<p class="center parrafo-tablero" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									Espera de normalización de red externa.
 								</p>
 							</div>
 							<div class="title-parrafo-naranja"> 
 								<p class="center parrafo-tablero" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									Reconexión a red externa.
 								</p>
 							</div>
 							<div class="title-parrafo-naranja"> 
 								<p class="center parrafo-tablero" style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;">
 									Finalización de maniobra de reconexión a red externa.
 								</p>
 							</div>
	    				</div>
	    			</div>	
 				</div>
			<?php
		}
		function windows() {
			?>
				<div class="row">
      				<div class="col s12 no-padding">
        				<div class="carousel carousel-slider">
        					<a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/windows/windows-server.webp"></a>
        					<a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/windows/iones-redes-servicios-web-conectados.webp"></a>
        				</div>
     				</div>
 				</div>
 				<h1 class="center title">WINDOWS SERVER</h1>
 				<br>
 				<div class="container">
 					<div class="row">
 						<div class="col s12 l12">
 							<div class="col s12 l9 center">
 								<div class="col s12 l12">
 									<img class="responsive-img" src="../almacenamiento/img/logo-windows.png"><br/><br/>
 								</div>
 								<div class="col s12 l12">
 									<p class="text-wisnetworks" style="line-height: 1.2;">
										<b>Windows Server es una plataforma para compilar una infraestructura de aplicaciones, redes y servicios web conectados del grupo de trabajo al centro de 	datos. 	Windows Server incluye mecanismos integrados para resistir a infracciones de seguridad que permiten frustrar ataques en sus 	sistemas y facilitan 	el cumplimiento normativo. Incluso si alguien logra entrar en su entorno, las capas de seguridad que integra cada 	sistema Windows Server limitan 	los daños que puede causar.</b>
									</p>
 								</div>
 							</div>
 							<div class="col s12 l3 center">
 								<a target="_blank" href="https://www.microsoft.com/es-es/windows-server"><img class="img-all borde responsive-img" src="../almacenamiento/img/windowslink.png"><p>Mas informacion del producto</p></a>
 							</div>
 						</div>
 					</div>
 					<div class="divider"></div>
 					<br/>
 					<div class="title center" style="font-size: 24px;"><b>Con Windows Server obtendrás ayuda en:</b></div>
 					<br/>
 					<br/>
 					<div class="row center">
 						<div class="col s12 l12">
 							<div class="col s3 l3">
 								<img class="responsive-img" src="../almacenamiento/img/ayuda-windows-server.png" width="80">
 							</div>
 							<div class="col s9 l9">
 								<div class="title-parrafo-agua-windows">
 									<p class="text-wisnetworks" style="font-weight: 300;line-height: 1.2;">Bloquear ataques Pass-the-Hash y otros intentos de comprometer credenciales de administrador.</p>
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="divider"></div>
 					<br>
 					<div class="row center">
 						<div class="col s12 l12">
 							<div class="col s3 l3">
 								<img class="responsive-img" src="../almacenamiento/img/windows-server-evita-malware-ransomware-servidores.png" width="80">
 							</div>
 							<div class="col s9 l9">
 								<div class="title-parrafo-agua-windows">
 									<p style="font-weight: 300;line-height: 1.2;" class="text-wisnetworks">Evitar que se inyecte Malware y Ransomware en los servidores.</p>
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="divider"></div>
 					<br>
 					<div class="row center">
 						<div class="col s12 l12 center">
 							<div class="col s3 l3">
 								<img src="../almacenamiento/img/windows-server-identifica-infracciones-seguridad.png" width="80">
 							</div>
 							<div class="col s9 l9">
 								<div class="title-parrafo-agua-windows">
 									<p style="font-weight: 300;line-height: 1.2;" class="text-wisnetworks">Identificar con rapidez comportamientos que sugieran una infracción de seguridad en un servidor.</p>
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="divider"></div>
 					<br>
 					<div class="row center">
 						<div class="col s12 l12">
 							<div class="col s3 l3">
 								<img class="responsive-img" src="../almacenamiento/img/windows-server-extiende-proteccion-maquinas-virtuales.png" width="80">
 							</div>
 							<div class="col s9 l9">
 								<div class="title-parrafo-agua-windows">
 									<p style="font-weight: 300;line-height: 1.2;" class="text-wisnetworks">Extender la protección de los servidores físicos a las máquinas virtuales.</p>
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="divider"></div>
 				</div>
			<?php
		}
		function ruijienetworks(){
			?>
	 			<div class="row">
					<div class="col s12 no-padding">
						<div class="carousel carousel-slider">
							<?php
								$imagenes_carousel = scandir('../almacenamiento/carousel/ruijienetworks');
								for ($i=0; $i < count($imagenes_carousel); $i++) { 
									if ($imagenes_carousel[$i] != '.' && $imagenes_carousel[$i] != '..') {
										?>
											<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/ruijienetworks/<?php echo $imagenes_carousel[$i]; ?>"></a>
										<?php
									}
								}
							?>
						</div>
					</div>
  				</div>
				<div class="container">
	 				<div class="divider"></div>
	 				<br>
	 					<div class="row">
	 						<div class="col s12 l9">
	 							<div class="col s12 l12">
	 								<div class="title center">RUIJIE NETWORKS - RUIJIE CLOUD</div>
	 							</div>
	 							<div class="col s12 l12 center	">
	 								<br>
	 								<br>
	 								<img class="responsive-img" src="../almacenamiento/img/logo-ruijie.png">
	 							</div>
	 							<div class="col s12 l12">
	 								<p class="text-wisnetworks" style="line-height: 1.2;">
										<b>
											Ruijie Networks es LA MARCA No. 1 en China en conectividad y networking RUIJIE NETWORKS, hoy está disponible en Colombia, con valores agregados únicos. Sus requerimientos, proyectos, de conectividad, sean de tipo alámbrico o inalámbrico. Podrán ser cubierto con el portafolio RUIJIE Enterprise, con productos con performance, calidad, y de gama alta. Sin importar que su proyecto sea pequeño. La accesibilidad en el costo beneficio, y como la centralización en administración y monitoreo sobre un Cloud totalmente fácil, práctico y sin costo. Nos diferencia sobre nuestros competidores.
										</b>
									</p>
									<p style="font-weight: 300;line-height: 1.2;font-size: 18px;text-align: justify;">
										En Ruijie Networks Nuestros Acces Point, Gateway y swicht cuentan con protocolos y herramientas robustas y funcionales que le darán la oportunidad a usted y sus clientes de vivir una experiencia satisfactoria, y abierta a crecimiento.
									</p>
	 							</div>
	 						</div>
	 						<div class="col s12 l3 center">
	 							<a target="_blank" href="https://www.ruijienetworks.com/products"><img class="img-all borde responsive-img" src="../almacenamiento/img/ruijie-link.png"><p>Mas informacion del producto...</p></a>
	 						</div>
	 					</div>
	 					<div class="divider"></div>
	 					<br>
	 					<div class="row">
	 						<div class="col s12 m6">
	 							<b class="title-all">Small Business</b>
	 							<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Switches
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Switches Administrables Smart
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Switches Administrables Capa L2+
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Wifi y Wireless
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie AP Acces Point
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Gateway
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										 Ruije Cloud Services
 									</p>
 								</div>
	 						</div>
	 						<div class="col s12 m5">
	 							<div class="col s12 s12 center">
	 								<img class="img-all-2 responsive-img center" src="../almacenamiento/img/ruijie-networks-pequenas-empresas.png">
	 							</div>
	 							<div class="col s12 l12">
	 								<img class="img-all-2 responsive-img center" src="../almacenamiento/img/ruijie-networks-pequenos-negocios.png">
	 							</div>
	 						</div>
	 					</div>
	 					<div class="divider"></div>
	 					<br>
	 					<div class="row">
	 						<div class="col s12 l12">
	 							<div class="col s12 m5">
	 								<b class="title-all">Enterprise</b>
	 								<img class="center responsive-img" src="../almacenamiento/img/ruijie-enterprise.png" style="max-width: 100%; width: 450px;">
	 								
	 							</div>
	 							<div class="col s12 m6 center">
	 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Data Center Switches
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Core/Aggregation Switches
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Switches Apilables o switch stack
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Indoor Access Point
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Outdoor Access Point
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										Ruijie Wireless Controller
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										 Ruijie AP Acces Point
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										 Ruijie Cloud Management Software
 									</p>
 								</div>
 								<div class="title-parrafo-red"> 
 									<p style="font-weight: 300;line-height: 1.2;margin-bottom: -5px;" class="center parrafo-tablero">
 										 Ruije Cloud Services
 									</p>
 								</div>
	 							</div>
	 						</div>
	 					</div>
				</div>
	 				<div class="col s12 l12 center">
	 					<div class="title center"><b>RUIJIE NETWORKS - RUIJIE CLOUD SERVICES</b></div>
	 					<div class="col s12 l12">
	 						<img class="responsive-img" src="../almacenamiento/img/ruijie-cloud-nube-gestionable.png">
	 					</div>
	 				</div>
			<?php
		}
		function tsplus() {
			?>
				<div class="row">
				    <div class="col s12 no-padding">
				        <div class="carousel carousel-slider">
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/tsplus/tsplus-terminal-service-plus.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/tsplus/tsplus-mejor-solucion-acceso-remoto-cliente-servidor.png"></a>
				        </div>
				    </div>
				</div>
				<h1 class="center title">TSPLUS - TERMINAL SERVER PLUS</h1>
				<br>
				<div class="center divider"></div>
				<br>
				<div class="container">
				    <div class="row">
				        <div class="col s12 l9 center">
				            <div class="col s12">
				                <img class="responsive-img" src="../almacenamiento/img/logo-tsplus.png">
				            </div>
				            <div class="col s12">
				                <br>
				                <p class="text-wisnetworks" style="line-height: 1.2;">
				                	<b>
				                		TSPlus Terminal Service Plus es La mejor solución de acceso remoto cliente servidor / RDS remote desktop service y portal web.
				                	</b>
				                </p>
				            </div>
				        </div>
				        <div class="col s12 l3 center">
				            <a href="#">
				                <img class="img-all borde responsive-img" src="../almacenamiento/img/tspluslink.png">
				                <p>Mas informacion del producto...</p>
				            </a>
				        </div>
				        <div class="row">
				            <p class="text-justify text-wisnetworks">
				                <b>¿Qué es TSPlus?</b>
				                <p style="font-weight: 300;font-size: 18px;line-height: 1.2;text-align: justify;">
				                	Es absolutamente claro para sus usuarios remotos hacia una aplicación externa. que las aplicaciones remotas sean, se perciban  y se sienten de la misma forma que las aplicaciones de ejecución local. Por lo tanto, es una solución que realiza esta  función, ahorrando tiempo y dinero.
				                </p>
				                <p style="font-weight: 300;font-size: 18px;line-height: 1.2;text-align: justify;">
				                	TSPlus es excepcional para publicar las aplicaciones de Windows a través de Internet desde XP, Windows 7, Windows 8, Windows 10. asi mismo accediendo a servidores Windows Server, TSPlus es una solución simple, rápida y de bajo costo que elimina la complejidad de alternativas como Windows TSE (RDS) o Citrix.
				                </p>
				                <p style="font-weight: 300;font-size: 18px;line-height: 1.2;text-align: justify;">
				                	Como líder en soluciones de estilo de trabajo móvil, formas flexibles de trabajo home office, TSPlus incentiva a los ejecutivos a trabajar, reunirse y colaborar en cualquier lugar dentro y fuera de la organización, con cualquier dispositivo actual (Pcs tablet, moviles) tan fácilmente como lo harían en su propia oficina de forma segura y sencilla.
				                </p>
				                <b style="font-size: 18px;">¿Porqué usar TSPlus?</b>
				                <p style="font-weight: 300;font-size: 18px;line-height: 1.2;text-align: justify;">
				                	Con TSPlus Web -  usted tiene al instante cualquiera de sus aplicaciones de Windows. Uso de Java / HTML5 e incluso una conexión ActiveX. Los usuarios móviles pueden iniciar la aplicación desde cualquier dispositivo móvil (iPhone, iPad, Mac, Galaxy). TSPlus da la capacidad de ejecutar aplicaciones heredadas dentro del navegador web sin la necesidad de volver a escribir en ellos para el dispositivo específico. Por lo tanto, se ahorra tiempo y costos de capacitación.
				                </p>
				                <b style="font-size: 18px;">Características:</b>
				            </p>
				            <div class="padding">
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Acceso remoto a escritorio.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Herramientas Administrativas.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Impresoras Univesales.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Gateway Portal.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Web Credentials.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Webmaster Toolkit.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Web Access.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Compatibilidad con Active Directory.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Portable Client Generator.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Portal de aplicaciones web similares a Citrix.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    SecureWeb Tunnel.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Load Balancing.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Publicación de Aplicaciones.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Cliente HTML5 para ordenadores, tabletas y móviles.
				                </p>
				                <p class="col s12 title-parrafo" style="font-weight: 300;line-height: 1.2;margin-bottom: -10px;border-left-color: #FF8000;">
				                    Open on Client.
				                </p>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="divider container"></div>
				<br>
				<div class="row">
					<div class="col s12 center">
						<a class="waves-effect waves-light btn-large waves-effect waves-light green modal-trigger" href="#modal1">Ver demo<i class="material-icons right">keyboard_arrow_right</i></a>
					</div>
				</div>
				<div id="modal1" class="modal modal-fixed-footer">
				    <div class="modal-content">
				        <div class="modal-body">
				            <iframe width="100%" height="400" src="https://www.youtube.com/embed/hY80V9N4KDk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				        </div>
				    </div>
				    <div class="modal-footer">
				        <div class="divider"></div>
				        <a href="#!" class="modal-close waves-effect waves-light btn-flat red right white-text">Cerrar <i class="material-icons right">close</i></a>
				    </div>
				</div>
			<?php
		}
		function metal_mecanica() {
			?>
				<div class="row">
				    <div class="col s12 no-padding">
				        <div class="carousel carousel-slider">
				            <?php
				                $imagenes_carousel = scandir('../almacenamiento/carousel/metal-mecanica');
								for ($i=0; $i < count($imagenes_carousel); $i++) { 
									if ($imagenes_carousel[$i] != '.' && $imagenes_carousel[$i] != '..') {
										?>
											<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/metal-mecanica/<?php echo $imagenes_carousel[$i]; ?>"></a>
										<?php
									}
								}
			                ?>
				        </div>
				    </div>
				</div>
				<div class="center divider"></div>
				<h1 class="center title"><b>WDC MAYORISTA METALMECANICA</b></h1>
				<div class="container">
				    <div class="row">
				        <div class="col s12 l9 center">
				            <div class="col s12">
				                <p class="text-wisnetworks" style="line-height: 1.2;">
				                    <b>
				                    	Los Racks de red organizan los equipos de TI en gabinetes de servidores de tamaño estándar para una mayor eficiencia en todo el centro de datos. Los estilos de rack van desde bastidores de bastidor abierto que constan de dos o cuatro rieles de montaje (llamados postes) sin lados o puertas hasta gabinetes de rack bloqueables con rieles, puertas delanteras y traseras y paneles laterales.
				                    </b>
				                </p>
				            </div>
				        </div>
				        <div class="col s12 l3 center">
				            <a href="../contacto/contacto.php">
				                <img class="img-all borde responsive-img" src="../almacenamiento/img/metallink.jpg">
				                <p>Cotiza con nosotros</p>
				            </a>
				        </div>
				        <div class="col s12 l9 center">
				            <div class="col s12">
				                <p class="text-wisnetworks" style="font-weight: 300;line-height: 1.2;">
				                    La altura de un rack de equipo de red se mide en unidades designadas con la letra U (cada unidad de rack mide 1.75 pulgadas / 44.45 mm) de alto, los gabinetes de servidor están disponibles con capacidades que van desde 2U a 58U.
				                </p>
				                <p class="text-wisnetworks" style="font-weight: 300;line-height: 1.2;">
				                	Elija bastidores de suelo con ruedas giratorias o bastidores de montaje en pared para aplicaciones en las que el espacio de suelo es limitado o la seguridad adicional es importante. a la vez poseemos una linea de accesorios para estos gabinetes: multitomas, cooler fan, bandejas , canastillas etc..
				                </p>
			                    <b style="font-size: 18px;">Productos:</b>
				            </div>
				        </div>
				        <div class="row">
				            <div class="padding">
				                <p class="col s12 title-parrafo-black" style="font-weight: 300;margin-bottom: -10px;line-height: 1.2;">
				                    Racks y Gabinetes.
				                </p>
				                <p class="col s12 title-parrafo-black" style="font-weight: 300;margin-bottom: -10px;line-height: 1.2;">
				                    Racks para servidores y comunicaciones.
				                </p>
				                <p class="col s12 title-parrafo-black" style="font-weight: 300;margin-bottom: -10px;line-height: 1.2;">
				                    Armarios para servidores y comunicaciones.
				                </p>
				                <p class="col s12 title-parrafo-black" style="font-weight: 300;margin-bottom: -10px;line-height: 1.2;">
				                    Bastidores y armarios de servidores.
				                </p>
				                <p class="col s12 title-parrafo-black" style="font-weight: 300;margin-bottom: -10px;line-height: 1.2;">
				                    Multitomas eléctricas.
				                </p>
				                <p class="col s12 title-parrafo-black" style="font-weight: 300;margin-bottom: -10px;line-height: 1.2;">
				                    Bandejas micro perforadas.
				                </p>
				                <p class="col s12 title-parrafo-black" style="font-weight: 300;margin-bottom: -10px;line-height: 1.2;">
				                    Bandejas tipo servidor.
				                </p>
				            </div>
				        </div>
				    </div>
				</div>
			<?php
		}
		function pentesting() {
			?>
				<div class="row">
				    <div class="col s12 no-padding">
				        <div class="carousel carousel-slider">
				            <?php
								$imagenes_carousel = scandir('../almacenamiento/carousel/kipor');
								for ($i=0; $i < count($imagenes_carousel); $i++) { 
									if ($imagenes_carousel[$i] != '.' && $imagenes_carousel[$i] != '..') {
										?>
											<a class="carousel-item" href="#one!"><img  src="../almacenamiento/carousel/kipor/<?php echo $imagenes_carousel[$i]; ?>"></a>
										<?php
									}
								}
			                ?>
				        </div>
				    </div>
				</div>
				<h1 class="center title-wisnetworks">PENTESTING - PRUEBAS DE VULNERABILIDAD</h1>
				<div class="divider container"></div>
				<br>
				<div class="row container">
				    <div class="col s12 l9">
				        <div class="col s12 l12 center">
				            <img class="responsive-img" src="../almacenamiento/img/logo-kipor.png">
				            <br>
				            <br>
				            <br>
				            <br>
				        </div>
				        <div>
				            <p class="text-wisnetworks">
				            	<b>
				            		Plantas Eléctricas KIPOR de gran gama y generadores confiables KIPOR, las Plantas Eléctricas KIPOR maneja potencias desde 0.7 Kva a 75 Kva en las versiones monofásico y trifásico, con combustible Gasolina y Diésel, abiertas e insonorizadas, Los motores KIPOR manejan revoluciones de motor de 1.800 RPM a 3.600 RPM.
				            	</b>
				            </p>
				        </div>
				    </div>
				    <div class="col s12 l3 center">
				        <a href="http://us.kipor.com/index.php?option=categories&category_id=82&category=general-generator&brand=&sort=&showPage=37" target="_black">
				            <img class="img-all borde responsive-img" src="../almacenamiento/img/kiporlink.png">
				            <p>Toca la imagen para mas informacion...</p>
				        </a>
				    </div>
				</div>
				<div class="row">
				    <div class="container">
				        <h2 class="center title"><b>Con plantas eléctricas KIPOR usted contará con los siguientes beneficios:</b></h2>
				        <div class="col s12">
				            <p class="title-parrafo" style="font-weight: 300;">Con Plantas Eléctricas KIPOR tendrá: Energía pura, silenciosa y eficiente.
				            </p>
				        </div>
				        <div class="col s12">
				            <p class="title-parrafo" style="font-weight: 300;">El consumo de combustible es menos en las Plantas Eléctricas KIPOR al de un generador convencional, además de esto, restauran su poder en menos de 10 segundos.</p>
				        </div>
				        <div class="col s12">
				            <p class="title-parrafo" style="font-weight: 300;">Cuenta con un sistema de monitoreo remoto, el cual permite un control de las Plantas Eléctricas KIPOR desde cualquier lugar, con un dispositivo tu móvil, Tablet o computador.</p>
				        </div>
				        <div class="row">
				            <h2 class=" col s12 center title"><b>Las ventajas de tener su Planta Eléctrica monitoreada las 24 horas son:</b></h2>
				            <p class="col s12 title-parrafo" style="font-weight: 300;">Acceso a encender y apagar su Planta Eléctrica KIPOR en cualquier momento y desde cualquier lugar.</p>
				            <p class="col s12 title-parrafo" style="font-weight: 300;">Envío mediante email o mensajes de texto de alarmas, advertencias, arranques y paro del equipo, estado del nivel de ACPM según las programaciones realizadas en su Planta Eléctrica KIPOR.</p>
				            <p class="col s12 title-parrafo" style="font-weight: 300;">Plataforma gráfica fácil de usar.</p>
				            <p class="col s12 title-parrafo" style="font-weight: 300;">Localización constante del equipo (Estacionario o móvil).</p>
				            <p class="col s12 title-parrafo" style="font-weight: 300;">Verificación y recomendaciones constantes del estado de su Planta Eléctrica KIPOR.</p>
				        </div>
				        <div class="col s12 l6 center">
				            <img class="responsive-img" src="../almacenamiento/img/generadores-kipor-de-nueva-generacion.jpg">
				        </div>
				        <div class="col s12 l6 center">
				            <h4 class="title-parrafo-n"><b>"Los generadores KIPOR llevan la nueva generación AVR que mantiene la fluctuación del voltaje en el nivel mínimo. <br>
				                El AVR tiene una función deportacción por sobrecargas, cuando la carga es mayor a 110% el exitador del AVR suspenderá la salida del voltaje."
				                </b>
				            </h4>
				        </div>
				    </div>
				</div>
			<?php
		}
		function portafolio() {
			?>
				<div class="img-fondo responsive-img">
				    <div class="container">
				        <font color="#fff">
				            <div class="row">
				                <div class="col s12 contenido2">
				                    <h1 class="text-res">¿Por que elegirnos?</h1>
				                    <i class="material-icons">done</i>
				                    <h2 class="title-2">Nuestro portafolio Especializado</h2>
				                    <p>Consta de una integración en Centro de Datos y proyectos de Datacenter.</p>
				                </div>
				            </div>
				            <div class="row">
				                <div class="col s12 contenido2">
				                    <i class="material-icons">done</i>
				                    <h2 class="title-2">Variedad e innovación en Nuestro Portafolio</h2>
				                    <p>Ponemos a disposición nuevas marcas de gran desempeño, solidez, y rentabilidad, siendo productos sobresalientes en la competitividad comercial de canales.</p>
				                </div>
				            </div>
				            <div class="row">
				                <div class="col s12 contenido2">
				                    <i class="material-icons">done</i>
				                    <h2 class="title-2">Seguridad</h2>
				                    <p>Aportamos soluciones de Protección contra las constantes Amenazas Informáticas.</p>
				                </div>
				            </div>
				            <div class="row">
				                <div class="col s12 contenido2">
				                    <i class="material-icons">done</i>
				                    <h2 class="title-2">Asesoramiento Especializado Gratuito</h2>
				                    <p>Contamos con personal idóneo en asesorarlos en Procesamiento, Conectividad, seguridad IT, Autonomía energética, Infraestructura, etc.</p>
				                </div>
				            </div>
				            <div class="row">
				                <div class="col s12 contenido2">
				                    <i class="material-icons">done</i>
				                    <h2 class="title-2">Servicio Personalizado</h2>
				                    <p>Nuestro Personal Comercial y logístico siempre estará atento y en amable disposición de atenderle y brindarle SOLUCIONES.</p>
				                </div>
				            </div>
				            <div class="row">
				                <div class="col s12 contenido2"></div>
				            </div>
				            <br>
				            <br>
				            <br>
				            <br>
				        </font>
				    </div>
				</div>
				<h1 class="text-36 center" id="marcas">MARCAS</h1>
				<div class="row">
				    <div class="col s12 l12">
				        <div class="carousel">
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-bitdefender.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-cdp.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-hgst.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-inspur.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-intel-xeon.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-kipor.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-samsung.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-seagate.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-western-digital.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-wis-networks.png"></a>
				            <a class="carousel-item" href="#one!"><img class="carousel-logos" src="../almacenamiento/carousel/marcas/logo-ruijie.png"></a>
				            <a class="carousel-item" href="#one!"><img class="carousel-logos" src="../almacenamiento/carousel/marcas/logo-tenda.png"></a>
				            <a class="carousel-item" href="#one!"><img class="carousel-logos" src="../almacenamiento/carousel/marcas/logo-ts-plus.png"></a>
				            <a class="carousel-item" href="#one!"><img class="carousel-logos" src="../almacenamiento/carousel/marcas/logo-yorking.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/pisos-falsos-elevados-wdc-mayorista.png"></a>
				            <a class="carousel-item" href="#one!"><img src="../almacenamiento/carousel/marcas/logo-portafolio-windows-server.png"></a>
				        </div>
				    </div>
				</div>
				</div>
			<?php
		}
		function contacto() {
			?>
				<div class="img-fondo-contacto">
		            <div class="row">
		                <div class="col s12">
		                    <div class="container">
		                        <div class="col s12 fondo-contactanos valign-wrapper">
		                            <div class="col s12 l6">
		                                <div class="row">
		                                    <div class="col s12 no-padding">
		                                        <h5 class="white-text center"><b>WDC MAYORISTA S.A.S</b></h5>
		                                        <p class="center white-text">
		                                            <b>
		                                                comercial@wdcmayorista.com
		                                                <br>
		                                                Teléfonos: +571 462 0060
		                                                <br>
		                                                Calle 88 # 30 - 49 | Barrio San Martín
		                                                <br>
		                                                Bogotá - Colombia
		                                            </b>
		                                        </p>
		                                        <div class="divider"></div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="col s12 l6 center">
		                                <div class="row">
		                                    <div class="input-field col s12">
		                                        <input id="nombre" type="text" class="validate input-contacto" required placeholder="Nombre">
		                                    </div>
		                                    <div class="input-field col s12 wrapper-input-contacto">
		                                        <input id="correo" type="email" class="validate input-contacto" required placeholder="Correo">
		                                    </div>
		                                    <div class="input-field col s12 wrapper-input-contacto">
		                                        <input id="telefono" type="number" min="1000000" max="9999999999" class="validate input-contacto" required placeholder="Teléfono">
		                                    </div>
		                                    <div class="input-field col s12 wrapper-select-contacto">
		                                        <select id="asunto">
		                                            <option value="" disabled selected>Elige tu consulta...</option>
		                                            <option value="Cotización">Cotización</option>
		                                            <option value="Pregunta General">Pregunta general</option>
		                                            <option value="Afiliación">Afiliación</option>
		                                        </select>
		                                    </div>
		                                    <div class="input-field col s12 wrapper-textarea-contacto">
		                                        <textarea required id="mensaje" class="materialize-textarea input-contacto" data-length="2000" placeholder="Mensaje" style="height: 45px;"></textarea>
		                                    </div>
		                                    <div class="col s12 center">
		                                        <div class="g-recaptcha" data-sitekey="6LfkGjYUAAAAAJOUW9sR38es4gISJ2y2TNnxe06m"></div>
		                                        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
		                                        <br><br>
		                                    </div>
		                                    <div class="col s12 center">
		                                        <button class="btn btn-large green waves-effect waves-light" id="envio"><b>Contactar</b></button>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
			<?php
		}
		function distribuidores() {
			?>
				<div class="center">
			 		<h1 class="text-36">Distribuidores <b>WDC MAYORISTA</b></h1>
			 	</div>
			 	<div class="row">
			 		<div class="col s12 l12">
			 			<div class="col s12 l6">
			 				<img class="img-distribuidor responsive-img" src="../almacenamiento/img/distribuidores.png">
			 			</div>
			 			<div class="col s12 l6  grey lighten-3 cuadro-distribuidor">
			 				<p class="texto-distribuidor">
			 					WDC MAYORISTA S.A.S desea acompañarlo y brindarle soluciones que apoyen su Compañía, motivo por el cual presentamos los Requisitos  que debe cumplir paraserNuestro Distribuidor Autorizado para comercializar Nuestros Productos.
			 				</p>
			 			</div>
			 		</div>
			 	</div>
			 	<div class="container">
			 		<h1 class="text-36 linea-decoracion">Procedimiento para ser distribuidor de <b>WDC MAYORISTA</b></h1>
			 		<div class="divider"></div>
			 		<br>
			 		<div class="contenido">
			 			<div class="row">
			 				<div class="col s12 l12">
			 					<h1 class="b">1</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Descargar y diligenciar el  Formato  Registro Nuevo Cliente en su totalidad, con la firma del Representante Legal.
			 						</p>
			 						<div class="right-align">	
			 						<a target="_blank" href="../almacenamiento/formato.pdf" class="center waves-effect waves-light btn">Descargar Formato Registro</a>
			 						</div>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">2</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Adjuntar Cámara y Comercio no mayor a 30 días.
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">3</h1>
			 					<blockquote>
			 						<p class="lead">
			 							RUT actualizado.
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">4</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Cédula del Representante Legal.
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">5</h1>
			 					<blockquote>
			 						<p class="lead">
			 							3 Referencias comerciales no mayor a 30 días.
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">6</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Enviar la documentación a la dirección de correo <br> <a class="text-responsive" href="mailto:comercial@wdcmayorista.com">comercial@wdcmayorista.com</a>
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">7</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Una vez realizado el estudio de la documentación, se procederá con la activación de un código asignándole un Ejecutivo de Cuenta quien atenderá todos sus requerimientos.
			 						</p>
			 					</blockquote>
			 				</div>
			 				<div class="col s12 l12">
			 					<h1 class="b">8</h1>
			 					<blockquote>
			 						<p class="lead">
			 							Las 3 primeras compras son de contado, en el momento de solicitud de crédito este entrara a estudio en un comité de crédito y financiero o si lo requieres puede realizar su pago con cheque Pos Fechado a 30 días, validado por Covicheque - Covinoc o Asodatos.
			 						</p>
			 					</blockquote>
			 				</div>
			 			</div>

			 		</div>
			 			

			 	</div>
			<?php
		}
		function ubicacion() {
			?>
				<div class="mapa">
					<div class="row">
						<div class="col s2"></div>
						<div class="col s8">
							<center>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.1333198367611!2d-74.06371050004381!3d4.676954021135809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9aefc520b23d%3A0x68a77a92740f5c8e!2sCl.+88+%2330-49%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1508791893279" width="90%" height="700" frameborder="0" style="border:0" allowfullscreen=""></iframe> 
							</center>
						</div>
						<div class="col s2"></div>
					</div>
				</div>
			<?php
		}
		function pagos() {
			?>
				<div class="row">
				    <div class="col s12 no-padding">
				        <div class="carousel carousel-slider">
				            <?php
				                $imagenes_carousel = scandir('../almacenamiento/carousel/pagos');
								for ($i=0; $i < count($imagenes_carousel); $i++) { 
									if ($imagenes_carousel[$i] != '.' && $imagenes_carousel[$i] != '..') {
										?>
											<a class="carousel-item" href="#one!"><img class="responsive-img" src="../almacenamiento/carousel/pagos/<?php echo $imagenes_carousel[$i]; ?>"></a>
										<?php
									}
								}
			                ?>
				        </div>
				    </div>
				</div>
				<div class="container">
				    <br>
				    <div class="divider"></div>
				    <br>
				    <h1 class="titulo center">
				        ¡Mejoramos para usted!
				    </h1>
				    <br>
				    <br>
				    <p class="subtitulo center">
				        Ahora puede comprar con sus tarjetas de <u><b>crédito</b></u> y <u><b>débito</b></u>:
				    </p>
				    <div class="row">
				        <div class="col s12 l12">
				            <div class="col s6 l6 right-align"><img class="responsive-img" src="../almacenamiento/img/tarjeta-mastercard.jpg"></div>
				            <div class="col s6 l6"><img class="responsive-img" src="../almacenamiento/img/tarjeta-visa.jpg"></div>
				        </div>
				        <div class="center subtitulos-pagos">
				            <u><b>Y no solo eso... Ahora también:</b></u>
				        </div>
				    </div>
				    <br>
				    <div class="extra center">¡Hacemos domicilio y pagas cuando recibes el producto!</div>
				    <br>
				    <div class="col-md-12" style="margin-top: 40px;text-align: justify;">
				        <p style="text-align: center;"><span class="subtitulo_contenido_b">¿Cómo funciona?</span></p>
				        <br>
				        <br>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">Un domiciliario se dirigirá a la dirección acordada para entregar el paquete.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">Una vez en el lugar acordado, antes de realizar la entrega del producto solicitado, el domiciliario necesitará realizar uso de un datáfono que lleva consigo para ingresar una tarjeta de crédito o débito.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">Cuando se haya acreditado el pago, se entregará el producto en las fechas acordadas previamente y se otorgará el comprobante de la venta.</h4>
				        </div>
				    </div>
				    <div class="col-md-12" style="margin-top: 40px;text-align: justify;">
				        <p style="text-align: center;"><span class="subtitulo_contenido_b">¿Que beneficios tiene?</span></p>
				        <br>
				        <br>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El datáfono permitirá recibir pagos con tarjetas crédito y débito con banda magnética y chip.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El cliente recibirá el comprobante de la venta por E-mail.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">Nos permite llevar un control constante de la transacción realizada para garantizar la calidad del proceso.</h4>
				        </div>
				    </div>
				    <div class="col-md-12" style="margin-top: 40px;text-align: justify;">
				        <p style="text-align: center;"><span class="subtitulo_contenido_b">Para tener en cuenta:</span></p>
				        <br>
				        <br>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El valor del domicilio dependerá de: <b>la cantidad, el tipo, y el precio del producto</b> solicitado.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El proceso de compra es monitorizado y totalmente seguro.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El domiciliario(s) que entrega el producto esta debidámente identificado con un carnet que permitirá verificar la legimitidad del proceso.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">El domiEn caso de necesitarse, podrá dividir el pago total del producto solicitado dando una parte en efectivo y la parte restante usando alguna tarjeta crédito o débito.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">En caso de tener alguna duda, comuníquese con nosotros en cualquiera de las líneas que aparecen al final de esta página.</h4>
				        </div>
				        <div class="title-parrafo-agua">
				            <h4 class="text-body-pagos">* Las compras realizadas por este medio tienen un <b>recargo del 4%</b> sobre el valor de la compra.</h4>
				        </div>
				    </div>
				</div>
			<?php
		}
	}
?>