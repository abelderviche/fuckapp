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
            <div class="nav-wrapper grey darken-3">
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              <ul class="left hide-on-med-and-down">
              <li style="margin: 0 30px;"><span style="font-size:1.5em"><?=$this->session->get_data('usuario/nombre')?> <?=$this->session->get_data('usuario/apellido')?></span></li>
                <?php if (tiene_permiso("listar_empresas")) :  ?>
                <li <?=(isset($page_id) && $page_id == "listar_empresas") ? "class='active'" : ""?>><a href="/admin/empresas/listar_empresas">Empresas</a></li>
                <li <?=(isset($page_id) && $page_id == "listar_tipoempresas") ? "class='active'" : ""?>><a href="/admin/tipoempresas/listar">Tipos de Empresa</a></li>
                <li <?=(isset($page_id) && $page_id == "listar_palabras") ? "class='active'" : ""?>><a href="/admin/palabras/listar">Palabras Clave</a></li>                
                <?php endif; ?>
                <?php if ((int) $this->session->get_data("usuario/id_acl_usuario") == 1) : //solo para ironadmin : ?>
                  <li> <a href="/acl/permisos">Permisos</a></li>
                <?php endif; ?>
            </ul>  
                <!-- mobile -->               
                <ul class="side-nav" id="mobile-demo">
                <?php if (tiene_permiso("listar_empresas")) :  ?>
                <li <?=(isset($page_id) && $page_id == "listar_empresas") ? "class='active'" : ""?>><a href="/admin/empresas/listar_empresas">Empresas</a></li>
                <li <?=(isset($page_id) && $page_id == "listar_tipoempresas") ? "class='active'" : ""?>><a href="/admin/tipoempresas/listar">Tipos de Empresa</a></li>
                <li <?=(isset($page_id) && $page_id == "listar_palabras") ? "class='active'" : ""?>><a href="/admin/empresas/listar_palabras_clave">Palabras Clave</a></li>                
                <?php endif; ?>
                <?php if ((int) $this->session->get_data("usuario/id_acl_usuario") == 1) : //solo para ironadmin : ?>
                  <li> <a href="/acl/permisos">Permisos</a></li>
                <?php endif; ?>    
                <li><a href="/logout">Logout</li>            
                </ul>                
              <span class="brand-logo center"><img style="height:60px;" src="<?php echo asset_url(); ?>img/puteapp-logo.png" alt="logo"></span>
              <ul class="right hide-on-med-and-down">
        <li style="margin: 0 10px;"><a href="/logout"><i class="mdi-action-settings-power"></i></a></li>
      </ul>
            </div>
          </nav>        
        </header>
<body class="grey lighten-2">