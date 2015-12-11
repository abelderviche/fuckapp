<<<<<<< HEAD
<div id="container" class="ed-container" style="background:#e0e0e0;font-size:14px;margin-top:35px;">
  <div class="ed-item" >
    <div class="col s12 " style="text-align:right;font-size:14px;font-weight:bold;"><?=date("d/m/Y")?></div>
    <div class="col s12" style="font-size:14px;font-size:14px;font-weight:bold;">Sres. <?=ucfirst($datos["empresa"]);?> S.A.</div>
      <div class="col s12 " style="text-align:justify;font-size:14px; ">
=======
<div class="ed-container abcenter main">
  <div class="ed-item">
    <figure alt="logo"><img src="<?php echo asset_url(); ?>/img/logo.svg" alt=""/></figure>
  </div>
  <div class="ed-item">
    <figure><img id="pasos" src="<?php echo asset_url(); ?>/img/pasos3.svg" alt=""/></figure>
  </div>
</div>
<div id="container" class="ed-container" style="background:#e0e0e0;font-size:14px;margin-top:38px;">
  <div class="ed-item" >
    <div class="fecha"><?=date("d/m/Y")?></div>
    <div class="namEmpresa">Sres. <?=ucfirst($datos["empresa"]);?> S.A.</div>
      <div class="carta">
>>>>>>> 00d1757ccd20f0f0f83666baf5eaa69a9fb84b11
        A través de la presente comunico a usted mi disconformidad 
        con respecto a las condiciones actuales de la prestación del servicio.
        <br><br>
        Espero contar con su respaldo y  por ende con una pronta solución a los inconvenientes que esta situación manifiesta. <br>
        En caso de silencio, procederé a llevar a cabo ante la Oficina de Protección al Consumidor, el trámite de rigor.<br>
        Quedo a la espera de su respuesta y agradezco desde ya la atención a mi solicitud.<br>
        <br>
        Sin otro particular. 
      </div>
    <div class="usuario"><?=$datos["nombre"]?> <?=$datos["apellido"]?></div>
  </div>
</div>
<div class="ed-container">
  <div class="ed-item">
      <a class='circle icon-twitter abcenter' href="https://twitter.com/share?url=http://www.puteapp.com/compartir/<?=$id_puteada;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank" title="Compartir en Twitter"></a>
     <a class='circle icon-facebook abcenter' href="https://www.facebook.com/sharer/sharer.php?u=http://www.puteapp.com/compartir/<?=$id_puteada?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank" title="Compartir en Facebook"></a>
      <meta property="og:title" content="Puteapp" />
      <meta property="og:type" content="article" />
      <meta property="og:image" content="<?php echo asset_url(); ?>/img/logo.png" />
      <meta property="og:description" content="test" />
  </div>
</div>
  