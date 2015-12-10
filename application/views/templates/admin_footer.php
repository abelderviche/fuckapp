</body>
<footer>
	</footer>

<script src="<?php echo asset_url(); ?>js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="<?php echo asset_url(); ?>js/materialize.min.js" type="text/javascript"></script>
<script src="<?php echo asset_url(); ?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo asset_url(); ?>js/recorder.js" type="text/javascript"></script>
<script src="<?php echo asset_url(); ?>js/recorderWorker.js" type="text/javascript"></script>
<script src="<?php echo asset_url(); ?>js/speech.js" type="text/javascript"></script>
<script>
$( document ).ready(function(){
	$(".button-collapse").sideNav();
});
</script>
<?php if (isset($page_id) && $page_id == "listar_empresas"): ?>
 <script src="<?php echo asset_url(); ?>js/listado_empresas.js" type="text/javascript"></script>
<?php endif; ?>
<?php if (isset($page_id) && $page_id == "listar_tipoempresas"): ?>
 <script src="<?php echo asset_url(); ?>js/listado_tipoempresas.js" type="text/javascript"></script>
<?php endif; ?>
<?php if (isset($page_id) && $page_id == "listar_palabras"): ?>
 <script src="<?php echo asset_url(); ?>js/listado_palabras.js" type="text/javascript"></script>
<?php endif; ?>
</body>
</html>