
<section id="section">

        <article id="grabar">
          <div class="ed-container abcenter main">
            <div class="ed-item">
              <figure alt="logo"><img src="<?php echo asset_url(); ?>/img/logo.svg" alt=""/></figure>
            </div>
            <div class="ed-item">
              <figure><img id="pasos" src="<?php echo asset_url(); ?>/img/pasos1.svg" alt=""/></figure>
            </div>
          </div>
          <div class="ed-container abcenter">
            <div class="ed-item">
              	<button id="start_button" class="microfono">
					<figure  alt="micro">
              			<img src="<?php echo asset_url(); ?>/img/micro.svg" id="start_img"/>
              		</figure>
				</button>

              	<!--
              	<figure alt="micro">
              	<img src="<?php echo asset_url(); ?>/img/micro.svg"/>
              	</figure>
              	-->
            </div>
            <!-- mensajes de la aplicacion -->
				<div id="info" style="text-align:center; font-weight:bold;font-size:16px;font-family: 'rawengulklight', sans-serif;display:block;">
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
            <div class="ed-item">
              <p>Apretá el mic y seleccioná “permitir” para comenzar a grabar</p>
            </div>
          </div>
          <div class="ed-container abcenter">
            <div class="ed-item">
              <button id="btnManual"><a href="#manual" class="icon-derecha espacio">Ingresar Manualmente</a></button>
            </div>
          </div>
        </article>
        <article id="grabado">
			<form id="form" method="POST" action="<?=base_url();?>manual_post">
				<!-- texto hablado por mic * OCULTO * -->
				<div id="results" class="none">
					<span id="final_span" class="final"></span>
					<span id="interim_span" class="interim"></span>
					<input type="text" name="problema" id="test_input" style="background:blue;" />
				</div>
				<!-- Selector de lenguaje * OCULTO * -->
				<div id="div_language" class="none">
					<select id="select_language" onchange="updateCountry()"></select>
					&nbsp;&nbsp;
					<select id="select_dialect"></select>
				</div>
				<div  class="none">
					<div class="col s8 offset-s2" id="voz">
						<img class="responsive-img" src="<?php echo asset_url(); ?>/img/onda.jpg" alt="" style="margin-bottom:10px;">
					</div>
					<div class="col s12 m6 offset-m3">
						
					<div style="text-align:left;min-height: 100px; margin-bottom:10px;display:none;" id="puteada_mostrar"></div>
					</div>
				</div>
				<input type="submit" value="SIGUIENTE" id="siguiente" atributoX>
				
			</form>
        </article>
        <article id="manual">
          <div class="ed-container abcenter main">
            <div class="ed-item">
              <figure alt="logo"><img src="<?php echo asset_url(); ?>/img/logo.svg" alt=""/></figure>
            </div>
            <div class="ed-item">
              <figure><img id="pasos" src="<?php echo asset_url(); ?>/img/pasos1.svg" alt=""/></figure>
            </div>
          </div>
          <div class="ed-container abcenter">
            <div class="ed-item">
              <form action="<?=base_url();?>manual_post" id="form" method="POST">
              	<span class="input input--jiro">
                  <textarea name="problema" id="input-10" type="text" required="required" class="input__field input__field--jiro"></textarea>
                  <label for="input-10" class="input__label input__label--jiro"><span class="input__label-content input__label-content--jiro">Escribe aquí</span></label></span>
                <button>SIGUIENTE</button>
              </form>
            </div>
          </div>
        </article>
        

<?php /*

<div class="red center" style="font-size:15px;color:white;">
	<?php 
		if(isset($_GET['error'])){
			$error_obtenido = $_GET['error'];
			if($error_obtenido == "palabra"){ 
				echo "No se detecto ningun insulto. Dale descargate tranquilo!";
			} else{
				echo "No se ha detectado ninguna empresa, volv&eacute; a intentar!";
			}
		}
	?>
</div>

<div id="container" class="container center">

<div class="row">
	<div class="col s8 center offset-s2">
		<button id="start_button" onmousedown="startButton(event)" style="background:none;border:none;margin-top:10px;">
			<img class="responsive-img" id="start_img" src="<?php echo asset_url(); ?>/img/mic2.png" alt="Start">
		</button>
	</div>
	<div class="col s12 m6 offset-m3 pressrec" >
		APRETA PARA GRABAR
	</div>
</div>
	
<form id="form" method="POST" action="/manual_post">
	<!-- mensajes de la aplicacion -->
	<div id="info" style="text-align:center; font-weight:bold;font-size:16px;font-family: 'rawengulklight', sans-serif;display:block;">
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
		<input type="text" name="problema" id="test_input" style="background:blue;" />
		<p>
	</div>

	<!-- Selector de lenguaje * OCULTO * -->
	<div id="div_language" style="display:none;">
		<select id="select_language" onchange="updateCountry()"></select>
		&nbsp;&nbsp;
		<select id="select_dialect"></select>
	</div>
		<div class="row ">
			<div class="col s8 offset-s2" id="voz">
				 <img class="responsive-img" src="<?php echo asset_url(); ?>/img/onda.jpg" alt="" style="margin-bottom:10px;">
			 </div>
	 		<div class="col s12 m6 offset-m3">
	 			<input type="submit" value="SIGUIENTE" id="siguiente" class="siguiente" style="display:none;">
	 			<div style="text-align:left;min-height: 100px; margin-bottom:10px;display:none;" id="puteada_mostrar"></div>
	 		</div>
			<div class="col s12 m6 offset-m3">
	 			<a href="/manual" id="ingresar"><h2>INGRESAR MANUALMENTE</h2></a>
	 		</div>
	 		<div id="pasos">
				 <img class="responsive-img" src="<?php echo asset_url(); ?>/img/paso-1.png" alt="" style="margin-top:20px;">
			</div>
 		</div>
 		
		

	<!--   <a href="" ><h3 style="display:none;" id="next_step">SIGUIENTE</h3></a> -->

</form>
</div>


 */?>
 <script>
	dominio = "<?php echo asset_url(); ?>";
</script>
