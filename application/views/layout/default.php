<?php
$this->load->view("/templates/header");
if (isset($contenido)) {
    echo $contenido;
}
$this->load->view("/templates/footer");
?>