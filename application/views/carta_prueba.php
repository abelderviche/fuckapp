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
      Concurro a efectos de manifiestar mi disconformidad respecto de
      los términos en los que el servicio se encuentra siendo prestado.
      <br><br>
      Toda vez que, la situación descripta no resulta imputable a acción
      u omisión alguna por esta parte, solicito, tenga a bien arbitrar
      los medios necesarios para regularizar las condiciones de la
      prestación del servicio en cuestion.
      Sin otro particular.
    </div>

    <div class="usuario" ><?=$datos["nombre"]?> <?=$datos["apellido"]?></div>
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
  