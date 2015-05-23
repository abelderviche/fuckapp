<?php
$this->load->view("/templates/admin_header");
if (isset($contenido)) {
    echo $contenido;
}
$this->load->view("/templates/admin_footer");
?>