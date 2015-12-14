        </main>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/scripts.js"></script>
        <!--<script src="<?php echo asset_url(); ?>js/speech.js" type="text/javascript"></script> -->
        <?php if ($page_id == "usuario_registro"): ?>
        <script src="<?php echo asset_url(); ?>js/usuario_registro.js" type="text/javascript"></script>
        <?php endif; ?>

		<script type="text/javascript">
			<?php if($_GET['error'] && $_GET['error'] == 'palabra'){ ?>

					/*script para mostrar NO SE ENCONTRO INSULTO */
					
		        var template = '<article class="alertas">'+
		        	'<div class="ed-container abcenter no-padding">'+
		        		'<div class="ed-item insulto">'+
		        			'<figure>'+
		        				'<img src="<?php echo asset_url(); ?>/img/insulto.png" alt="insulto">'+
		        			'</figure>'+
		        			'<p>No se detectó ningún insulto.</p>'+
		    				'<p><b>Volvé a intentarlo de forma fuerte y clara.</b></p>'+
		    				'<button onClick="javascript:window.location.href=\'<?=base_url();?>\';">OK</button>'+
		        		'</div>'+
		        	'</div>'+
		        '</article>';
		        $("body").append($(template));

				<?php }elseif($_GET['error']){ ?>

					/*script para mostrar no se detectro empresa */
				var template = '<article class="alertas">'+
		        	'<div class="ed-container abcenter no-padding">'+
		        		'<div class="ed-item empresa">'+
		        			'<figure>'+
		        				'<img src="<?php echo asset_url(); ?>/img/insulto.png" alt="empresa">'+
		        			'</figure>'+
		        			'<p>No se detectó ninguna empresa.</p>'+
		    				'<p><b>Volvé a intentarlo de forma fuerte y clara.</b></p>'+
		    				'<button onClick="javascript:window.location.href=\'<?=base_url();?>\';">OK</button>'+
		        		'</div>'+
		        	'</div>'+
		        '</article>';	
		        $("body").append($(template));

				<?php } ?>


		</script>
    </body>
</html>