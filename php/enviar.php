<?php
    if (isset($_POST["parametros"]['envio_contacto'])) {
        $secret = "6LeCQlEUAAAAANbNf0lImkC3KkXusLp0YfsFIrb5";
        $response = $_POST['captcha'];
        if (isset($response) && $response != ''){
            $nombre=$_POST["parametros"]["nombre"];
            $pais=$_POST["parametros"]["pais"];
            $telefono=$_POST["parametros"]["telefono"];
            $asunto=$_POST["parametros"]["asunto"];
            $email=$_POST["parametros"]["correo"];
            $descripcion=$_POST["parametros"]["mensaje"];
            $mensaje='
                <html>
                <head>
                    <title>Contácto desde el de chat de la página web de WDC MAYORISTA</title>
                    <meta charset="utf-8">
                </head>
                <body style="background: '."url('https://i.ibb.co/85SmpBQ/fondo.jpg')".';background-size:24px auto;font-family: Arial, Helvetica, sans-serif;margin: 0;">
                    <br>
                    <table style="width: 100%;">
                        <tr style="text-align: center;">
                            <td></td>
                            <td style="padding-bottom: 20px;"><img width="350" height="auto" src="http://www.wdcmayorista.com/logo.png"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="width: 23.3%;"></td>
                            <td style="background:#F0F0F0;border:1px solid #333;border-radius: 15px;color:#333;padding: 15px;width: 43.3%;">
                                <h3 style="text-align: center;">¡Hola WDCMAYORISTA!</h3>
                                <h5 style="text-align: center;">Tienes un nuevo cliente en www.wdcmayorista.com</h5>
                                <h3 style="text-align: center;">Resumen de la conversación</h3>
                                <p style="text-align:center;">
                                    Fecha de envío: '.date('H:ia - d/m/Y').'
                                </p>
                                <br>
                                <h3 style="text-align: center;">Datos de contacto</h3>
                                <p>
                                    <b>Nombre completo: </b> '.$nombre.'
                                    <br><br>
                                    <b>Correo: </b> <a href="mailto:'.$email.'" style="color:#333;">'.$email.'</a>
                                    <br><br>
                                    <b>Teléfono: </b> <a href="tel:+57'.$telefono.'" style="color:#333;">'.$telefono.'</a>
                                    <br><br>
                                    <b>Ubicación: </b> '.$_POST['parametros']['ciudad'].', '.$_POST['parametros']['region'].', '.$_POST['parametros']['pais'].'
                                    <br><br>
                                    <b>Dirección IP: </b> '.$_POST['parametros']['ip'].'
                                    <br><br>
                                    <b>Asunto: </b>
                                    <p style="text-align: justify;">
                                        '.$asunto.'
                                    </p>
                                    <b>Mensaje: </b>
                                    <p style="text-align: justify;">
                                        '.$descripcion.'
                                    </p>
                                </p>
                                <br>
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="background: #333;text-align: center;width: 50%;"><p><a href="tel:+57'.$telefono.'" style="color: #FFF;">Llamar '.$nombre.'</a></p></td>
                                        <td style="background: #25D366;text-align: center;width: 50%;"><p><a href="https://api.whatsapp.com/send?phone=57'.$telefono.'&text=Hola, ví que necesitabas ayuda con: '.$asunto.'" style="color: #FFF;">Enviar WhatsApp '.$nombre.'</a></p></td>
                                    </tr>
                                </table>
                                <br><br>
                                <p style="text-align: center;"><u>Este mensaje es generado automáticamente, por favor no lo responda.</u></p>
                                <p style="text-align: center;">&copy; '.date('Y').', todos los derechos reservados || <a style="color: #333;" href="https://wdcmayorista.com">wdcmayorista</a></p>
                                </p>
                            </td>
                            <td style="width: 23.3%;"></td>
                        </tr>
                    </table>
                </body>
                </html>
            ';  
            $cabezera = "MIME-Version: 1.0" . "\r\n";
            $cabezera .= "Content-Type: text/html; charset=UTF-8\r\n";
            $cabezera .= "From: contacto@wdcmayorista.com"."\r\n";
            if(mail("diringenieria@wdcmayorista.com, comercial@wdcmayorista.com, dircomercial@wdcmayorista.com, facturacion@wdcmayorista.com", "Tienes un nuevo cliente por Contactanos: ".$nombre, $mensaje, $cabezera)) {
            //if(mail("carlos_06100@outlook.com", "Tienes un nuevo cliente por Contactanos: ".$nombre, $mensaje, $cabezera)) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
          echo 0;
        }
    } elseif(isset($_POST['envio_chatbot'])) {
        $nombre_corto = 'a '.$_POST['nombre_corto'];
        if ($nombre_corto == '') {
            $nombre_corto = '';
        }
        $contador_mensajes_bot = 0;
        $mensajes_bot_original = explode('//', $_POST['mensajes_bot']);
        $mensajes_bot = explode('//', $_POST['mensajes_bot']);
        $resumen_chat = '';
        $resumen_usuario = $_POST['tema'].'//'.$_POST['nombre'].'//'.$_POST['numero'].'//'.$_POST['correo'].'//'.$_POST['horario_llamar'].'//'.$_POST['consulta_adicional'];
        $resumen_usuario = explode('//', $resumen_usuario);
        $resumen_usuario = array_filter($resumen_usuario);
        for ($i=0; $i < count($resumen_usuario); $i++) {
            if (isset($mensajes_bot[$i])) {
                if ($i == 2) {
                    if (isset($mensajes_bot[$i])) {
                        $resumen_chat .= '
                            <table style="width: 100%;">
                                <tr>
                                    <td style="width: 80%;background: #333;color:#FFF;padding:5px;">'.$mensajes_bot[$i].'</td>
                                    <td style="width: 20%;"></td>
                                </tr>
                            </table>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="width: 80%;background: #333;color:#FFF;padding:5px;">'.$mensajes_bot[$i+1].'</td>
                                    <td style="width: 20%;"></td>
                                </tr>
                            </table>
                        ';
                    }
                    if ($resumen_usuario[$i] != '') {
                        $resumen_chat .= '
                            <table style="width: 100%;">
                                <tr style="text-align: right;">
                                    <td style="width: 20%;"></td>
                                    <td style="width: 80%;background: #e5ffca;color:#000;padding:5px;">'.$resumen_usuario[$i].'</td>
                                </tr>
                            </table>
                        ';
                    }
                    $contador_mensajes_bot = $contador_mensajes_bot + 2;
                    unset($mensajes_bot[$i+1]);
                    $mensajes_bot = array_values($mensajes_bot);
                } elseif($i == 7) {
                    $resumen_chat .= '
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 80%;background: #333;color:#FFF;padding:5px;">'.$mensajes_bot[$i].'</td>
                                <td style="width: 20%;"></td>
                            </tr>
                        </table>
                        <table style="width: 100%;">
                            <tr style="text-align: right;">
                                <td style="width: 20%;"></td>
                                <td style="width: 80%;background: #e5ffca;color:#000;padding:5px;">'.$resumen_usuario[$i].'</td>
                            </tr>
                        </table>
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 80%;background: #333;color:#FFF;padding:5px;">'.$mensajes_bot[$i+1].'</td>
                                <td style="width: 20%;"></td>
                            </tr>
                        </table>
                    ';
                    $contador_mensajes_bot = $contador_mensajes_bot + 2;
                } else {
                    $contador_mensajes_bot++;
                    if($resumen_usuario[$i] != '') {
                        $resumen_chat .= '
                            <table style="width: 100%;">
                                <tr>
                                    <td style="width: 80%;background: #333;color:#FFF;padding:5px;">'.$mensajes_bot[$i].'</td>
                                    <td style="width: 20%;"></td>
                                </tr>
                            </table>
                        ';
                        $resumen_chat .= '
                            <table style="width: 100%;">
                                <tr style="text-align: right;">
                                    <td style="width: 20%;"></td>
                                    <td style="width: 80%;background: #e5ffca;color:#000;padding:5px;">'.$resumen_usuario[$i].'</td>
                                </tr>
                            </table>
                        ';
                    }
                }
            }
        }
        if (isset($_POST['mensaje_inactividad']) && $_POST['mensaje_inactividad'] == 1) {
            $resumen_chat .= '
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 80%;background: #00aaff;color:#FFF;padding:5px;">'.$mensajes_bot_original[$contador_mensajes_bot].'</td>
                        <td style="width: 20%;"></td>
                    </tr>
                </table>
            ';
            $resumen_chat .= '
                <p style="text-align:center;">
                    Este chat se envío incompleto porque el cliente tuvo una inactividad de 5 minutos.
                </p>
            ';
        }
        $mensaje='
            <html>
            <head>
                <title>Contácto desde el de chat de la página web de WDC MAYORISTA</title>
                <meta charset="utf-8">
            </head>
            <body style="background: '."url('https://i.ibb.co/85SmpBQ/fondo.jpg')".';background-size:24px auto;font-family: Arial, Helvetica, sans-serif;margin: 0;">
                <br>
                <table style="width: 100%;">
                    <tr style="text-align: center;">
                        <td></td>
                        <td style="padding-bottom: 20px;"><img width="350" height="auto" src="http://www.wdcmayorista.com/logo.png"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 23.3%;"></td>
                        <td style="background:#F0F0F0;border:1px solid #333;border-radius: 15px;color:#333;padding: 15px;width: 43.3%;">
                            <h3 style="text-align: center;">¡Hola WDC MAYORISTA!</h3>
                            <h5 style="text-align: center;">Tienes un nuevo cliente en www.wdcmayorista.com</h5>
                            <h3 style="text-align: center;">Resumen de la conversación</h3>
                            <p style="text-align:center;">
                                Fecha inicial: '.$_POST['fecha_inicio'].'
                            </p>
                            '.$resumen_chat.'
                            <p style="text-align:center;">
                                Fecha de envío: '.date('H:ia - d/m/Y').'
                            </p>
                            <br>
                            <h3 style="text-align: center;">Datos de contacto</h3>
                            <p>
                                <b>Nombre completo: </b> '.$_POST['nombre'].'
                                <br><br>
                                <b>Correo: </b> <a href="mailto:'.$_POST['correo'].'" style="color:#333;">'.$_POST['correo'].'</a>
                                <br><br>
                                <b>Teléfono: </b> <a href="tel:+57'.$_POST['numero'].'" style="color:#333;">'.$_POST['numero'].'</a>
                                <br><br>
                                <b>Ubicación: </b> '.$_POST['ciudad'].', '.$_POST['region'].', '.$_POST['pais'].'
                                <br><br>
                                <b>Dirección IP: </b> '.$_POST['ip'].'
                                <br><br>
                                <b>Página: </b> '.$_POST['url'].'
                                <br><br>
                                <b>Mensaje: </b>
                                <p style="text-align: justify;">
                                    '.$_POST['tema'].'
                                </p>
                            </p>
                            <br>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="background: #333;text-align: center;width: 50%;"><p><a href="tel:+57'.$_POST['numero'].'" style="color: #FFF;">Llamar '.$nombre_corto.'</a></p></td>
                                    <td style="background: #25D366;text-align: center;width: 50%;"><p><a href="https://api.whatsapp.com/send?phone=57'.$_POST['numero'].'&text=Hola, ví que necesitabas ayuda con: '.$_POST['tema'].'" style="color: #FFF;">Enviar WhatsApp '.$nombre_corto.'</a></p></td>
                                </tr>
                            </table>
                            <br><br>
                            <p style="text-align: center;"><u>Este mensaje es generado automáticamente, por favor no lo responda.</u></p>
                            <p style="text-align: center;">&copy; '.date('Y').', todos los derechos reservados || <a style="color: #333;" href="https://wdcmayorista.com">wdcmayorista</a></p>
                            </p>
                        </td>
                        <td style="width: 23.3%;"></td>
                    </tr>
                </table>
            </body>
            </html>
        ';  
        $cabezera = "MIME-Version: 1.0" . "\r\n";
        $cabezera .= "Content-Type: text/html; charset=UTF-8\r\n";
        $cabezera .= "From: contacto@wdcmayorista.com"."\r\n";
        if(mail("diringenieria@wdcmayorista.com, comercial@wdcmayorista.com, dircomercial@wdcmayorista.com, facturacion@wdcmayorista.com", "Tienes un nuevo cliente por Chatbot: ".$_POST['nombre_corto'], $mensaje, $cabezera)) {
        //if(mail("carlos_06100@outlook.com", "Tienes un nuevo cliente por Chatbot: ".$_POST['nombre_corto'], $mensaje, $cabezera)) {
            echo 1;
        } else {
            echo 0;
        }
    } elseif(isset($_POST['envio_whatsapp'])) {
        $indicativo = '57';
        if ($_POST['indicativo'] == 2) {
            $indicativo = '507';
        }
         $mensaje='
            <html>
            <head>
                <title>Contácto desde el de chat de la página web de WDC MAYORISTA</title>
                <meta charset="utf-8">
            </head>
            <body style="background: '."url('https://i.ibb.co/85SmpBQ/fondo.jpg')".';background-size:24px auto;font-family: Arial, Helvetica, sans-serif;margin: 0;">
                <br>
                <table style="width: 100%;">
                    <tr style="text-align: center;">
                        <td></td>
                        <td style="padding-bottom: 20px;"><img width="350" height="auto" src="http://www.wdcmayorista.com/logo.png"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 23.3%;"></td>
                        <td style="background:#F0F0F0;border:1px solid #333;border-radius: 15px;color:#333;padding: 15px;width: 43.3%;">
                            <h3 style="text-align: center;">¡Hola WDC MAYORISTA!</h3>
                            <p>
                                ¡Maravilloso! Un nuevo cliente se ha contactado por medio de Whatsapp
                            </p>
                            <p>
                                ¡Comunicate con él ahora! - Mientras menos sea el tiempo de respuesta, habrá una mayor oportunidad de realizar una venta exitósa
                            </p>
                            <h3 style="text-align: center;">Datos de contacto</h3>
                            <p>
                                <b>Nombre completo: </b> '.$_POST['nombre'].'
                                <br><br>
                                <b>Teléfono: </b> <a href="tel:+'.$indicativo.$_POST['numero'].'" style="color:#333;">'.$_POST['numero'].'</a>
                                <br><br>
                                <b>Ubicación: </b> '.$_POST['ciudad'].', '.$_POST['region'].', '.$_POST['pais'].'
                                <br><br>
                                <b>Dirección IP: </b> '.$_POST['ip'].'
                                <br><br>
                                <b>Página: </b> '.$_POST['url'].'
                                <br><br>
                                <b>Mensaje: </b>
                                <p style="text-align: justify;">
                                    '.$_POST['tema'].'
                                </p>
                            </p>
                            <br>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="background: #333;text-align: center;width: 50%;"><p><a href="tel:+'.$indicativo.$_POST['numero'].'" style="color: #FFF;">Llamar '.$_POST['nombre'].'</a></p></td>
                                    <td style="background: #25D366;text-align: center;width: 50%;"><p><a href="https://api.whatsapp.com/send?phone='.$indicativo.$_POST['numero'].'&text=Hola, ví que necesitabas ayuda con: '.$_POST['tema'].'" style="color: #FFF;">Enviar WhatsApp '.$_POST['nombre'].'</a></p></td>
                                </tr>
                            </table>
                            <br><br>
                            <p style="text-align: center;"><u>Este mensaje es generado automáticamente, por favor no lo responda.</u></p>
                            <p style="text-align: center;">&copy; '.date('Y').', todos los derechos reservados || <a style="color: #333;" href="https://wdcmayorista.com">wdcmayorista</a></p>
                            </p>
                        </td>
                        <td style="width: 23.3%;"></td>
                    </tr>
                </table>
            </body>
            </html>
        ';  
        $cabezera = "MIME-Version: 1.0" . "\r\n";
        $cabezera .= "Content-Type: text/html; charset=UTF-8\r\n";
        $cabezera .= "From: contacto@wdcmayorista.com"."\r\n";
        if(mail("diringenieria@wdcmayorista.com, comercial@wdcmayorista.com, dircomercial@wdcmayorista.com, facturacion@wdcmayorista.com", "Tienes un nuevo cliente por WhatsApp: ".$_POST['nombre'], $mensaje, $cabezera)) {
        //if(mail("carlos_06100@outlook.com", "Tienes un nuevo cliente por WhatsApp: ".$_POST['nombre'], $mensaje, $cabezera)) {
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
?>