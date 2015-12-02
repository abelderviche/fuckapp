
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo asset_url(); ?>/css/styles.css"/>
    <title>Puteapp</title>
  </head>
  <body  id="<?php echo isset($page_id) ? $page_id : ""; ?>">
    <div class="loader">
      <figure><img src="<?php echo asset_url(); ?>/img/logo.svg" alt="logo"/></figure>
    </div>
    <header>
      <div class="ed-container full">
        <div data="menu" class="ed-item justify"><span id="back"><a href="#grabar" class="icon-izquierda"></a></span><span id="btn" class="icon-menu"></span></div>
        <div data="nav" class="ed-item no-padding">
          <nav class="menu">
            <figure><img src="<?php echo asset_url(); ?>/img/logo.svg" alt=""/></figure>
            <ul>
              <li> <a href="#grabar">GRABAR</a></li>
              <li> <a href="#manual">AYUDA</a></li>
              <li> <a href="#">TERMINOS Y CONDICIONES</a></li>
              <li> <a href="#login">CREDITOS</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>    