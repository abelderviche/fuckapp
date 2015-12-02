        </main>
        <footer class="page-footer" style="background-color:#3b0a3b;margin-bottom:0;">
          <div class="footer-copyright">
            <div class="container center">
            © 2014 Copyright Text
            </div>
          </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="<?php echo asset_url(); ?>js/viewport.js"></script>
        <script src="<?php echo asset_url(); ?>js/scripts.js"></script>
        <script src="<?php echo asset_url(); ?>js/speech.js" type="text/javascript"></script> 
        <?php if ($page_id == "usuario_registro"): ?>
        <script src="<?php echo asset_url(); ?>js/usuario_registro.js" type="text/javascript"></script>
        <?php endif; ?>
    </body>
</html>