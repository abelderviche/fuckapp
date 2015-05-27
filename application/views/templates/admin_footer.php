<footer>
	</footer>

<script src="<?php echo asset_url(); ?>js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="<?php echo asset_url(); ?>js/materialize.min.js" type="text/javascript"></script>
<script src="<?php echo asset_url(); ?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo asset_url(); ?>js/recorder.js" type="text/javascript"></script>
<script src="<?php echo asset_url(); ?>js/recorderWorker.js" type="text/javascript"></script>
<script src="<?php echo asset_url(); ?>js/speech.js" type="text/javascript"></script>
<?php if (isset($page_id) && $page_id == "listar_empresas"): ?>
 <script src="<?php echo asset_url(); ?>js/listado_empresas.js" type="text/javascript"></script>
<?php endif; ?>
</body>
</html>