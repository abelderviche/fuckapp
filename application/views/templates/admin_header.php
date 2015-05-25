<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fuckapp</title>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/materialize.min.css" />
    </head>
    <body id="<?php echo isset($page_id) ? $page_id : ""; ?>">
        <?php $this->load->view("layout/menu"); ?>
        <header>
          <nav>
            <div class="nav-wrapper">
              <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li style="margin: 0 30px;"><span style="font-size:1.5em"><?=$this->session->get_data('usuario/nombre')?> <?=$this->session->get_data('usuario/apellido')?></span></li>
                <li <?=(isset($page_id) && $page_id == "listar_empresas") ? "class='active'" : ""?>><a href="sass.html">Empresas</a></li>
                <?php echo (int) tiene_permiso("listar_empresas")  ?>
                <li <?=(isset($page_id) && $page_id == "listar_tipo_de_empresas") ? "class='active'" : ""?>><a href="components.html">Tipos de Empresa</a></li>
                
                <?php if ((int) $this->session->get_data("usuario/id_acl_usuario") == 1) : //solo para ironadmin : ?>
                  <li> <a href="/acl/permisos">Permisos</a></li>
                <?php endif; ?>
            </ul>              
              <span class="brand-logo center"><img src="<?php echo asset_url(); ?>img/logo.png" alt="logo"></span>
              <ul class="right hide-on-med-and-down">
        <li style="margin: 0 10px;"><a href="/logout"><i class="mdi-action-settings-power"></i></li>
      </ul>
            </div>
          </nav>        
        </header>
