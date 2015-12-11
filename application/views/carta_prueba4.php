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
        En el marco de la relación de consumo que nos une, concurro a efectos de manifestar 
        mi falta de conformidad respecto a las condiciones actuales del servicio prestado.  
        <br><br>
        A la espera de una pronta solución a los inconvenientes ocasionados.  <br>
        <br>
        Saluda atentamente.
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
  