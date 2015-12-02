<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fuckapp</title>

        <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="assets/css/stylematerialize.css"  media="screen,projection"/>

        <?/*Descomentar 
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/styles.css" />
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/font-awesome.min.css" />-->
    */?>
    </head>
    <!--<body id="<?php //echo isset($page_id) ? $page_id : ""; ?>">-->
    <body id="">
    <?php //Descomentar $this->load->view("layout/menu"); ?>
        <nav>
            <div class="nav-wrapper" style="background-color:#290728;background: -moz-linear-gradient(top, #290728 0%, #3c0a3c 100%);">
                <!-- <img src="<?php //echo asset_url(); ?>img/logo.png" alt="logo">-->
                <a href="#" class="brand-logo right" style="text-align: center;"><img height="50px" src="assets/img/logo.png" alt="logo"></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="" id="volver"><</a></li>
                </ul>
            </div>
        </nav>
        <div class="container center">
            
            <div class="row">
                <button id="start_button" onmousedown="startButton(event)" style="background:none;border:none;">
                <img id="start_img" src="assets/img/mic2.png" alt="Start"></button>
                <h3>APRETA PARA GRABAR</h3>
            </div>
            <form id="form" method="POST" action="/pasos/paso2">
        <!-- mensajes de la aplicacion -->
        <div id="info" style="text-align:center; font-size:14px;font-family: 'rawengulklight', sans-serif;">
          <p id="info_start"></p>
          <p id="info_speak_now">Hablá ahora. Volvé a apretar para pasar al siguiente paso</p>
          <p id="info_no_speech">No se detecto ningun sonido. Talvez tengas que revisar
            <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
              las opciones del micrófono</a>.</p>
          <p id="info_no_microphone" style="display:none">
            No se encontró un micrófono. Asegurate que esté conectado o revisá que
            <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
            las opciones del micrófono</a> esten bien configuradas.</p>
          <p id="info_allow">Presióna en "Permitir" para habilitar el micrófono.</p>
          <p id="info_denied">El permiso para el micrófono fue denegado.</p>
          <p id="info_blocked">El permiso para el micrófono está bloqueado. para cambiar,
            a chrome://settings/contentExceptions#media-stream</p>
          <p id="info_upgrade">El reconocedor de voz no está disponible en este navegador
             Instalá <a href="//www.google.com/chrome">Chrome</a>
             version 25 o mayor.</p>
        </div>

        <!-- texto hablado por mic * OCULTO * -->
        <div id="results" style="display:none;">
          <span id="final_span" class="final"></span>
          <span id="interim_span" class="interim"></span>
      <input type="text" name="texto" id="test_input" style="background:blue;" />
          <p>
        </div>
    
        <!-- Selector de lenguaje * OCULTO * -->
        <div id="div_language" style="display:none;">
            <select id="select_language" onchange="updateCountry()"></select>
            &nbsp;&nbsp;
            <select id="select_dialect"></select>
        </div>
        <input type="submit" value="SIGUIENTE" id="siguiente" class="siguiente">
    <a href="/manual" id="ingresar"><h2>INGRESAR MANUALMENTE</h2></a>
 <!--   <a href="" ><h3 style="display:none;" id="next_step">SIGUIENTE</h3></a> -->
        <div id="pasos">
            <figure><img src="assets/img/paso-1.png" alt=""></figure>
        </div>
    </section>
</form>
 
        </div> <!-- close div containder -->
         <footer class="page-footer" style="background-color:#3b0a3b">
          <div class="footer-copyright">
            <div class="container center">
            © 2014 Copyright Text
            </div>
          </div>
        </footer>

        <? /*Descomentar
        <script src="<?php echo asset_url(); ?>js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="<?php echo asset_url(); ?>js/speech.js" type="text/javascript"></script> */ ?>
        <script src="assets/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="assets/js/speech.js" type="text/javascript"></script> 
        <?php /*DESCOMENTAR if ($page_id == "usuario_registro"): ?>
        <script src="<?php echo asset_url(); ?>js/usuario_registro.js" type="text/javascript"></script>
        <?php endif; */?>
    </body>
</html>
