$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.modal').modal();
    $('.collapsible').collapsible();
    $('select').formSelect();
    $('.tooltipped').tooltip();
    $('.carousel').carousel({
        fullWidth: true,
        indicators: true,
        onCycleTo: carousel_manual_change,
    });
    var carousel_manual_change;
    function carousel_manual_change() {
        clearTimeout(carousel_manual_change);
        carousel_manual_change =  setTimeout(function(){
            $('.carousel').carousel('next');
        }, 6000);
    }
});
var cookies = document.cookie.split(';');
var contador_cookies = 0;
for (var i = 0; i < cookies.length; i++) {
    var revisar = cookies[i].split('=');
    if (revisar[0] == 'popup') {
        contador_cookies = 1;
    }
}
if (contador_cookies == 1) {
    $('.fondo_pop_up').remove();
}
$('.btn_cerrar_popup').click(function () {
    $('.fondo_pop_up').css('opacity', '0');
    setTimeout(function () {
        $('.fondo_pop_up').remove();
    }, 150);
});
$('.btn_cerrar_perma_popup').click(function () {
    document.cookie = "popup = 1";
    $('.fondo_pop_up').css('opacity', '0');
    setTimeout(function () {
        $('.fondo_pop_up').remove();
    }, 150);
});
var x = window.matchMedia("(max-width: 600px)");
var contador_media_querie_movil = false;
media_querie_movil(x);
x.addListener(media_querie_movil);
function media_querie_movil(x) {
    if (x.matches) {
        contador_media_querie_movil = true;
        $('.chat-whatsapp-wrapper').css({
            'bottom': '-100%',
        });
        $('.chat-chatbot-wrapper').css({
            'bottom': '-100%',
        });
        $('.btn-whatsapp').css({
            'display': 'block',
        });
        $('.btn-chatbot').css({
            'display': 'block',
        });
        $('.fondo-contactanos').removeClass('valign-wrapper');
    } else {
        contador_media_querie_movil = false;
        $('.contenido-chat-chatbot').removeAttr('style');
        $('.chat-chatbot-wrapper').css({
            'right': '20px',
        });
        $('.chat-whatsapp-wrapper').css({
            'left': '20px',
        });
        $('.fondo-contactanos').addClass('valign-wrapper');
    }
}
$('.btn-whatsapp').click(function () {
    if (contador_media_querie_movil) {
        $('.chat-whatsapp-wrapper').css({
            'bottom': '0px',
            'left': '0px',
        });
    } else {
        $('.chat-whatsapp-wrapper').css({
            'bottom': '20px',
        });
    }
    $('.btn-whatsapp').css({
        'display': 'none',
    });
});
$('.titulo-chat-whatsapp').click(function () {
    if (contador_media_querie_movil) {
        $('.chat-whatsapp-wrapper').css({
            'bottom': '-100%',
        });
    } else {
        $('.chat-whatsapp-wrapper').css({
            'bottom': '-450px',
        });
    }
    $('.btn-whatsapp').css({
        'display': 'block',
    });
});
$('#iniciar_chat').click(function () {
    M.Toast.dismissAll();
    if ($('#nombre_whatsapp').val() == '' || $('#nombre_whatsapp').val() == ' ') {
        $('#nombre_whatsapp').focus();
        M.toast({
            html: 'Necesita colocar un nombre'
        });
    } else if ($('#telefono_whatsapp').val() == '' || $('#telefono_whatsapp').val() == ' ' || $('#telefono_whatsapp').hasClass('invalid')) {
        $('#telefono_whatsapp').focus();
        M.toast({
            html: 'Necesita colocar un teléfono valido'
        });
    } else if ($('#mensaje_whatsapp').val() == '' || $('#mensaje_whatsapp').val() == ' ') {
        $('#mensaje_whatsapp').focus();
        M.toast({
            html: 'Necesita colocar un mensaje'
        });
    } else {
        $.ajax({
            url: "https://extreme-ip-lookup.com/json/",
            type: 'get',
            success: function (result) {
                var indicativo = '57';
                if ($('#indicativo').val() == 2) {
                    indicativo = '507';
                }
                var datos = {
                    nombre: $('#nombre_whatsapp').val(),
                    numero: $('#telefono_whatsapp').val(),
                    tema: $('#mensaje_whatsapp').val(),
                    indicativo: $('#indicativo').val(),
                    pais: result.country,
                    ip: result.query,
                    ciudad: result.city,
                    region: result.region,
                    url: window.location.href,
                    envio_whatsapp: 1,
                };
                var url_archivo = location.href.split("/");
                var url = '../php/enviar.php'; //Para todas las páginas diferentes a index que estén dentro de una carpeta
                if (url_archivo[url_archivo.length-1] == '' || url_archivo[url_archivo.length-1] == 'index.php') { //Para index
                    url = 'php/enviar.php';
                }
                $.ajax({
                    url: url,
                    type: 'post',
                    data: datos,
                    success: function (result) {
                        window.open('https://api.whatsapp.com/send?phone=573015350964&text=' + 'Hola, mi nombre es: ' + $('#nombre_whatsapp').val() + '. Les escribo porque: ' + $('#mensaje_whatsapp').val());
                    }
                });
            }
        });

    }
});
setTimeout(function () {
    $('.btn-chatbot').click();
}, 10000);
$('.btn-chatbot').click(function () {
    if (contador_media_querie_movil) {
        $('.chat-chatbot-wrapper').css({
            'bottom': '0px',
            'right': '0px',
        });
        $('.contenido-chat-chatbot').css({
            'height': window.innerHeight - 100,
        });
    } else {
        $('.chat-chatbot-wrapper').css({
            'bottom': '20px',
        });
    }
    $('.btn-chatbot').css({
        'display': 'none',
    });
    $('#mensaje_chatbot').focus();
});
$('.titulo-chatbot').click(function () {
    if (contador_media_querie_movil) {
        $('.chat-chatbot-wrapper').css({
            'bottom': '-100%',
        });
    } else {
        $('.chat-chatbot-wrapper').css({
            'bottom': '-450px',
        });
    }
    $('.btn-chatbot').css({
        'display': 'block',
    });
});
$('#mensaje_chatbot').keyup(function () {
    var x = event.which || event.keyCode;
    if (x == 13) {
        $('#enviar_mensaje').click();
    }
});
var mensajes_enviados = 0;
var tema_cliente_chat = '';
var nombre_cliente_chat = '';
var primer_nombre_cliente_chat = '';
var correo_cliente_chat = '';
var numero_cliente_chat = '';
var nombre_usuario = '';
var temporizador;
var fecha = new Date();
var fecha_inicio = '';
var horario_llamar = '';
var consulta_adicional = '';
var nombre_corto = '';
var mensajes_bot = 'Hola, Me gustaría poderte ayudar, Claro!!! solo en temas comerciales o de ventas, cuéntame como:';
$('#enviar_mensaje').click(function () {
    if (mensajes_enviados == 6) {
        mensajes_enviados = 0;
        $('#enviar_mensaje').removeAttr('data-tooltip');
        $('#enviar_mensaje').find('i').html('send');
        $('#mensaje_chatbot').removeAttr('disabled');
        $('.contenido-chat-chatbot').html('');
        $('.contenido-chat-chatbot').append(
            '<div class="col s12 no-padding nombre-bot">' +
            'Camilo:' +
            '</div>' +
            '<div class="col s10 mensaje-bot white-text text-darken-4">' +
            'Hola, Me gustaría poderte ayudar, Claro!!! solo en temas comerciales o de ventas, cuéntame como:' +
            '</div>'
        );
        tema_cliente_chat = '';
        nombre_cliente_chat = '';
        primer_nombre_cliente_chat = '';
        correo_cliente_chat = '';
        numero_cliente_chat = '';
        nombre_usuario = '';
        fecha = new Date();
        fecha_inicio = '';
        horario_llamar = '';
        consulta_adicional = '';
        nombre_corto = '';
        mensajes_bot = 'Hola, Me gustaría poderte ayudar, Claro!!! solo en temas comerciales o de ventas, cuéntame como:';
        clearTimeout(temporizador);
    } else {
        M.Toast.dismissAll();
        var correo_test = $("#mensaje_chatbot").val().split('@');
        if (mensajes_enviados == 3) {
            if (correo_test.length == 2) {
                correo_test = correo_test[1].split('.');
            }
        }
        if (mensajes_enviados != 2 && mensajes_enviados != 3 && ($('#mensaje_chatbot').val() == '' || $('#mensaje_chatbot').val() == ' ')) {
            $('#mensaje_chatbot').focus();
            M.toast({
                html: 'Necesita colocar un mensaje'
            });
        } else if (mensajes_enviados == 2 && ($('#mensaje_chatbot').val() == '' || $('#mensaje_chatbot').val() == ' ' || $('#mensaje_chatbot').hasClass('invalid'))) {
            $('#mensaje_chatbot').focus();
            M.toast({
                html: 'Necesita colocar un teléfono valido'
            });
        } else if (mensajes_enviados == 3 && $('#mensaje_chatbot').hasClass('invalid') || mensajes_enviados == 3 && correo_test.length <= 1) {
            $('#mensaje_chatbot').focus();
            M.toast({
                html: 'Necesita colocar un correo valido'
            });
        } else {
            $('#enviar_mensaje').find('i').css({
                'left': '55px',
                'opacity': '0',
            });
            $('.contenido-chat-chatbot').append(
                '<div class="col s10 mensaje-cliente grey-text text-darken-4 right">' +
                $('#mensaje_chatbot').val() +
                '</div>'
            );
            mensajes_enviados++;
            $('#mensaje_chatbot').attr('disabled', true);
            respuestas(mensajes_enviados, $('#mensaje_chatbot').val());
            $('#mensaje_chatbot').val('');
            $('.contenido-chat-chatbot').scrollTop(document.getElementById('contenido-chat-chatbot').scrollHeight);
            setTimeout(function () {
                $('#enviar_mensaje').find('i').css({
                    'left': '0px',
                });
            }, 500);
            setTimeout(function () {
                $('#enviar_mensaje').find('i').css({
                    'opacity': '1',
                });
            }, 1000);
        }
    }
});

function temporizador_chat() {
    if (mensajes_enviados != 6) {
        $.ajax({
            url: "https://extreme-ip-lookup.com/json/",
            type: 'get',
            success: function (result) {
                var datos = {
                    nombre: nombre_cliente_chat,
                    correo: correo_cliente_chat,
                    numero: numero_cliente_chat,
                    tema: tema_cliente_chat,
                    pais: result.country,
                    ip: result.query,
                    ciudad: result.city,
                    region: result.region,
                    fecha_inicio: fecha_inicio,
                    horario_llamar: horario_llamar,
                    consulta_adicional: consulta_adicional,
                    nombre_corto: nombre_corto,
                    url: window.location.href,
                    mensajes_bot: mensajes_bot,
                    envio_chatbot: 1,
                    mensaje_inactividad: 1,
                };
                var url_archivo = location.href.split("/");
                var url = '../php/enviar.php'; //Para todas las páginas diferentes a index que estén dentro de una carpeta
                if (url_archivo[url_archivo.length-1] == '' || url_archivo[url_archivo.length-1] == 'index.php') { //Para index
                    url = 'php/enviar.php';
                }
                $.ajax({
                    url: url,
                    type: 'post',
                    data: datos,
                    success: function (result) {
                        console.log(result);
                        mensajes_enviados = 0;
                        $('#enviar_mensaje').removeAttr('data-tooltip');
                        $('#enviar_mensaje').find('i').html('send');
                        $('#mensaje_chatbot').removeAttr('disabled');
                        $('.contenido-chat-chatbot').html('');
                        $('.contenido-chat-chatbot').append(
                            '<div class="col s12 no-padding nombre-bot">' +
                            'Camilo:' +
                            '</div>' +
                            '<div class="col s10 mensaje-bot white-text text-darken-4">' +
                            'Hola, Me gustaría poderte ayudar, Claro!!! solo en temas comerciales o de ventas, cuéntame como:' +
                            '</div>'
                        );
                        $('#mensaje_chatbot').attr('type', 'text');
                        tema_cliente_chat = '';
                        nombre_cliente_chat = '';
                        primer_nombre_cliente_chat = '';
                        correo_cliente_chat = '';
                        numero_cliente_chat = '';
                        nombre_usuario = '';
                        fecha = new Date();
                        fecha_inicio = '';
                        horario_llamar = '';
                        consulta_adicional = '';
                        nombre_corto = '';
                        mensajes_bot = 'Hola, Me gustaría poderte ayudar, Claro!!! solo en temas comerciales o de ventas, cuéntame como:';
                    }
                });
            }
        });
    }
}
$('#mensaje_chatbot').keyup(function () {
    if (mensajes_enviados >= 1) {
        clearTimeout(temporizador);
        temporizador = setTimeout(temporizador_chat, 300000);
    }
});

function respuestas(numero, dato_opcional) {
    if (numero == 1) {
        tema_cliente_chat = dato_opcional;
        $('.contenido-chat-chatbot').append(
            '<div class="col s10 mensaje-bot mensaje-espera white-text">' +
            '...' +
            '</div>'
        );
        setTimeout(function () {
            $('.mensaje-espera').remove();
            $('.contenido-chat-chatbot').append(
                '<div class="col s12 no-padding nombre-bot">' +
                'Camilo:' +
                '</div>' +
                '<div class="col s10 mensaje-bot white-text text-darken-4">' +
                'Será un placer asistirte, cuál es tu nombre?' +
                '</div>'
            );
            $('.contenido-chat-chatbot').scrollTop(document.getElementById('contenido-chat-chatbot').scrollHeight);
            $('#mensaje_chatbot').attr('disabled', false);
            $('#mensaje_chatbot').focus();
        }, 2000);
        mensajes_bot += ('//' + 'Será un placer asistirte, cuál es tu nombre?');
        var jornada = 'am';
        if (fecha.getHours() >= 12) {
            jornada = 'pm';
        }
        fecha_inicio = fecha.getHours() + ':' + fecha.getMinutes() + '' + jornada + ' - ' + fecha.getDate() + '/' + fecha.getMonth() + '/' + fecha.getFullYear();
    } else if (numero == 2) {
        nombre_cliente_chat = dato_opcional;
        var nombres = [
            'ABAD', 'ABELARDO', 'ABRAHAM', 'ABSALON', 'ADALBERTO', 'ADAN', 'ADELA', 'ADELAIDA', 'ADELINA', 'ADELY', 'ADIELA', 'ADIRANA', 'ADOLFO', 'ADRIAN', 'ADRIANA', 'AGNETH', 'AGRIPINA', 'AGUSTIN', 'AIDA', 'AIDE', 'AIVED', 'ALBA', 'ALBANY', 'ALBEIRO', 'ALBENIS', 'ALBENNY', 'ALBENYS', 'ALBERTO', 'ALBI', 'ALBINO', 'ALCIDES', 'ALCIRA', 'ALDEMAR', 'ALEIDA', 'ALEJANDRA', 'ALEJANDRINA', 'ALEJANDRO', 'ALEXA', 'ALEXANDER', 'ALEXANDRA', 'ALEXI', 'ALEXIS', 'ALEXOI', 'ALEYDA', 'ALFONSO', 'ALFREDO', 'ALIBET', 'ALICE', 'ALICIA', 'ALIDA', 'ALIDIUS', 'ALINA', 'ALIRIO', 'ALMA', 'ALONSO', 'ALTAMAR', 'ALVARO', 'ALVEIRO', 'AMALFI', 'AMALIA', 'AMANDA', 'AMAURI', 'AMAURY', 'AMAYTA', 'AMBROSIO', 'AMELIA', 'AMINA', 'AMINTA', 'AMIRA', 'AMPARO', 'ANA', 'ANABELLE', 'ANADELA', 'ANALUCIA', 'ANAMARIA', 'ANANGE', 'ANANIAS', 'ANARGENYS', 'ANASHKA', 'ANATAEL', 'ANAY', 'ANDERSON', 'ANDREA', 'ANDREINA', 'ANDRES', 'ANG', 'ANGEL', 'ANGELA', 'ANGELES', 'ANGELICA', 'ANGELINA', 'ANGELLY', 'ANGELY', 'ANIBAL', 'ANILSA', 'ANITA', 'ANLLY', 'ANNY', 'ANTHONY', 'ANTONIA', 'ANTONIO', 'ANY', 'ANYELID', 'ANYERI', 'ANYOLINA', 'AR', 'ARACELI', 'ARACELLY', 'ARACELY', 'ARBEY', 'ARCELIA', 'ARCENIA', 'ARELYS', 'ARGELIA', 'ARGEMIRO', 'ARGENIS', 'ARIEL', 'ARIS', 'ARISTIDES', 'ARISTOBULO', 'ARLEDY', 'ARLEY', 'ARLINDA', 'ARMANDO', 'ARNUBEL', 'ARSENIO', 'ARTURO', 'ASCENCION', 'ASHLERY', 'ASTRID', 'ASTRITH', 'AUDREY', 'AUGUSTA', 'AUGUSTO', 'AUGUSTP', 'AURA', 'AURELIO', 'AURONIS', 'AURORA', 'AUSTIN', 'AUXILIADORA', 'AUYENITH', 'AYDE', 'AYDEE', 'AYLIN', 'AZUCENA', 'BAUTISTA', 'BEATRIZ', 'BELCY', 'BELEN', 'BELISA', 'BELISARIO', 'BELLABETH', 'BELLANIR', 'BELLARSENIA', 'BENEDICTO', 'BENITO', 'BENJAMIN', 'BERENA', 'BERENICE', 'BERNARDA', 'BERNARDO', 'BERTHA', 'BERTIL', 'BERTULFO', 'BETTY', 'BETY', 'BIANETH', 'BIASNEY', 'BIBIANA', 'BIENVENIDA', 'BIVIANA', 'BLADIMIR', 'BLASINA', 'BRICEIDA', 'BRILLITH', 'CAMILA', 'CAMILO', 'CANDELARIA', 'CANDIDA', 'CARINA', 'CARLINA', 'CARLOS', 'CARLOTA', 'CARMEN', 'CARMENZA', 'CAROL', 'CAROLA', 'CAROLINA', 'CAROLINE', 'CARSON', 'CASANDRA', 'CASIMIRA', 'CASIMIRO', 'CASTOR', 'CATALINA', 'CATERINE', 'CATHERINE', 'CATHERINNE', 'CAYETANO', 'CECILIA', 'CELEDONIA', 'CELEEN', 'CELENE', 'CELESTINA', 'CELINA', 'CELMIRA', 'CELSO', 'CEMIGA', 'CENAIDA', 'CENYDE', 'CESAR', 'CHE', 'CHEYLA', 'CIELO', 'CLARA', 'CLARENA', 'CLARIBEL', 'CLARISA', 'CLAUDIA', 'CLAUDIO', 'CLEMENCIA', 'CLEMENTINA', 'COLOMBIA', 'CONCEPCION', 'CONSTANCIA', 'CONSTANZA', 'CONSUELO', 'CORINA', 'CRISOSTOMO', 'CRISTIAN', 'CRISTINA', 'CRUZ', 'DAGOBERTO', 'DAIMER', 'DAINER', 'DAISY', 'DAJHANNA', 'DALIA', 'DALILA', 'DALINA', 'DAMARIS', 'DAMARYS', 'DANELA', 'DANEY', 'DANGELLY', 'DANICE', 'DANIEL', 'DANIELA', 'DANILO', 'DANIS', 'DANITZA', 'DANNEISY', 'DARI', 'DARIELLY', 'DARIO', 'DARLENE', 'DARLY', 'DARY', 'DAVID', 'DAY', 'DAYANA', 'DAYANNA', 'DAYSY', 'DEAMANTINA', 'DEBORA', 'DEICY', 'DEISSY', 'DEIVIS', 'DELFINA', 'DELIA', 'DENICE', 'DENIS', 'DENISE', 'DENISSE', 'DENY', 'DERLY', 'DEYANID', 'DEYANIRA', 'DIALETH', 'DIALISMER', 'DIANA', 'DIANI', 'DIANNY', 'DIDIER', 'DIEGO', 'DILVER', 'DIN', 'DINARYN', 'DIONICIA', 'DIONICIO', 'DIOS', 'DIOSELINA', 'DOLORES', 'DONALDO', 'DORA', 'DORALBA', 'DORALICE', 'DORALIRIS', 'DORALISA', 'DORANCE', 'DORANICE', 'DORETTE', 'DORILA', 'DORIS', 'DORISLENA', 'DORY', 'DUBERNEY', 'DULFAY', 'DURIEL', 'DUVER', 'DYIAN', 'EBLIS', 'EDALCY', 'EDDY', 'EDEL', 'EDELIS', 'EDELMIRA', 'EDERNILSO', 'EDGAR', 'EDIER', 'EDILBERTO', 'EDILMA', 'EDIMER', 'EDINSON', 'EDISON', 'EDISSON', 'EDITH', 'EDUARDO', 'EDUVIGES', 'EDY', 'EFIGENIA', 'EFRAIN', 'EFREN', 'ELADIO', 'ELCIRA', 'ELCY', 'ELEANOR', 'ELENA', 'ELENE', 'ELI', 'ELIANA', 'ELIANNEE', 'ELIAS', 'ELIBERTO', 'ELICENIA', 'ELIDA', 'ELIECER', 'ELIETH', 'ELIGIA', 'ELINA', 'ELINERSY', 'ELIS', 'ELISA', 'ELISABETH', 'ELIYER', 'ELIZABETH', 'ELLIZABETH', 'ELMA', 'ELOINA', 'ELOISA', 'ELPIDIA', 'ELSA', 'ELSY', 'ELVIA', 'ELVINIA', 'ELVIRA', 'EMELINA', 'EMELLY', 'EMILCE', 'EMILDA', 'EMILE', 'EMILIA', 'EMILIE', 'EMILIO', 'EMILSE', 'EMILSEN', 'EMILSON', 'EMIR', 'EMIRO', 'EMMA', 'EMPERATRIZ', 'ENEIDA', 'ENELIA', 'ENID', 'ENILCE', 'ENIO', 'ENITH', 'ENORIS', 'ENRIQUE', 'ENRIQUETA', 'ENRRIQUE', 'ENYI', 'EPIFANIA', 'EPIFANIO', 'EPIMENIA', 'EQUILDA', 'ERBIN', 'ERICK', 'ERIKA', 'ERNESTINA', 'ERNESTO', 'ERNEY', 'ESMERALDA', 'ESMIRA', 'ESNEDA', 'ESNEIDER', 'ESNEVER', 'ESPERANZA', 'ESTEBAN', 'ESTEFANIA', 'ESTEFANY', 'ESTELA', 'ESTELLA', 'ESTER', 'ESTHEFANY', 'ESTHELA', 'ESTHER', 'ESTIBEN', 'ESTRELLA', 'ETEL', 'ETELVINA', 'ETILVIA', 'EUDORO', 'EUDOXIA', 'EUGENIA', 'EUGENIO', 'EULALIA', 'EULIS', 'EUNICE', 'EUSEBIO', 'EUSON', 'EVA', 'EVARISTA', 'EVEL', 'EVELIA', 'EVELIN', 'EVELINA', 'EVELIO', 'EVER', 'EXTERLIN', 'EYDER', 'EZENITH', 'FABER', 'FABIAN', 'FABIO', 'FABIOLA', 'FACIO', 'FANNY', 'FARLEY', 'FATIMA', 'FAYZULLY', 'FEBE', 'FEDERICO', 'FEIDER', 'FELICIA', 'FELIPE', 'FELIX', 'FENEY', 'FERLEIDY', 'FERLEY', 'FERMANDO', 'FERNANDA', 'FERNANDO', 'FERNELI', 'FERNEY', 'FIDEL', 'FIDELIA', 'FIDELIGNO', 'FLEURY', 'FLOR', 'FLORANGELA', 'FRANCELINE', 'FRANCIA', 'FRANCISCO', 'FRANCLIN', 'FRANCOISE', 'FRANCY', 'FRANKLIN', 'FREDDY', 'FREDERMAN', 'FREDY', 'FRIDA', 'FULVIO', 'GABRIEL', 'GABRIELA', 'GARDEL', 'GARY', 'GEISA', 'GELBER', 'GELISBETH', 'GEMINA', 'GENARO', 'GENARY', 'GENIER', 'GENOVEVA', 'GEORGINA', 'GEOVANNY', 'GER', 'GERALDINE', 'GERARDINE', 'GERARDO', 'GERMAIN', 'GERMAN', 'GERMELA', 'GERSON', 'GERTRUDIS', 'GESELLE', 'GESSY', 'GIANCARLOS', 'GIANNINA', 'GIGLIOLA', 'GIL', 'GILBERTO', 'GILDARDO', 'GILMA', 'GIMENA', 'GINETH', 'GINNETTE', 'GIOVANI', 'GIOVANNA', 'GIOVANNI', 'GIOVANNY', 'GIOVANY', 'GIRLEY', 'GISELA', 'GISELL', 'GISELLE', 'GISELLY', 'GISSEL', 'GISSELA', 'GIZATH', 'GLADYS', 'GLEYDEN', 'GLORIA', 'GLORICETH', 'GONZAGA', 'GONZALEZ', 'GONZALO', 'GORETTI', 'GRACE', 'GRACIELA', 'GREGORIO', 'GRELIS', 'GRIMALDO', 'GRISELA', 'GRISELL', 'GUILLERMINA', 'GUILLERMO', 'GUILLIOLA', 'GUIRLELLY', 'GUISELLE', 'GUSTAVO', 'HADIT', 'HAMILAM', 'HANSEN', 'HARBEY', 'HAROLD', 'HARRY', 'HASBLEIDY', 'HAUDY', 'HAYDE', 'HEBER', 'HECTOR', 'HELEM', 'HELENA', 'HELIODORO', 'HELMER', 'HELVER', 'HENRY', 'HENZA', 'HERCILIA', 'HERIBERTO', 'HERLINDA', 'HERLY', 'HERMECENDA', 'HERMES', 'HERMILES', 'HERMINDA', 'HERMINIA', 'HERNAN', 'HERNANDO', 'HIAMIL', 'HILDA', 'HIPOLITO', 'HORACIO', 'HORTENCIA', 'HUGO', 'HUMBERTO', 'IADER', 'IBAMA', 'IBETH', 'ICELA', 'IDALIA', 'IDALID', 'IDALIDES', 'IDALY', 'IGNACI', 'IGNACIA', 'IGNACIO', 'ILMA', 'ILVANY', 'IMELDA', 'IN', 'INAIR', 'INDIRA', 'INES', 'INESTELA', 'INGRID', 'INIRIDA', 'INSABEL', 'IRENARCO', 'IRENE', 'IRINA', 'IRLANDA', 'IRMA', 'ISABEL', 'ISABELLE', 'ISAIAS', 'ISAURO', 'ISELLA', 'ISILMA', 'ISMAEL', 'ISMELDA', 'ISSELA', 'IVAN', 'IVANOFF', 'IVETH', 'IVETTE', 'IVONNE', 'IVONY', 'IYAMILE', 'JACINTO', 'JACK', 'JACKELINE', 'JACKSON', 'JACOBO', 'JACQUELIN', 'JACQUELINE', 'JAEL', 'JAFET', 'JAHANNA', 'JAHIR', 'JAIDIVE', 'JAIME', 'JAINER', 'JAIR', 'JAIRO', 'JAKELIN', 'JALITHZA', 'JAMIR', 'JANET', 'JANETH', 'JANINE', 'JANNETH', 'JAPZY', 'JAQUELINE', 'JAQUELINNE', 'JARAMILLO', 'JASBLEIDY', 'JASBLEYDI', 'JASMIN', 'JAVIER', 'JAYNE', 'JAZBLEIDY', 'JAZMIN', 'JEANET', 'JEANNETH', 'JEANNETHE', 'JEANNETTE', 'JEFERSSON', 'JEFFERSON', 'JEISMY', 'JEISSON', 'JENIFER', 'JENIFFER', 'JENNIFER', 'JENNY', 'JENNYFER', 'JENNYFERD', 'JESSICA', 'JESUS', 'JHOANA', 'JHODANNY', 'JHOEN', 'JHOJANA', 'JHOVANA', 'JIMENA', 'JIMMY', 'JOANA', 'JOANNA', 'JOAQUIN', 'JOAQUINA', 'JOEL', 'JOELLA', 'JOELLY', 'JOHAN', 'JOHANA', 'JOHANNA', 'JOHANNY', 'JOHN', 'JOMAIRA', 'JONATHAN', 'JORDAN', 'JORGE', 'JOSE', 'JOSEFA', 'JOSEFINA', 'JOSUE', 'JOVANA', 'JUAN', 'JUANA', 'JUDIT', 'JUDITH', 'JULIA', 'JULIAN', 'JULIANA', 'JULIET', 'JULIETA', 'JULIETH', 'JULIETT', 'JULIO', 'JURANY', 'JUSTINA', 'JUVENAL', 'KACTERYNE', 'KALED', 'KARELY', 'KAREN', 'KARIME', 'KARIN', 'KARINA', 'KARINE', 'KAROLINA', 'KATALINA', 'KATERIN', 'KATERINE', 'KATHERIN', 'KATHERINE', 'KATHERINNE', 'KATHYA', 'KATIA', 'KATTYA', 'KELLYS', 'KENNETH', 'KHATERINE', 'LADY', 'LASTENIA', 'LAUCARYOLY', 'LAUDETH', 'LAURA', 'LAUREANO', 'LAYVIS', 'LEANDRA', 'LEDYS', 'LEIDY', 'LENIN', 'LEON', 'LEONARDO', 'LEONEL', 'LEONICIA', 'LEONILA', 'LEONILDE', 'LEONOR', 'LETICIA', 'LEUDITH', 'LEVI', 'LEYDI', 'LEYKA', 'LIA', 'LIBARDO', 'LIBIA', 'LICENIA', 'LICETH', 'LIDA', 'LIDALBA', 'LIDIA', 'LIGIA', 'LILETH', 'LILI', 'LILIA', 'LILIAM', 'LILIAN', 'LILIANA', 'LILIBETH', 'LILIY', 'LILY', 'LINDA', 'LINDSAY', 'LINET', 'LINETH', 'LINGLIS', 'LINIBETH', 'LIS', 'LISBET', 'LISBETH', 'LISED', 'LISET', 'LISETH', 'LISETT', 'LISSETH', 'LISSETY', 'LIZA', 'LIZBET', 'LIZBETH', 'LIZED', 'LIZET', 'LIZETE', 'LIZETH', 'LIZETHE', 'LIZZET', 'LIZZETH', 'LLANED', 'LLANELLY', 'LLICEYIS', 'LLIZEK', 'LOHANA', 'LOLA', 'LOLY', 'LONSO', 'LORENA', 'LORENZA', 'LORETH', 'LORETTY', 'LORIET', 'LOURDES', 'LOWEL', 'LUBAR', 'LUCEINA', 'LUCELI', 'LUCELIS', 'LUCELLY', 'LUCELY', 'LUCENA', 'LUCERO', 'LUCIA', 'LUCILA', 'LUCINA', 'LUCIO', 'LUCRECIA', 'LUCY', 'LUIS', 'LUISA', 'LUPE', 'LURDEY', 'LUVIA', 'LUZ', 'LUZCELY', 'LUZDARY', 'LUZENA', 'LUZMILA', 'LYLIANA', 'MABEL', 'MADELEIN', 'MADELEINE', 'MAERLY', 'MAGALI', 'MAGALLY', 'MAGALY', 'MAGDALENA', 'MAGNOLIA', 'MAGOLA', 'MAINORY', 'MAIRENA', 'MAIRTA', 'MALLORY', 'MALVI', 'MANUEL', 'MANUELA', 'MAR', 'MARA', 'MARCEL', 'MARCELA', 'MARCELINA', 'MARCELINO', 'MARCELLA', 'MARCIANA', 'MARCOS', 'MARELVIS', 'MARGARET', 'MARGARETH', 'MARGARITA', 'MARGERY', 'MARGGORI', 'MARGOT', 'MARGOTH', 'MARGY', 'MARIA', 'MARIANA', 'MARIANELA', 'MARIBEL', 'MARIBIA', 'MARICEL', 'MARICELA', 'MARICELI', 'MARICET', 'MARICRIS', 'MARIELA', 'MARIELENA', 'MARIELITA', 'MARIEN', 'MARIETHE', 'MARILEPXY', 'MARILEXIS', 'MARILEY', 'MARILLIN', 'MARILU', 'MARILUZ', 'MARILYN', 'MARINA', 'MARINELA', 'MARINELDA', 'MARINELLA', 'MARINO', 'MARIO', 'MARIORY', 'MARIOTTY', 'MARISELA', 'MARISOL', 'MARISTELA', 'MARITZA', 'MARIYAN', 'MARLA', 'MARLEN', 'MARLENE', 'MARLENY', 'MARLENYS', 'MARLESVY', 'MARLEY', 'MARLIENS', 'MARLIN', 'MARLLORY', 'MARLOVY', 'MARLY', 'MARORA', 'MARTHA', 'MARTIN', 'MARTINEZ', 'MARVIN', 'MARY', 'MARYBEL', 'MARYBELL', 'MARYELINE', 'MARYELY', 'MARYLUZ', 'MARYOLI', 'MARYORIE', 'MARYORY', 'MARYSOL', 'MARYUDIRAN', 'MARYULIS', 'MATILDE', 'MAURICIA', 'MAURICIO', 'MAYDETH', 'MAYERLI', 'MAYERLY', 'MAYERLYS', 'MAYERY', 'MAYTHER', 'MAYULI', 'MAYURI', 'MAYURY', 'MAZANORY', 'MECEDES', 'MEDARDO', 'MEDEIZA', 'MELBA', 'MELIDA', 'MELINDA', 'MELISA', 'MELISSA', 'MELIZA', 'MELVIN', 'MERCEDE', 'MERCEDES', 'MERLY', 'MERY', 'MICAELA', 'MICHELL', 'MIGDONIA', 'MIGUEL', 'MILA', 'MILAGRO', 'MILAGROS', 'MILDRED', 'MILDRETH', 'MILENA', 'MILENIS', 'MILEY', 'MILLER', 'MILLERLANDY', 'MILLERLAY', 'MINDRED', 'MIREYA', 'MIRIAM', 'MIRLELLY', 'MIRLETH', 'MIRLEY', 'MIRNEY', 'MIRTA', 'MIRYAM', 'MISAEL', 'MISERICORDIAS', 'MODESTA', 'MODESTO', 'MOISES', 'MONICA', 'MYRIAM', 'MYRIAN', 'NAGEE', 'NAIRITH', 'NANCY', 'NAPOLEON', 'NASLY', 'NASMIYE', 'NATALI', 'NATALIA', 'NATALIE', 'NATALY', 'NATHALIA', 'NATHALIE', 'NATHALY', 'NATIVIDAD', 'NAUSAD', 'NAYDU', 'NAYENCY', 'NAYIBE', 'NAYIBER', 'NAYIBI', 'NAYITH', 'NEFAIDA', 'NEFTALI', 'NEIDERD', 'NEIL', 'NEIS', 'NEL', 'NELA', 'NELCY', 'NELLA', 'NELLIT', 'NELLY', 'NELSON', 'NELSY', 'NELVY', 'NELY', 'NELYS', 'NERY', 'NERYETTE', 'NEXY', 'NEY', 'NEYDA', 'NEYI', 'NICOLAI', 'NICOLAS', 'NICOLASA', 'NIDIA', 'NIEVES', 'NIKOLL', 'NILCIA', 'NILSA', 'NILSON', 'NINETH', 'NINFA', 'NITIA', 'NIVIA', 'NIYERETH', 'NIYOLI', 'NMACULADA', 'NOE', 'NOERYS', 'NOHELIA', 'NOHEMY', 'NOHORA', 'NORA', 'NORALBA', 'NORBERTO', 'NORELBIS', 'NORELKIS', 'NORIEL', 'NORIETH', 'NORLEYS', 'NUBIA', 'NURY', 'NURYS', 'NYDIA', 'OCTAVIO', 'ODAIR', 'ODALIS', 'OFELIA', 'OFIR', 'OLGA', 'OLIVA', 'OLIVERIO', 'OLIVIA', 'OMAIRA', 'OMAR', 'OMER', 'OMEYDA', 'ONASIS', 'ONEIL', 'ORDUVAY', 'ORFA', 'ORFIDANID', 'ORIANA', 'ORLANDO', 'ORLEYDA', 'ORLIDIA', 'ORLINDA', 'OSCAR', 'OSMANY', 'OSWALDO', 'OTILIA', 'OTONIEL', 'PABLO', 'PACELIA', 'PAMELA', 'PAOLA', 'PAQUITA', 'PASCUAL', 'PASCUALA', 'PATRICIA', 'PATRICIIA', 'PATRIS', 'PAUL', 'PAULA', 'PAULETT', 'PAULINA', 'PAULINE', 'PAULO', 'PEDRO', 'PHANOR', 'PIEDAD', 'PIERRE', 'PILAR', 'POLICARPA', 'PRISCILA', 'RAFAEL', 'RAMIRO', 'RAQUEL', 'RAUL', 'REBECA', 'REGINA', 'REIMAR', 'REINALDO', 'REINERIO', 'REMBERTO', 'REMEDIOS', 'RENE', 'RENY', 'REYES', 'REYNERO', 'RICARDO', 'RICAURTE', 'RICHARD', 'RIGOBERTO', 'RIQUILDA', 'RITA', 'ROBEIDO', 'ROBERTO', 'ROBINSON', 'ROCIO', 'RODOLFO', 'RODRIGO', 'RODULFO', 'ROGELIO', 'ROLANDO', 'RONAL', 'RONALD', 'ROSA', 'ROSALBA', 'ROSALIA', 'ROSALYN', 'ROSANA', 'ROSANITH', 'ROSARIO', 'ROSAURA', 'ROSEHELYS', 'ROSELLY', 'ROSEMARY', 'ROSEMBER', 'ROSIRIS', 'ROSSLYN', 'ROSSMARY', 'ROSSMIRA', 'ROSSY', 'ROSY', 'ROVIRA', 'ROXANA', 'RUBIELA', 'RUBY', 'RUSDERY', 'RUTH', 'SABATH', 'SABINA', 'SAHORY', 'SAIDA', 'SAIR', 'SALENA', 'SALOMON', 'SAMANTHA', 'SAMARA', 'SAMARI', 'SAMIRA', 'SAMUEL', 'SANDRA', 'SANDY', 'SANTIAGO', 'SANTOS', 'SARA', 'SARAY', 'SATURIA', 'SAYIRA', 'SCARLETT', 'SEBASTIAN', 'SEFERINA', 'SEGUNDO', 'SELENE', 'SENITH', 'SERGIO', 'SHADIA', 'SHESEINER', 'SHIRLEY', 'SHYRLY', 'SILENA', 'SILENIA', 'SILVANA', 'SILVIA', 'SILVIO', 'SINDY', 'SIRELIS', 'SIRLEY', 'SLENDY', 'SOBEIDA', 'SOCORRO', 'SOFIA', 'SOLANGE', 'SOLANGEL', 'SOLANYE', 'SOLANYIDA', 'SOLEDAD', 'SOLENLLY', 'SOLEY', 'SOLMERIDA', 'SONIA', 'SONSIR', 'SORALY', 'SORAYA', 'STEFANIA', 'STEFANNI', 'STEFANNIA', 'STEFFANY', 'STELLA', 'STEPANOVA', 'STEPHANIE', 'STEPHANY', 'STEVEN', 'STEVENS', 'STIVEN', 'STUARD', 'SUGEY', 'SULAY', 'SULEIMA', 'SULEMA', 'SURLINE', 'SUSANA', 'TANIA', 'TARCISIO', 'TATHIANA', 'TATIANA', 'TEIRU', 'TERCERO', 'TERESA', 'TERESITA', 'TOBIAS', 'TOMAS', 'TORCOROMA', 'TULIA', 'TULIO', 'ULISES', 'URBANO', 'URIEL', 'URNEY', 'VALENTINA', 'VANESSA', 'VANEZA', 'VANINA', 'VERONICA', 'VIANNEY', 'VICENTE', 'VICKIANA', 'VICTOR', 'VICTORIA', 'VIDAL', 'VIKI', 'VILMA', 'VIRGINIA', 'VITELIO', 'VIVIAN', 'VIVIANA', 'VIVINA', 'WADY', 'WALTER', 'WASHINGTON', 'WAYMAN', 'WBEIMAR', 'WENDY', 'WILBER', 'WILFRAN', 'WILFRED', 'WILFRIDO', 'WILLIAM', 'WILLLIAM', 'WILLMAN', 'WILMAN', 'WILMAR', 'WILMER', 'WILSON', 'WILTON', 'XILENE', 'XIMENA', 'XIOMARA', 'XIOMARY', 'YACKELINE', 'YACQUELINE', 'YADILIS', 'YADIRA', 'YAGENIA', 'YAHIRA', 'YAIR', 'YAJAHIRA', 'YAJAIRA', 'YAKELINE', 'YALEXA', 'YALILA', 'YALILE', 'YAMEL', 'YAMETH', 'YAMID', 'YAMIL', 'YAMILE', 'YAMILETH', 'YAMILIA', 'YAMIR', 'YAMIRA', 'YANCILEY', 'YANDIS', 'YANED', 'YANEIDA', 'YANERIS', 'YANET', 'YANETH', 'YANIBET', 'YANINA', 'YANINE', 'YANIRA', 'YANIRE', 'YANISA', 'YANITH', 'YANNET', 'YANNETH', 'YAQUELIN', 'YAQUELINE', 'YARITZA', 'YARLEY', 'YARLEYS', 'YARLIN', 'YARMIRE', 'YASCENIA', 'YASIRA', 'YASIRI', 'YASMID', 'YASMIN', 'YASMINE', 'YASNELY', 'YASSIRA', 'YAZMIN', 'YECENIA', 'YECID', 'YECIT', 'YEEBY', 'YEIMY', 'YEINNY', 'YEISON', 'YENIFER', 'YENNI', 'YENNIFER', 'YENNY', 'YERANIA', 'YERMEN', 'YESENIA', 'YESID', 'YESNIT', 'YESSENIA', 'YESSICA', 'YESSID', 'YHOVANA', 'YICELA', 'YICELY', 'YICETH', 'YILVANA', 'YINED', 'YINETH', 'YIRLETH', 'YIRLEZA', 'YISED', 'YISEL', 'YISELA', 'YISENIA', 'YISETH', 'YISSEL', 'YOBANA', 'YOBANY', 'YOCELIN', 'YOFREN', 'YOHAINI', 'YOHANA', 'YOHANIS', 'YOHANNA', 'YOLANDA', 'YOLANY', 'YOLEIDA', 'YOLIMA', 'YOLINA', 'YORLADY', 'YORLANIS', 'YORLENIS', 'YORLENY', 'YORMARY', 'YORYEI', 'YOSELLING', 'YOVANNY', 'YOVANY', 'YUBELLY', 'YUBER', 'YUBID', 'YUBIEL', 'YUDEIMY', 'YUDIVIA', 'YULEYDIS', 'YULI', 'YULIANA', 'YULIE', 'YULIEDT', 'YULIET', 'YULIETH', 'YULINES', 'YULIZA', 'YUPSSY', 'YURANI', 'YURANIS', 'YURANY', 'YURENY', 'YURIZAN', 'YURLEY', 'YURY', 'YUVELY', 'ZABALA', 'ZAIDA', 'ZAIDE', 'ZAMIRA', 'ZENETH', 'ZENITH', 'ZOBEYDA', 'ZOE', 'ZOLANYI', 'ZOMARA', 'ZORAIDA', 'ZORAYDA', 'ZULAIS', 'ZULETDY',
        ];
        nombres.sort();
        var contador_usuario = 0;
        for (var i = 0; i < nombres.length; i++) {
            var string_usuario = dato_opcional.toUpperCase();
            string_usuario = string_usuario.replace('Á', "A").replace('É', "E").replace('Í', "I").replace('Ó', "O").replace('Ú', "U").split(' ');
            if (contador_usuario == 0) {
                for (var j = 0; j < string_usuario.length; j++) {
                    if (string_usuario[j] == nombres[i]) {
                        nombre_usuario = nombres[i];
                        nombre_corto = nombres[i];
                        contador_usuario = 1;
                        break;
                    }
                }
            } else {
                break;
            }
        }
        $('.contenido-chat-chatbot').append(
            '<div class="col s10 mensaje-bot mensaje-espera white-text">' +
            '...' +
            '</div>'
        );
        setTimeout(function () {
            $('.mensaje-espera').remove();
            $('.contenido-chat-chatbot').append(
                '<div class="col s12 no-padding nombre-bot">' +
                'Camilo:' +
                '</div>' +
                '<div class="col s10 mensaje-bot white-text text-darken-4">' +
                nombre_usuario + ' yo me encargo de ponerte en contacto con un asesor para que responda tu consulta' +
                '</div>' +
                '<div class="col s10 mensaje-bot white-text text-darken-4">' +
                '¿Podrías dejarme tu teléfono completo?' +
                '</div>'
            );
            $('.contenido-chat-chatbot').scrollTop(document.getElementById('contenido-chat-chatbot').scrollHeight);
            $('#mensaje_chatbot').attr('disabled', false);
            $('#mensaje_chatbot').focus();
        }, 2000);
        mensajes_bot += ('//' + nombre_usuario + ' yo me encargo de ponerte en contacto con un asesor para que responda tu consulta');
        mensajes_bot += ('//' + '¿Podrías dejarme tu teléfono completo?');
        $('#mensaje_chatbot').attr('type', 'number');
        $('#mensaje_chatbot').attr('min', '1000000');
    } else if (numero == 3) {
        numero_cliente_chat = dato_opcional;
        $('.contenido-chat-chatbot').append(
            '<div class="col s10 mensaje-bot mensaje-espera white-text">' +
            '...' +
            '</div>'
        );
        setTimeout(function () {
            $('.mensaje-espera').remove();
            $('.contenido-chat-chatbot').append(
                '<div class="col s12 no-padding nombre-bot">' +
                'Camilo:' +
                '</div>' +
                '<div class="col s10 mensaje-bot white-text text-darken-4">' +
                '¿Podrías dejarme tu email?' +
                '</div>'
            );
            $('.contenido-chat-chatbot').scrollTop(document.getElementById('contenido-chat-chatbot').scrollHeight);
            $('#mensaje_chatbot').attr('disabled', false);
            $('#mensaje_chatbot').focus();
        }, 2000);
        mensajes_bot += ('//' + '¿Podrías dejarme tu email?');
        $('#mensaje_chatbot').attr('type', 'email');
        $('#mensaje_chatbot').removeAttr('min');
    } else if (numero == 4) {
        correo_cliente_chat = dato_opcional;
        $('.contenido-chat-chatbot').append(
            '<div class="col s10 mensaje-bot mensaje-espera white-text">' +
            '...' +
            '</div>'
        );
        setTimeout(function () {
            $('.mensaje-espera').remove();
            $('.contenido-chat-chatbot').append(
                '<div class="col s12 no-padding nombre-bot">' +
                'Camilo:' +
                '</div>' +
                '<div class="col s10 mensaje-bot white-text text-darken-4">' +
                '¿En qué horario del día prefieres que te llamemos?' +
                '</div>'
            );
            $('.contenido-chat-chatbot').scrollTop(document.getElementById('contenido-chat-chatbot').scrollHeight);
            $('#mensaje_chatbot').attr('disabled', false);
            $('#mensaje_chatbot').focus();
        }, 2000);
        mensajes_bot += ('//' + '¿En qué horario del día prefieres que te llamemos?');
        $('#mensaje_chatbot').attr('type', 'text');
    } else if (numero == 5) {
        horario_llamar = dato_opcional;
        $('.contenido-chat-chatbot').append(
            '<div class="col s10 mensaje-bot mensaje-espera white-text">' +
            '...' +
            '</div>'
        );
        setTimeout(function () {
            $('.mensaje-espera').remove();
            $('.contenido-chat-chatbot').append(
                '<div class="col s12 no-padding nombre-bot">' +
                'Camilo:' +
                '</div>' +
                '<div class="col s10 mensaje-bot white-text text-darken-4">' +
                '¿Quieres dejarme alguna consulta adicional?' +
                '</div>'
            );
            $('.contenido-chat-chatbot').scrollTop(document.getElementById('contenido-chat-chatbot').scrollHeight);
            $('#mensaje_chatbot').attr('disabled', false);
            $('#mensaje_chatbot').focus();
        }, 2000);
        mensajes_bot += ('//' + '¿Quieres dejarme alguna consulta adicional?');
    } else if (numero == 6) {
        consulta_adicional = dato_opcional;
        $('.contenido-chat-chatbot').append(
            '<div class="col s10 mensaje-bot mensaje-espera white-text">' +
            '...' +
            '</div>'
        );
        setTimeout(function () {
            $('.mensaje-espera').remove();
            $('.contenido-chat-chatbot').append(
                '<div class="col s12 no-padding nombre-bot">' +
                'Camilo:' +
                '</div>' +
                '<div class="col s10 mensaje-bot white-text text-darken-4">' +
                nombre_usuario + ' con la información que me has pasado un asesor se comunicará contigo a la brevedad.' +
                '</div>'
            );
            $('.contenido-chat-chatbot').scrollTop(document.getElementById('contenido-chat-chatbot').scrollHeight);
        }, 2000);
        mensajes_bot += ('//' + nombre_usuario + ' con la información que me has pasado un asesor se comunicará contigo a la brevedad.');
        $('#mensaje_chatbot').attr('type', 'text');
        $('#enviar_mensaje').find('i').html('restart_alt');
        $('#enviar_mensaje').addClass('tooltipped');
        $('#enviar_mensaje').attr('data-tooltip', 'Reiniciar chat');
        $('.tooltipped').tooltip();
        $('#mensaje_chatbot').attr('disabled', true);
        $.ajax({
            url: "https://extreme-ip-lookup.com/json/",
            type: 'get',
            success: function (result) {
                var datos = {
                    nombre: nombre_cliente_chat,
                    correo: correo_cliente_chat,
                    numero: numero_cliente_chat,
                    tema: tema_cliente_chat,
                    pais: result.country,
                    ip: result.query,
                    ciudad: result.city,
                    region: result.region,
                    fecha_inicio: fecha_inicio,
                    horario_llamar: horario_llamar,
                    consulta_adicional: consulta_adicional,
                    nombre_corto: nombre_corto,
                    url: window.location.href,
                    mensajes_bot: mensajes_bot,
                    envio_chatbot: 1,
                };
                var url_archivo = location.href.split("/");
                var url = '../php/enviar.php'; //Para todas las páginas diferentes a index que estén dentro de una carpeta
                if (url_archivo[url_archivo.length-1] == '' || url_archivo[url_archivo.length-1] == 'index.php') { //Para index
                    url = 'php/enviar.php';
                }
                $.ajax({
                    url: url,
                    type: 'post',
                    data: datos,
                    success: function (result) {
                        console.log(result);
                    }
                });
            }
        });
    }
}
$('#envio').click(function () {
    M.Toast.dismissAll();
    var correo = $("#correo").val().split('@');
    if (correo.length == 2) {
        correo = correo[1].split('.');
    }
    var response = grecaptcha.getResponse();
    if ($("#nombre").val() == "" || $("#nombre").val() == " ") {
        M.toast({
            html: 'Necesita colocar un nombre'
        });
        $("#nombre").focus();
    } else if ($("#correo").val() == "" || $("#correo").val() == " " || $("#correo").val().indexOf('@') == -1 || correo.length <= 1) {
        M.toast({
            html: 'Necesita colocar un correo valido'
        });
        $("#correo").focus();
    } else if ($("#telefono").val() == "" || $("#telefono").val() == " " || $("#telefono").val().length < 7 || $("#telefono").val().length > 10) {
        M.toast({
            html: 'Necesita colocar un teléfono valido'
        });
        $("#telefono").focus();
    } else if (!$("#asunto").val()) {
        M.toast({
            html: 'Necesita seleccionar un asunto'
        });
        $("#asunto").focus();
    } else if ($("#mensaje").val() == "" || $("#mensaje").val() == " ") {
        M.toast({
            html: 'Necesita seleccionar un mensaje'
        });
        $("#mensaje").focus();
    } else if (response.length == 0) {
        M.toast({
            html: 'Necesita verificar que no es un robot'
        });
    } else {
        var nombre = $("#nombre").val();
        var correo = $("#correo").val();
        var telefono = $("#telefono").val();
        var asunto = $("#asunto").val();
        var mensaje = $("#mensaje").val();
        $.ajax({
            url: "https://extreme-ip-lookup.com/json/",
            type: 'get',
            success: function (result) {
                $.post("../php/enviar.php", {
                        parametros: {
                            nombre,
                            correo,
                            telefono,
                            asunto,
                            mensaje,
                            pais: result.country,
                            ip: result.query,
                            ciudad: result.city,
                            region: result.region,
                            url: window.location.href,
                            envio_contacto: 1,
                        },
                        captcha: grecaptcha.getResponse()
                    },
                    function (data) {
                        M.Toast.dismissAll();
                        if (data == "1") {
                            M.toast({html: 'Gracias por contactarnos'});
                            $("#nombre").val("");
                            $("#correo").val("");
                            $("#telefono").val("");
                            $("#asunto").val("");
                            $("#mensaje").val("");
                        } else {
                            M.toast({html: 'Ocurrió un error, intentelo de nuevo'});
                        }
                    });
            }
        });
    }
});
$('#sidenav_marcas').click(function () {
    $('.sidenav').sidenav('close');
});